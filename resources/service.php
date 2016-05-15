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
        'makeModerator' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/make_moderator',
            'responseModel' => 'GetResponse',
        ],
        'unmakeModerator' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/unmake_moderator',
            'responseModel' => 'GetResponse',
        ],
        'createContract' => [
            'httpMethod' => 'POST',
            'cookies' => true,
            'uri' => 'api/v1/contracts',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'expiration_date' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'metadata_category' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'title' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'description' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'currency_code' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'price' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'process_time' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'nsfw' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'shipping_origin' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'shipping_regions' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'ships_to' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'est_delivery_domestic' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'est_delivery_international' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'terms_conditions' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'returns' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'shipping_currency_code' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'shipping_domestic' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'shipping_international' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'keywords' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'category' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'condition' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'sku' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'images' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'free_shipping' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'moderators' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
                'options' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => false
                ],
            ]
        ],
        'uploadImage' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/upload_image',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'image' => [
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
                ]
            ]
        ],
        'changeSettings' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/settings',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'refund_address' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'currency_code' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'country' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'language' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'time_zone' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'notifications' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'shipping_addresses' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'blocked' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'libbitcoin_server' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'ssl' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => false
                ],
                'terms_conditions' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'refund_policy' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ],
                'moderators' => [
                    'type' => 'string',
                    'location' => 'postField',
                    'required' => true
                ]
            ]
        ],
        'markNotificationAsRead' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/mark_notification_as_read',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'id' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ]
            ]
        ],
        'markChatMessageAsRead' => [
            'httpMethod' => 'POST',
            'uri' => 'api/v1/mark_chat_message_as_read',
            'responseModel' => 'GetResponse',
            'parameters' => [
                'guid' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ]
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
