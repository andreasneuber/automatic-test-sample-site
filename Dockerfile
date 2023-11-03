FROM composer:latest

# Set the work directory for the application
WORKDIR /home

# COPY the needed files to the app folder in Docker image
COPY composer.json /home/
COPY index.php /home/
COPY bin/ /home/bin/
COPY commands/ /home/commands/
COPY config/ /home/config/
COPY controllers/ /home/controllers/
COPY views/ /home/views/

# Install the dependencies
RUN composer install
RUN composer dump-autoload -o

# Expose port 8000
EXPOSE 8000
