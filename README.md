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
```

## Sprawdzanie działania
```bash
docker-compose ps
```
<img width="912" alt="image" src="https://github.com/SlaneDRV/DockerLab11/assets/125742851/32848900-c269-4d03-b747-eb1ac4ea9e2d">

## Nginx: 
http://localhost:4001
powinna zostać wyświetlona strona startowa Nginx z wynikiem połączenia z MySQL.

## phpMyAdmin: 
http://localhost:6001
interfejs phpMyAdmin do zarządzania bazą danych.
