<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 6/4/18
 * Time: 5:25 PM
 */

include_once("../database/constants.php");
include_once("User.php");
include_once("DBOperation.php");

if(isset($_POST["username"]) AND isset($_POST["email"])){
    $user = new User();
    $result = $user->createUserAccount($_POST["username"],$_POST["email"],$_POST["password"],$_POST["role"]);
    echo $result;
    exit();
}

/*
 * Login processing
 */

if (isset($_POST["log_email"]) AND isset($_POST["log_password"])){
    $user = new User();
    $result = $user->userLogin($_POST["log_email"],$_POST["log_password"]);
    echo $result;
    exit();
}

/**
 * To get Category
 */
if (isset($_POST["getCategory"])){
    $obj = new DBOperation();
    $rows = $obj->getAllRecord("categories");
    foreach ($rows as $row){
        echo "<option value='".$row["parent_cat"]."'>".$row["category_name"]."</option>";
    }
    exit();
}