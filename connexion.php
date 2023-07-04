<?php
try{
    $bd= new PDO("mysql:host=localhost; dbname=tpbd","root", "");
} catch(Exception $e){
    die($e->getMessage());
}