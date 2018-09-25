<?php

$params = array_merge(
    require __DIR__ . '/params-local.php',
    require __DIR__ . '/params.php'
);
$db = array_merge(
    require __DIR__ . '/db.php',
    require __DIR__ . '/db-local.php'
);

$config = [
    'id'                  => 'basic-console',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'app\commands',
    'components'          => [
//        'user' => [
//            'identityClass' => 'app\models\User',
//            'enableAutoLogin' => true,
//        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'cache'       => [
            'class' => 'yii\caching\FileCache',
        ],
        'log'         => [
            'targets' => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db'          => $db,
        'urlManager'  => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => array_merge(
                require __DIR__ . '/url.php',
                require __DIR__ . '/url-local.php'
            ),
        ],
    ],
    'params'              => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
