<?php

class DBConnect
{
    public function connect()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'users';
        $connection = mysqli_connect($host, $user, $password, $database);
        return $connection;
    }
}
