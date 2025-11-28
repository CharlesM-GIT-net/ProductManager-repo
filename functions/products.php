<?php

include 'connectdb.php';
//For Unknown Reason, I use this to let table be functional.
function getAllProducts(){
    $conn = Connect();
    $query = 'SELECT * FROM product';
    $result= $conn->query($query); //Executes query
    $data = [];

    while($row = $result->fetch_assoc()){
        $data[]=$row;
    }
    return $data;
}
function deleteProduct($id){
    $conn = Connect();
    $query = "DELETE FROM invoice WHERE inv_number='$id'";
    $result= $conn->query($query); //Executes query
    return $result;
}

function joinproduct(){
    $conn = Connect();
    $query = "SELECT i.inv_number, 
    CONCAT(c.cus_lname ,' ' , c.cus_fname , '' , c.cus_initial) AS Customer_Name, 
    DATE_FORMAT(i.inv_date, '%d %M %y') AS inv_date,i.inv_subtotal,i.inv_tax,i.inv_total
    FROM customer c
    INNER JOIN invoice i
    ON c.cus_code = i.cus_code;";
    $result =$conn->query($query);
    return $result;
}

function getAllCustomers(){
    $conn = Connect();
    $query = "SELECT cus_code, CONCAT( cus_fname, ' ', cus_initial, ' ' , cus_lname) AS CustomerName,
    cus_areacode,cus_phone, cus_balance
    FROM customer;";
    $result = $conn->query($query);
    $data = [];
    while($row = $result->fetch_assoc()){
        $data[]=$row;
    }
    return $data;
}