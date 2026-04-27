# Portfolio - Tomas Stauber

## Requisitos
- PHP 8.3
- Composer
- Node.js
- npm

## Instalación

1. Clonar el repositorio
git clone https://github.com/tu-usuario/portfolio.git
cd portfolio

2. Instalar dependencias PHP
composer install

3. Instalar dependencias Node
npm install

4. Configurar el entorno
cp .env.example .env
php artisan key:generate

5. Compilar assets
npm run build

6. Levantar el servidor
php artisan serve

Abrir http://127.0.0.1:8000

## Opción con Docker

docker build -t portfolio .
docker run -p 8000:8000 portfolio

Abrir http://127.0.0.1:8000