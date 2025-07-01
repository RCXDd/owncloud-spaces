FROM nextcloud:latest

# Install required packages
RUN apt-get update && apt-get install -y \
    libmagickcore-6.q16-6-extra \
    && rm -rf /var/lib/apt/lists/*

# Copy configuration
COPY config.php /var/www/html/config/config.php
COPY autoconfig.php /var/www/html/config/autoconfig.php

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

# Use original entrypoint
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]