# Imagen base con XAMPP preinstalado
FROM tomsik68/xampp:latest

# Mantenedor (puedes personalizarlo)
LABEL maintainer="luisfernandoibarrao@gmail.com"

# Directorio de trabajo dentro del contenedor
WORKDIR /www/ongdonacion

# Copia tus archivos locales del proyecto al servidor web
# (si tienes un proyecto PHP, colócalo en ./www antes de construir)
COPY ././ /www/ongdonacion
# Exponer los puertos necesarios:
# 22 = SSH, 80 = Apache, 443 = HTTPS
EXPOSE 22 80 443

# Iniciar XAMPP (Apache, MySQL, etc.)
CMD ["/opt/lampp/lampp", "start", "&&", "tail", "-f", "/opt/lampp/logs/access_log","httpd-foreground","bash","/usr/bin/supervisord" "-n"]