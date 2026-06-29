<?php

date_default_timezone_set(
    'Asia/Jakarta'
);

class Database
{
    private $host = "localhost";
    private $dbname = "ecommerce_buku";
    private $username = "root";
    private $password = "";

    public function connect()
    {
        try
        {
            $conn = new PDO(
                "mysql:host=".$this->host.
                ";dbname=".$this->dbname,
                $this->username,
                $this->password
            );

            $conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $conn;
        }
        catch(PDOException $e)
        {
            die(
                "Koneksi gagal : ".
                $e->getMessage()
            );
        }
    }
}