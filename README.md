# RedShift-Yii1
Yii1 redshift database extension

# Setup instructions 
Place RedShift into protected/extensions folder of your project  
in main.php, add the following to import
```php
'import'=>array(
		......
		
        'application.extensions.RedShift.*',
        'application.extensions.RedShift.schema.pgsql.*',
    ......
	),
```
in main.php, add the following to components
```php
return [
    //....
    'components' => [
       'db'=>array(
            'class'=>'RCDbConnection',
            'connectionString' => 'pgsql:host=<HOST>;port=<PORT>;dbname=<DBNAME>',
            'username'=>'<USERNAME>',
            'password'=>'<PASSWORD>',
            'charset'=>'UTF8',
        ),
    ],
];
```
# Done !
