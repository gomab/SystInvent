<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 6/4/18
 * Time: 5:25 PM
 */

include_once("../database/constants.php");
include_once("User.php");

if(isset($_POST["username"]) AND isset($_POST["email"])){
    $user = new User();
    $result = $user->createUserAccount($_POST["username"], $_POST["email"], $_POST["password"], $_POST["role"]);
}