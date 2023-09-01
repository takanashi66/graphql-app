<?php

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Post',
        'description' => 'A post',
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'The ID of the post',
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The title of the post',
            ],
            'subtitle' => [
                'type' => Type::string(),
                'description' => 'The subtitle of the post',
            ],
            'body' => [
                'type' => Type::string(),
                'description' => 'The body of the post',
            ],
        ];
    }
}
