FROM owncloud/server:latest

# Set working directory
WORKDIR /var/www/owncloud

# Install required PHP extensions for S3
RUN apt-get update && apt-get install -y \
    php8.1-curl \
    php8.1-xml \
    php8.1-simplexml \
    && rm -rf /var/lib/apt/lists/*

# Install Composer for PHP dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install AWS SDK via Composer
RUN composer require aws/aws-sdk-php

# Copy custom configuration file
COPY config.php /var/www/owncloud/config/config.php

# Create data directory
RUN mkdir -p /var/www/owncloud/data && \
    chown -R www-data:www-data /var/www/owncloud && \
    chmod -R 755 /var/www/owncloud

# Expose port
EXPOSE 8080

# Health check
HEALTHCHECK --interval=30s --timeout=10s --retries=5 \
  CMD curl -f http://localhost:8080/status.php || exit 1

# Start command
CMD ["/usr/bin/entrypoint", "/usr/bin/owncloud", "server"]