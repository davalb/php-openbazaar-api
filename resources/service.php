<?php
return [
    'operations' => [
        'login' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/login',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'username' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'password' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
            ]
        ],
        'getProfile' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/profile',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
            ]
        ],
        'getListings' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_listings',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
            ]
        ],
        'getFollowers' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_followers',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
            ]
        ],
        'getFollowing' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_following',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
            ]
        ],
    ],
    'models' => [
        'GetResponse' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ],
        ],
    ]
];
