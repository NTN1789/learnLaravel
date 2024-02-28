FROM mysql:8.0

ENV MYSQL_ROOT_PASSWORD "banjo"
ENV MYSQL_DATABASE "teste"

RUN echo "Criando banco de dados ${MYSQL_DATABASE}..." && \
    mysql -u root -p"$MYSQL_ROOT_PASSWORD" -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"