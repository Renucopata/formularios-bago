<?php

/*return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];*/
return [
    'class' => 'neconix\yii2oci8\Oci8Connection',
    'dsn' => 'oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=dbbago.bago.com.bo)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=dbbago.bago.com.bo)));charset=AL32UTF8',
    'username' => 'pasantiacom',
    'password' => 'pasantiacom',
    'attributes' => [ PDO::ATTR_PERSISTENT => true ],
    'enableSchemaCache' => true, //Oracle dictionaries is too slow :(, enable caching
    'schemaCacheDuration' => 24*3600*30, //1 hour
    'on afterOpen' => function($event) {

    /* A session configuration example */
        /*$q = <<<SQL
begin
  execute immediate 'alter session set NLS_SORT=BINARY_CI';
  execute immediate 'alter session set NLS_TERRITORY=AMERICA';
end;
SQL;
        $event->sender->createCommand($q)->execute();*/
        $event->sender->createCommand("ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'")->execute();
    }
    
];
