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

function find( $table = null, $id = null ) 
{  
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $numRows = $result->num_rows;
                for ($i=0; $i < $numRows; $i++) { 
                    $found[$i] = $result->fetch_assoc();
                }
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    
    return $found;
}

function find_all( $table ) 
{
    return find($table);
}

/*
 * Preencha as funções abaixo;
*/

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
