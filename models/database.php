<?php
class Database
{
    public static function StartUp()
    {
        $host="localhost";
        $dbname="banco";
        $user="root";
        $pass="";
        if($_SERVER["SERVER_NAME"]=="projectbnk.000webhostapp.com"){
            $host="localhost";
            $dbname="id11867025_banco";
            $user="id11867025_banco";
            $pass="banco";
        }
        $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}