FROM php:8.1-apache

# 1. Aktifkan ekstensi mysqli untuk menghubungkan PHP ke MySQL Railway kamu kawan
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# 2. Salin semua file dari folder luar GitHub langsung ke root web server Apache (/var/www/html)
COPY . /var/www/html/

# 3. Atur izin folder agar server Apache bisa membaca file PHP dengan lancar
RUN chown -R www-data:www-data /var/www/html

# 4. Beritahu Railway kalau server ini menggunakan port 80 bawaan Apache
EXPOSE 80
