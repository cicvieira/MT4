# MT4

### Requisitos

- php 5.6 ou superior com as bibliotecas ssh2 instalada `sudo apt update && sudo apt-get install libssh2–1-dev libssh2–1` e Mcrypt `sudo pecl install mcrypt-1.0.1` 
- Apache 
- Banco de Dados MySQL 

Ativar extensão no php `sudo nano /etc/php/7.2/apache2/php.ini` 
- `extension=openssl` 
- `extension=mcrypt.so`
- `extension=php_ssh2`
- `extension=mysqli`

### Instalação

#### Configurações do Servidor Web

Coloque a aplicação dentro do seu servior web `/var/www/html/mt4`.

Configuração usada no Servidor de Desenvolvimento (Ubuntu 18.04 LTS + Apache):

#### Configurações do Banco de Dados

Rode o script do Banco de dados no MySQL: `script.sql`

Arquivo de conexão: `init.php`
Configuração abaixo:
```ini
//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');//senha
define('BD_BANCO','mt4');
```

> Desenvolvido (2019-04-21) por [Cicero Vieira](https://github.com/cicvieira).                                                                               

