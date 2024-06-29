return [
    'callback' => 'http://yourwebsite.com/callback.php',
    'providers' => [
        'Google' => [
            'enabled' => true,
            'keys'    => [ 'id' => 'GOOGLE_CLIENT_ID', 'secret' => 'GOOGLE_CLIENT_SECRET' ],
        ],
        'Facebook' => [
            'enabled' => true,
            'keys'    => [ 'id' => 'FACEBOOK_APP_ID', 'secret' => 'FACEBOOK_APP_SECRET' ],
        ],
    ],
];
