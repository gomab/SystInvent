<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 6/6/18
 * Time: 3:35 PM
 */

include_once("./database/constants.php");

if (isset($_SESSION["userid"])){
    session_destroy();
}
header("location:".DOMAIN."/");
