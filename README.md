# Smart Links

Este é um projeto Laravel com front-end integrado utilizando Vite e Tailwind CSS. O objetivo deste sistema é criar biolinks e gerenciá-los para que qualquer pessoa que acesse o seu site usando o @seunick, conseguirá ver todos os links em uma unica página. 

## 🚀 Requisitos

Antes de iniciar, certifique-se de ter os seguintes softwares instalados na sua máquina:

- PHP >= 8.1
- Composer
- Node.js >= 16
- NPM ou Yarn
- MySQL ou outro banco de dados compatível
- Docker (opcional, para uso com Laravel Sail)

## ⚙️ Instalação

Clone o repositório:

```bash
git clone https://github.com/jgsorio/smart-links.git
cd smart-links
```

Instale as dependências PHP:

```bash
composer install
```

Instale as dependências JavaScript:

```bash
npm install
# ou
yarn
```

Copie o arquivo `.env` e configure com suas credenciais:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

Configure o banco de dados no `.env` e rode as migrations:

```bash
php artisan migrate
```


Gere o link do storage para a pasta pública

```bash
php artisan storage:link
```

## 🧪 Rodando o projeto

Inicie o servidor de desenvolvimento Laravel:

```bash
php artisan serve
```

Compile os assets com Vite:

```bash
npm run dev
```


Acesse a aplicação em `http://localhost:8000`.

## 🐳 Usando com Docker (Laravel Sail)

Caso prefira usar Docker, rode os comandos abaixo:

```bash
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```

## ✅ Testes

Para rodar os testes, use:

```bash
php artisan test
```

---

## 🧾 Licença

Este projeto está licenciado sob os termos da [MIT License](LICENSE).
