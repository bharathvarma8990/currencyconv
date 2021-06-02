<!DOCTYPE html>
<html>
<head>
<title>Convertor Page</title>
</head>



<style>

div {
  width: 80px;
  padding: 10px;
  border: 5px solid blue;
  margin: 0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #0000FF;
}
</style>


<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="currency.php">Currency</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

<body style="background-image: url('images/currency 3.jpg');">
<center>
<h1>Converted Values</h1><br>
<br>
<?php

$from_currency = $_POST['from_currency'];
$to_currency = $_POST['to_currency'];

function convertCurrency($from_currency,$to_currency){
  $apikey = 'fccf239713f3f2c14f6c';

  $from_Currency = urlencode($from_currency);
  $to_Currency = urlencode($to_currency);
  $query =  "{$from_Currency}_{$to_Currency}";

  // change to the free URL if you're using the free version
  $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
  $obj = json_decode($json, true);

  $val = floatval($obj["$query"]);

  $cc=number_format($val,4 , '.', '');
  echo "The live currency rate is:<br></br> <div>$cc</div>";
}

//uncomment to test
echo convertCurrency($from_currency,$to_currency);
?>

</center>
</body>
</html>
