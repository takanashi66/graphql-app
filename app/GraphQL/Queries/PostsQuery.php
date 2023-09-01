<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;

class PostsQuery extends Query
{
    protected $attributes = [
        'name' => 'posts',
        'description' => 'A query',
        'model' => Posts::class,
    ];

    public function type(): Type
    {
        return Type::listOf(Type::string());
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::string(),
            ],
            'title' => [
                'name' => 'title',
                'type' => Type::string(),
            ]
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        // /** @var SelectFields $fields */
        // $fields = $getSelectFields();
        // $select = $fields->getSelect();
        // $with = $fields->getRelations();

        // return [
        //     'The posts works',
        // ];
        if (isset($args['id'])) {
            return Posts::where('id' , $args['id'])->get();
        }

        if (isset($args['title'])) {
            return Posts::where('title', $args['title'])->get();
        }

        return Posts::all();
    }
}
