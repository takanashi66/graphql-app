## インストールしたもの

- [graphql-laravel](https://github.com/rebing/graphql-laravel)

```
composer require rebing/graphql-laravel

sail artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"
```

- [laravel-graphql-playground](https://github.com/mll-lab/laravel-graphql-playground)

```
composer require mll-lab/laravel-graphql-playground
```

これでデータを返して欲しい？

```
http://localhost:8888/graphql?query=query+Fetchposts{posts{id,title}}
```
