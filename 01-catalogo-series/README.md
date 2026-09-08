# 📺 Catálogo de Séries

Projeto criado durante o curso **[Laravel: Criando uma aplicação com MVC](https://cursos.alura.com.br/course/laravel-criando-aplicacao-mvc)** (Alura), parte do repositório de estudos [oficina-laravel](https://github.com/hectorex/oficina-laravel).

Uma aplicação simples em Laravel que permite cadastrar séries de TV e listá-las em ordem alfabética.

## ✅ Status

Curso concluído em 07/09/2026 — 100% de progresso, certificado emitido.

## 🚀 Funcionalidades

- Listagem de séries cadastradas, ordenadas alfabeticamente
- Cadastro de novas séries via formulário

## 🛠️ Tecnologias e conceitos aplicados

- **PHP 8 / Laravel** — estrutura MVC
- **Controllers** — lógica de listagem e cadastro (`SeriesController`)
- **Blade** — views, layout reutilizável via componente (`x-layout`) e slots
- **Rotas** — GET/POST, incluindo proteção CSRF nos formulários
- **Laravel Mix** — compilação de assets front-end (Sass)
- **Bootstrap 5** — estilização das views (formulários, botões, listas)
- **Eloquent ORM** — Model `Serie`, consultas com `orderBy`, `save()`
- **Migrations** — versionamento da estrutura do banco de dados

## 📂 Estrutura relevante

```
app/
├── Http/Controllers/
│   └── SeriesController.php
├── Models/
│   └── Serie.php
resources/views/
├── components/
│   └── layout.blade.php
└── series/
    ├── index.blade.php
    └── create.blade.php
routes/
└── web.php
```

## 🧠 Aprendizados

- Diferença entre montar HTML manualmente no Controller vs. usar Views (Blade)
- Como funciona um componente Blade com `$slot` e props
- Diferença entre `DB::` (query builder cru) e Eloquent (Model), e por que Eloquent é preferível na maioria dos casos
- Configuração e resolução de conflitos entre Laravel Mix, Webpack e Node.js em ambientes com versões mais recentes
- Importância do token `@csrf` em formulários POST

## ▶️ Como rodar localmente

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install --legacy-peer-deps
npm run mix
php artisan serve
```

Acesse `http://localhost:8000/series`.

---

Projeto de estudo — instrutor do curso: [Vinicius Dias](https://cursos.alura.com.br/user/cviniciussdias).