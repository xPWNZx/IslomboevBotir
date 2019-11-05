<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>МОЙ документ</title>
</head>
<body>
        <form action='search4.php' method='POST' name='form_filter'>

 <b>Search</b><br>
 <select name="selectVal">
 <option value="category">category</option>
 <option value="location">Country, state or zipcode</option>
 </select>
 <input type='text' name='search' placeholder='Enter text here...' size='50'><br>
 <input type='submit' value='Send'>

 </form>

<?php

// database connection

$db_host = "myhost";
$db_user = "myuser";
$db_password = "mypsw";
$db_name = "myname";

//connecting to database

$db = mysql_connect($db_host, $db_user, $db_password) or die ('Error - connection failed');
mysql_select_db($db_name, $db) or die ('Database selection error');

// retrieving search value we sent using get

$research = $_GET['research'];

// check if it has been sent, then it is ok

if ( $research == 'ok' ) {

// retrieving search value we sent using post

$search = $_POST['search'];

// check if the field has been filled

if ( $search == TRUE && $search != "" ) {

// character lenght more than 3

if ( strlen($search) >
</body>
</html>
