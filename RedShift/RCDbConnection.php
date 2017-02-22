<?php

/**
 * Created by PhpStorm.
 * User: bahaa
 * Date: 2/22/17
 * Time: 1:49 PM
 */
class RCDbConnection extends CDbConnection
{

    public $driverMap = array(
        'pgsql' => 'CRPgsqlSchema',    // PostgreSQL
/*        'mysqli' => 'CMysqlSchema',   // MySQL
        'mysql' => 'CMysqlSchema',    // MySQL
        'sqlite' => 'CSqliteSchema',  // sqlite 3
        'sqlite2' => 'CSqliteSchema', // sqlite 2
        'mssql' => 'CMssqlSchema',    // Mssql driver on windows hosts
        'dblib' => 'CMssqlSchema',    // dblib drivers on linux (and maybe others os) hosts
        'sqlsrv' => 'CMssqlSchema',   // Mssql
        'oci' => 'COciSchema',        // Oracle driver
  */  );

    public function __construct($dsn = '', $username = '', $password = '')
    {
        parent::__construct($dsn, $username, $password);
    }

    public function init()
    {
        parent::init();
    }


}