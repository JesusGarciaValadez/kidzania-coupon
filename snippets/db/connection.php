<?php
try
{
    $dbh = new PDO( 'mysql:host=' . $config[ 'database' ][ 'db_host' ] . ';dbname=' . $config[ 'database' ][ 'db_name' ], $config[ 'database' ][ 'db_user' ], $config[ 'database' ][ 'db_password' ] );
    $dbh->exec("SET CHARACTER SET utf8");
}
catch ( PDOException $e )
{
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}