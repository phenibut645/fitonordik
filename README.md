# FITONORDIC LAB

Laravel starter for the FITONORDIC LAB website.

## What is prepared

- Laravel 13 scaffold in the current repository
- Reusable Blade layout with separate `header` and `footer` partials
- Named routes for the main menu pages and legal footer pages
- Docker-based local environment via Laravel Sail

## Requirements

- Docker Desktop or Docker Engine
- WSL2 if you run the project from Windows
- Free local ports: `8081`, `3306`, `6379`, `8025`, `1025`

System PHP is not required. The project runs through Docker via Laravel Sail.

## First launch

Open terminal in the project root:

```bash
cd /home/phenibut/fitonordik
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
```

Then open:

- Site: [http://localhost:8081](http://localhost:8081)
- Mailpit: [http://localhost:8025](http://localhost:8025)

## Daily commands

Start project:

```bash
./vendor/bin/sail up -d
```

Stop project:

```bash
./vendor/bin/sail down
```

Run migrations:

```bash
./vendor/bin/sail artisan migrate
```

Open Laravel console:

```bash
./vendor/bin/sail artisan
```

View containers:

```bash
docker compose ps
```

View logs:

```bash
docker compose logs -f
```

## If the project does not start

1. Check that Docker is running.
2. Make sure port `8081` is free.
3. Restart containers:

```bash
./vendor/bin/sail down
./vendor/bin/sail up -d --build
```

4. Run migrations again:

```bash
./vendor/bin/sail artisan migrate
```

## Project structure

- `app/Http/Controllers/PageController.php` contains starter page data
- `resources/views/layouts/app.blade.php` is the shared layout
- `resources/views/partials/header.blade.php` and `resources/views/partials/footer.blade.php` are reusable partials
- `resources/views/pages` contains the page templates
- `public/site.css` contains the temporary site styles without requiring a frontend build
