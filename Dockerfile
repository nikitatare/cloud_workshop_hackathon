FROM php:7.2
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
EXPOSE 80
CMD ["php","test.php"]
