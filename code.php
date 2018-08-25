<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    

<?php

if( $_POST["card_number"])
				{
				$card_number = $_POST["card_number"];
				echo "<b style='color:red;'> Введена карта номер: ".$card_number." </b><br>";
                }

// Подключение к MSSQL
$servername = '31.28.7.157:51197';
$username = 'sa';
$password = 'qwe_098';
$link = mssql_connect($servername, $username, $password);
$select = mssql_select_db('KIR12', $link);
echo $select.'<br>';
$version = mssql_query('SELECT @@VERSION');
$row = mssql_fetch_array($version);
echo $row[0].'<br>';
?><pre><?print_r($row);?></pre><?
/*
//'insert into [KIR12]..[EVO_TEST]'
//==============================================
$uuid = 13;
$field1 = '"fghf"';
$field2 = '"sdfhdf"';
$ID = 123;
$write_to_sql = mssql_query('insert into [KIR12]..[EVO_TEST]([uuid],[field1],[field2],[id])values('.$uuid.','.$field1.','.$field2.','.$ID.')');
//==============================================
$version1 = mssql_query('SELECT [Field1] FROM [KIR12]..[EVO_TEST]');
//$row1 = mssql_fetch_array($version1);
//print_r($row1);
$i = 1;
if (!mssql_num_rows($version1)) {
    echo 'No records found';
} else {
    while ($row1 = mssql_fetch_array($version1)) {
        echo 'Строка номер  '.($i++).", значение - ".$row1['Field1'], PHP_EOL.'<br>';
    }
}
//print_r($version1);
//SELECT @@VERSION
if( $link ) {
     echo "<br> Connection established.<br>";
}else{
     echo "Connection could not be established.<br>";
     die( print_r( mssql_errors(), true));
}
*/
mssql_close($link);
echo "====================";
?>
</body>
</html>