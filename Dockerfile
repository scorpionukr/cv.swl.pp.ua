FROM nginx:latest
LABEL org.opencontainers.image.authors="scorpionukr@gmail.com"

EXPOSE 80

WORKDIR /usr/share/nginx/html

COPY . .