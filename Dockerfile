FROM dunglas/frankenphp:latest-php8.2-alpine

# Install ekstensi mysqli untuk menghubungkan PHP ke MySQL Railway
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Salin semua file PHP ke dalam folder web server di dalam server cloud
COPY . /app/public

# Atur port agar sesuai dengan port dinamis dari Railway
ENV PORT=8080
EXPOSE 8080
