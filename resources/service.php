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
        'getSales' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_sales',
            'responseModel' => 'GetResponse',
        ],
        'getPurchases' => [
            'httpMethod' => 'GET',
            'uri' => 'api/v1/get_purchases',
            'responseModel' => 'GetResponse',
        ],
        'follow' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/follow',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ]
            ]
        ],
        'unfollow' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/unfollow',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ]
            ]
        ],
        'changeProfile' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/profile',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'name' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'location' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'handle' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'about' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'short_description' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'nsfw' => [
                    'type' => 'boolean',
                    'location' => 'postField',
                    'required' => false
                ],
                'vendor' => [
                    'type' => 'boolean',
                    'location' => 'postField',
                    'required' => false
                ],
                'moderator' => [
                    'type' => 'boolean',
                    'location' => 'postField',
                    'required' => false
                ],
                'website' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'email' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'primary_color' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'secondary_color' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'text_color' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'background_color' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'avatar' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'header' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'pgp_key' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ]
            ]
        ],
        'createSocialAccount' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/social_accounts',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'account_type' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true,
                    'filters' => [
                        "strtolower" => [
                            "method" => "OpenBazaar\Filter::isValidAccountType",
                            "args" => [ "@value" ]
                        ]
                    ]
                ],
                'username' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'proof' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false,
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
