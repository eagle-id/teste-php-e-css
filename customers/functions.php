<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer = null;

function index() 
{
    global $customers;
    $customers = find_all('customers');
}

function view($id) 
{
    global $customer;
    $customer = find('customers', $id);
}

function add() 
{
    if (!empty($_POST['customer'])) {
        $customer = $_POST['customer'];
        save('customers', $customer);
        header('location: index.php');
    }
}

function edit()
{
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['customer'])) {
            $customer = $_POST['customer'];
            update('customers', $id, $customer);
            header('location: index.php');
        } else {
            global $customer;
            $customer = find('customers', $id);
        } 
    } else {
        header('location: index.php');
    }
}

function delete($id = null) 
{
    global $customer;
    $customer = remove('customers', $id);
    header('location: index.php');
}
