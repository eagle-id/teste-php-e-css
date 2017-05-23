<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() 
{
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn) 
{
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

/*
 * Preencha as funções abaixo;
 * Pode alterar os parametros se preferir;
*/

function find( $table = null, $id = null ) 
{  
    // stuff
}

function find_all( $table ) 
{
    // stuff
}

function save($table = null, $data = null) 
{
    // stuff
}

function update($table = null, $id = 0, $data = null) 
{
    // stuff
}

function remove( $table = null, $id = null ) 
{
    // stuff    
}
