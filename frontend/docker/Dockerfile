FROM node:17.9.1-alpine3.15
WORKDIR /usr/local/src
COPY package.json ./
# COPY yarn.lock ./
RUN yarn install
COPY . .
EXPOSE 8080
CMD yarn serve
