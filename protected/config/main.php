<?php
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'ООО "Профдезинфекция" - дератизация, дезинсекция, дезинфекция, уничтожение насекомых, уничтожение грызунов, Кстово',
    'preload' => array('log', 'less'),
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.mail.*',
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'eldamar',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
    ),
    'components' => array(
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap',
        ),
        'mail' => array(
            'class' => 'YiiMail',
            'transportType' => 'php',
            'viewPath' => 'application.views.mail',
            'logging' => true,
            'dryRun' => false
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
            'showScriptName' => false,
            'caseSensitive' => false,
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
        'less' => array(
            'class' => 'ext.less.components.LessCompiler',
            'forceCompile' => false,
            'paths' => array(
                'less/style.less' => 'css/style.css',
            ),
        ),
    ),
    'params' => array(
        'adminEmail' => 'info@profdez.com',
        'pageKeywords' => 'профдезинфекция, дезинфектология, дератизация, дезинсекция, дезинфекция, профилактика, профилактическая дезинфекция, помещений, обработка, уничтожение, борьба, грызуны, грызунов, крысы, крыс, мыши',
        'pageDescription' => 'Команда квалифицированных специалистов окажет профессиональную помощь в решении проблем связанных с грызунами, насекомыми, плесенью и неприятным запахом.',
    ),
);