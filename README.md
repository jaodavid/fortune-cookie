# fortune-cookie
simple fortune cookie app created from Laravel and Vuejs

# Backend
- Backend services for fortune cookie application
---------------------------------

## Setup Project / Deploy instructions
- git clone https://github.com/jaodavid/fortune-cookie.git OR extract ZIP file
- cd fortune-cookie/backend
- composer install
- npm install
- cp .env.example .env
- Create an empty database for your project using the database tools you prefer
- In the .env file, add database information to allow Laravel to connect to the database
    - In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database     you just created. This will allow us to run migrations and seed the database in the next step.
- php artisan migrate
- php artisan db:seed
- php artisan serve
----------------------------------

# Frontend
- SPA for fortune cookie application
----------------------------------

## Project setup
```
cd fortune-cookie/frontend
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```

### Lints and fixes files
```
npm run lint
```

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).

----------------------------------

# Author
- Mark Jourine David
