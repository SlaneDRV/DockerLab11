# Lab11 - Docker Compose

## Skład projektu
- **Nginx** - serwer internetowy
- **PHP** - przetwarzanie skryptów serwerowych
- **MySQL** - baza danych
- **phpMyAdmin** - interfejs webowy do zarządzania bazą danych MySQL

## Pliki projektu
- `docker-compose.yml` - konfiguracja wszystkich usług
- `index.php` - przykład skryptu PHP, który łączy się z MySQL
- `default.conf` - konfiguracja Nginxa
- `Dockerfile` - konfiguracja obrazu PHP z potrzebnymi rozszerzeniami

## Uruchamianie projektu
```bash
docker-compose up -d --build
