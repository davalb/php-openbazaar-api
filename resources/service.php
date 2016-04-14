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
        'getSettings' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/settings',
            'responseModel' => 'GetResponse',
        ],
        'getNotifications' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_notifications',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'limit' => [
                    'type' => 'integer',
                    'location' => 'query',
                    'required' => false
                ],
            ]
        ],
        'getChatMessages' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_chat_messages',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'limit' => [
                    'type' => 'integer',
                    'location' => 'query',
                    'required' => false
                ],
                'start' => [
                    'type' => 'integer',
                    'location' => 'query',
                    'required' => false
                ],
            ]
        ],
        'getChatConversations' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_chat_conversations',
            'responseModel' => 'GetResponse',
        ],
        'shutdown' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/shutdown',
            'responseModel' => 'GetResponse',
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
