## Installation

Clone repository:
```sh
git clone https://github.com/douglasew/projeto-laravel.git
```
Install dependencies:
```sh
composer install
```
Command to generate your app key:
```sh
php artisan key:generate
```
## Database
Create your database and add the name in ".env"

![settings of connection with database](https://cdn.discordapp.com/attachments/331545069423165440/845492439191126047/unknown.png)

Command to generate a migrate:
```sh
php artisan migrate
```
Make seeder
```sh
php artisan db:seed
```
Run server:
```sh
php artisan serve
```
Open [http://localhost/8000](http://localhost/example-api/public/api/) to view

## Layout
### Listar Pacientes
![lista](https://cdn.discordapp.com/attachments/331545069423165440/855170904468619264/Capturar.PNG)
### Cadastro de Paciente
![cadastro](https://cdn.discordapp.com/attachments/331545069423165440/855175058045534228/Capturar.PNG)
