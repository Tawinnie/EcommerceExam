<?php

//making action aware of controller

include '../settings/db_connect.php';
include '../settings/db_class.php';

//include controller
//collecting the form data
if (isset($_POST['save'])){
    $pname = $_POST['pname'];
    $pphone = $_POST['pphone'];

    //call a controller
        $sql = "INSERT INTO phonebook VALUES('$pname', $pphoned')";
        $entries=mysqli_connect($db,$sql);
        echo "Inserted into database";

}else{
    echo "Failed to insert";
}

?>
