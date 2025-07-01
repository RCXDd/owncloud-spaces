FROM nextcloud:latest

# Install required packages
RUN apt-get update && apt-get install -y \
    libmagickcore-6.q16-6-extra \
    && rm -rf /var/lib/apt/lists/*

# Copy autoconfig for setup
COPY autoconfig.php /var/www/html/config/autoconfig.php

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Health check
HEALTHCHECK --interval=30s --timeout=30s --start-period=120s --retries=3 \
  CMD curl -f http://localhost/status.php || exit 1

EXPOSE 80

# Use original entrypoint
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]