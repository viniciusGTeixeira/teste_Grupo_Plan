
## Documentação da API


### Descrição dos Diretórios e Arquivos

- **`/docker`**: Contém Dockerfiles e arquivos de configuração específicos para o Docker.
  - **`/php`**: Configurações específicas para o PHP.
    - **`local.ini`**: Arquivo de configuração para ajustar as configurações do PHP.
  - **`Dockerfile-app`**: Dockerfile para configurar o ambiente PHP (Laravel) para a aplicação.
  - **`Dockerfile-nginx`**: Dockerfile para configurar o Nginx.
  - **`Dockerfile-frontend`**: Dockerfile para configurar o ambiente do frontend.

- **`/frontend`**: Contém o código da aplicação front-end.
  - **`(Aplicação Front-end)`**: Diretório onde está localizada a aplicação front-end.

- **`/laravel-app`**: Contém o código da aplicação back-end (Laravel).
  - **`(Aplicação Back-end)`**: Diretório onde está localizada a aplicação back-end.

- **`/nginx`**: Contém arquivos de configuração do Nginx.
  - **`default.conf`**: Configuração padrão do Nginx.
  - **`fastcgi-php.conf`**: Configuração FastCGI para o PHP.
  - **`nginx.conf`**: Configuração principal do Nginx.

- **`docker-compose.yml`**: Arquivo de configuração do Docker Compose para definir e executar os serviços do Docker.

# Pré-Requisitos
Ambiente de Desenvolvimento: 
- NPM
- Docker
- Composer
- Conhecimento sobre ambientes apache/nginx
- vue.JS

**Arquivo .env:**
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret

# Executar o projeto:
- Em seu ambiente de desenvolvimento, acesse o diretorio do projeto e execute docker compose up --build com uso de "-" a depender de sua versão, isso irá configurar todo o ambiente necessário para executar a aplicação com MySQL, Docker (Com configuraçoes de linguagem necessárias) e Nginx. tudo de modo que funcione perfeitamente para testes.

** Mantenha as portas 8000, 8080 e 9000/9001 livres

**Para acessar a aplicação: http://localhost:8000**



