# Score Films

O **Score Films** é um projeto para gerenciar uma lista de conteúdos consumidos, como séries, animes, desenhos, filmes e jogos. Você pode dar notas, adicionar comentários e também adicionar conteúdos que deseja assistir no futuro, ou tenha parado de assistir.

## Funcionalidades

- Autenticação
- Adicionar novos conteúdos a lista do sistema
- Gerenciar status do conteúdo (visto, pretende assistir, etc)
- Gerenciar notas e comentários sobre os conteúdos da lista

## Tecnologias Utilizadas

- PHP (Laravel)
- Laravel Livewire (Framework)
- Docker
- MySQL
- Node.js (npm)
- Tailwind (CSS Framework)

## Pré-requisitos

- [Docker](https://www.docker.com/get-started)
- [Node.js](https://nodejs.org/en/) com npm

## Como Rodar o Projeto Localmente

1. Clone o repositório:

```bash
git clone https://github.com/rThimoteo/score-films.git
cd score-films
```

2. Copie o arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

3. Certifique-se de ter o Docker instalado e rode o comando:
```bash
docker compose up --build
```

4. Após o Docker finalizar, faça o attach no container do `php-fpm` e rode os seguintes comandos:

```bash
docker exec php-fpm bash
su www-data -s /bin/bash
composer install
php artisan migrate
php artisan key:generate
```
5. Certifique-se de ter o npm instalado na sua máquina e rode:
```bash
npm install
npm run dev
```
6. Acesse o projeto no navegador através do endereço:
```bash
http://localhost:8080
```

## Próximas Features
- Adicionar universos. (Universos são agrupamentos de itens, que fazem referência ao mesmo conteúdo)
- Fazer uma tela para universos.
- Permitir adicionar e remover itens de universo.
- Mostrar o universo nos detalhes do item.
- Configurar seeders para produção/desenvolvimento.
- Exportar lista pelo excel.