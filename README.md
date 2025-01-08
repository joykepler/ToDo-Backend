# ToDo List Application (Backend)

## Diagrama do Banco de Dados:
![image](https://github.com/user-attachments/assets/31e6be8b-7065-40de-8b21-2322f4f15518)


## 📝 Descrição
Backend da aplicação ToDo List desenvolvida com Laravel. Esta é a API REST que serve o [frontend](https://github.com/joykepler/ToDo-Frontend).

## 🛠️ Tecnologias
- Laravel 10.x
- PHP 8.1+
- PostgreSQL
- Composer

## ⚙️ Requisitos
- PHP 8.1 ou superior
- PostgreSQL 12 ou superior
- Composer

## 🚀 Instalação e Configuração

1. Clone o repositório
```bash
git clone https://github.com/joykepler/ToDo-Backend.git
```

```bash
cd ToDo-Backend
```

2. Instale as dependências
```bash
composer install
```

3. Configure o ambiente

```bash
cp .env.example .env
```

Para Windows:
copy .env.example .env

```bash
php artisan key:generate
```

4. Configure o banco de dados no.env

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=todo_db
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

5. Execute as migrations
```bash
php artisan migrate
```

6. Inicie o servidor
```bash
php artisan serve
```

 ## 🔗 Repositório Front-end
 https://github.com/joykepler/ToDo-Frontend
