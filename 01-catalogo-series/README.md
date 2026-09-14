# 📺 Catálogo de Séries

Projeto criado durante os cursos **Laravel: Criando uma aplicação com MVC** e **Laravel: Validando formulários, usando sessões e definindo relacionamentos**, parte do repositório de estudos [oficina-laravel](https://github.com/hectorex/oficina-laravel).

Uma aplicação em Laravel que permite cadastrar séries de TV, com suas temporadas e episódios, e navegar entre elas.

## ✅ Status

- **Curso 1 — MVC:** concluído em 07/09/2026, certificado emitido.
- **Curso 2 — Validação, sessões e relacionamentos:** concluído em 14/09/2026, certificado emitido.

## 🚀 Funcionalidades

- Listagem de séries cadastradas, ordenadas alfabeticamente (via Global Scope)
- Cadastro de novas séries, já com criação em massa de temporadas e episódios
- Edição e exclusão de séries, com mensagens de sucesso via sessão (flash messages)
- Validação de formulário com mensagens de erro customizadas
- Listagem de temporadas de uma série, com contagem de episódios por temporada

## 🛠️ Tecnologias e conceitos aplicados

- **PHP 8.4 / Laravel 13** — estrutura MVC
- **Controllers** — `SeriesController`, `SeasonsController`
- **Blade** — views, layout reutilizável via componente (`x-layout`), componentes com props (`x-series.form`)
- **Rotas** — `Route::resource`, rotas nomeadas, rotas com parâmetros e verbo GET dedicado
- **Eloquent ORM** — Models `Series`, `Season`, `Episode`; relacionamentos `hasMany`/`belongsTo`; Global Scope; Route Model Binding
- **Validação** — `FormRequest` dedicado (`SeriesFormRequest`), mensagens customizadas em português, exibição de erros com `$errors`
- **Sessões** — flash messages entre requisições (mensagens de sucesso após criar/editar/excluir)
- **Bulk insert** — inserção em massa de temporadas e episódios em uma única query por tabela
- **Eager loading** — carregamento antecipado de relacionamentos (`with()`) para evitar o problema de N+1
- **Migrations** — foreign keys com `constrained()` e `onDelete('cascade')`
- **Debugbar** (`barryvdh/laravel-debugbar`) — inspeção de queries executadas em cada requisição
- **Bootstrap 5** — estilização das views

## 📂 Estrutura relevante

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── SeriesController.php
│   │   └── SeasonsController.php
│   └── Requests/
│       └── SeriesFormRequest.php
├── Models/
│   ├── Series.php
│   ├── Season.php
│   └── Episode.php
resources/views/
├── components/
│   ├── layout.blade.php
│   └── series/
│       └── form.blade.php
├── series/
│   ├── index.blade.php
│   ├── create.blade.php
│   └── edit.blade.php
└── seasons/
    └── index.blade.php
database/migrations/
├── ..._create_series_table.php
├── ..._create_seasons_table.php
└── ..._create_episodes_table.php
routes/
└── web.php
```

## 🧠 Aprendizados

- Diferença entre montar HTML manualmente no Controller vs. usar Views (Blade)
- Como funciona um componente Blade com `$slot` e props
- Diferença entre `DB::` (query builder cru) e Eloquent (Model), e por que Eloquent é preferível na maioria dos casos
- Mass Assignment e a importância do `$fillable`
- Named Routes e `Route::resource` para reduzir repetição de rotas
- Sessões e flash messages para feedback ao usuário entre redirects
- Validação automática via `FormRequest`, evitando validação manual duplicada
- Relacionamentos Eloquent (`hasMany`/`belongsTo`) e como definir a foreign key explicitamente quando o padrão de nomenclatura não se aplica
- O problema do N+1 e como resolvê-lo com eager loading (`with()`)
- Diferença entre inserir registros com `create()` (dispara eventos do model, retorna o ID) e com `insert()` em massa (mais rápido, mas sem eventos nem IDs de retorno)
- Cuidado com sobrescrita de array (`$var = [...]` vs. `$var[] = [...]`) ao acumular dados em loops
- Importância do `{{ }}` (escapado) vs. `{!! !!}` (não escapado) no Blade para prevenir XSS

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