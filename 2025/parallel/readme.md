# Readme

## 1. Build

`docker build -t my-php-zts .`

## 2. Run

`docker run --rm my-php-zts`
`docker run --rm -v $(pwd):/app my-php-zts`  щоб автоматично копіювалися файли

## 3. Inside a container

`docker run -it --rm my-php-zts bash`
