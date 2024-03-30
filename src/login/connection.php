<?php

$dbhost = "django-app.ccp5f6xgksni.us-east-1.rds.amazonaws.com";
$dbuser = "admin";
$dbpass = "admin123";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
