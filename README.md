# Documentação do sistema de Notícias


## Visão Geral:

```
Este sisetma foi desenvolvida em Laravel 11 e Vite no frontend. Os dados são armazenados em um banco de dados MySQL.
```

## Requisitos

- **PHP 8.3+ ou superior**
- **vite**
- **Servidor Web (Apache)**
- **Banco de Dados MySQL 8.0**
- **Composer** (para gerenciamento de dependências)

## Instalação

1. **Clone o Repositório:**
   
```  
   bash
   git clone https://seu_repositorio.git
   cd seu_repositorio
```

2. **Baixar as dependências do projeto**
   
```   
composer install
```
2.1 **Rodar**   

```
 php artisan serve
```


3. **Rodar:**


```
php artisan migrate
```

4. **Configuração da Conexão com o Banco de Dados:**

```
No arquivo env.php insira as credenciais do seu banco de dados:
```
```
define('DB_HOST', 'localhost');
define('DB_NAME', 'nome_do_banco_de_dados');
define('DB_USER', 'usuario');
define('DB_PASS', 'senha');
```

