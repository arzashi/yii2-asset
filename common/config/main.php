<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' => 'Smart Asset',
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                   '@app/views' => '@backend/themes/my_theme/views'
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
