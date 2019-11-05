1 задание  1 позиция
<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
error_reporting(-1);
if (isset($_GET['send'])){
    $a = (int) $_GET['a'];
    $b = (int) $_GET['b'];
    $c = (int) $_GET['c'];

    $result = eq_roots($a, $b, $c);
}
function eq_roots($a, $b, $c) {
    if ($a==0) return false;

    if ($b==0) {
        if ($c<0) {
            $x1 = sqrt(abs($c/$a));
            $x2 = sqrt(abs($c/$a));
        } elseif ($c==0) {
            $x1 = $x2 = 0;
        } else {
            $x1 = sqrt($c/$a).'i';
            $x2 = -sqrt($c/$a).'i';
        }
    } else {
        $d = $b*$b-4*$a*$c;
        if ($d>0) {
            $x1 = (-$b+sqrt($d))/2*$a;
            $x2 = (-$b-sqrt($d))/2*$a;
        } elseif ($d==0) {
            $x1 = $x2 = (-$b)/2*$a;
        } else {
            $x1 = -$b . '+' . sqrt(abs($d)) . 'i';
            $x2 = -$b . '-' . sqrt(abs($d)) . 'i';
        }
    }
    return array($x1, $x2);
}
?>
<p>A B C :</p>
<h4>A * x<sup>2</sup> + B * x + C = 0</h4>
<form method="GET">
    <p>a = <input type="text" name="A" /></p>
    <p>b = <input type="text" name="B" /></p>
    <p>c = <input type="text" name="C" /></p>
    <input type="submit" name="send" value="решить"/>
</form>

<? if (isset($result)): ?>
<hr />
<h3><?=$a ?>  x<sup>2</sup> + <?=$b ?>  x + <?=$c ?> = 0</h3>
<p>Корни уравнения</p>
<p>X<sub>1</sub> = <?=$result[0] ?></p>
<p>X<sub>2</sub> = <?=$result[1] ?></p>
<? endif ?>
</body>
</html>
2 задание
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
1- 2 позиция
<html>
    <head>
    	<meta charset = "utf8">
    </head>
    <body>
        <form action = "anketa.php" method = "GET">
            <select name=years>
             "<option value=\"$year\">$year</option>";
             </select>
            <br>
            <input type = "submit" name = "send" value = "ÐžÑ‚Ð¿Ñ€Ð°Ð²Ð¸Ñ‚ÑŒ">
            <br>
        </form>
    </body>
 </html>
