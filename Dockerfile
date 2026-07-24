# Production Container Definition for cloud-ops-php-blade-v40
FROM alpine:3.19
RUN apk add --no-cache bash curl
WORKDIR /app
COPY . /app
CMD ["echo", "cloud-ops-php-blade-v40 container active"]
