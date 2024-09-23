<?php


return [
        'class' => 'neconix\yii2oci8\Oci8Connection',
        'dsn' => 'oci:dbname=(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=dbbago.bago.com.bo)(PORT=1521))(CONNECT_DATA=(SERVICE_NAME=dbbago.bago.com.bo)));charset=AL32UTF8',
        'username' => 'ims2',
        'password' => 'ims2',
        'attributes' => [PDO::ATTR_PERSISTENT => true],
        'enableSchemaCache' => true,
        'schemaCacheDuration' => 24 * 3600 * 30,
        'on afterOpen' => function($event) {
            $event->sender->createCommand("ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS'")->execute();
        },
    ];
   



