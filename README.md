
# Installation instructions

Clone the repository

```bash
  git clone git@github.com:vladlazarev1998/news.git
```

Go to the created folder

```bash
  cd news
```

Copy the .env

```bash
  cp .env.example .env
```

Mount the docker image and start the local server

```bash
  sudo docker-compose -f docker-compose.loc.yml up -d
```

Go to the docker container

```bash
  sudo docker exec -it news-app bash
```

Install dependencies

```bash
  composer i
  npm i
```

Generate css and js files
```bash
  npm run build
```

Create a database and fill it with fake data
```bash
  php artisan migrate:refresh --seed
```

Generate a key for the application
```bash
  php artisan key:generate
```

Link to local server http://127.0.0.1:8082/
