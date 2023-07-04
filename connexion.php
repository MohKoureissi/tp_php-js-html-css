<?php
try{
    $bd= new PDO("mysql:host=localhost; dbname=tp_php_bd","root", "");
} catch(Exception $e){
    die($e->getMessage());
}