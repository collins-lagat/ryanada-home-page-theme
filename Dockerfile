FROM node:14-slim as builder

RUN npm i npm@latest -g

WORKDIR /app

COPY . .

RUN npm install && npm run build

FROM wordpress:5.7

COPY --from=builder /app /var/www/html/wp-content/themes/ryanda