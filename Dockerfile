FROM php:8.5-apache

# Copy application files
WORKDIR /var/www/html/
COPY img ./img
COPY index.html .
COPY index.php .
COPY style.css .

RUN mkdir -p /DB

EXPOSE 80
# Run the script
CMD ["apache2-foreground"]


