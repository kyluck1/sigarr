<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'dsn' => 'oci:dbname=//localhost:1521/xe;charset=utf8',
    
    'username' => 'sigar',
    'password' => '123S.E.N.H.A.321',
    'charset' => 'utf8',
    'tablePrefix' => 'TB_',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
