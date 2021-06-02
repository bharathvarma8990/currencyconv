<!DOCTYPE html>
<html>
<head>
<title>Currency Convertor</title>
</head>

<style>
div {
  background-color: lightgrey;
  width: 400px;
  border: 15px solid blue;
  padding: 50px;
  margin: 20px;
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
<center>

<body style="background-image: url('images/currency 3.jpg');">



<h1>Currency Convertor</h1>
<p>Check the live currency values</p><br>
<div>

<form method="POST" action="convert.php">

<select align="left" id="from_currency" name="from_currency">
<option value="USD">USD</option>
<option value="AED">AED</option>
<option value="AFN">AFN</option>
<option value="ALL">ALL</option>
<option value="AMD">AMD</option>
<option value="ANG">ANG</option>
<option value="AOA">AOA</option>
<option value="ARS">ARS</option>
<option value="AUD">AUD</option>
<option value="AWG">AWG</option>
<option value="AZN">AZN</option>
<option value="BAM">BAM</option>
<option value="BBD">BBD</option>
<option value="BDT">BDT</option>
<option value="BGN">BGN</option>
<option value="BHD">BHD</option>
<option value="BIF">BIF</option>
<option value="BND">BND</option>
<option value="BOB">BOB</option>
<option value="BRL">BRL</option>
<option value="BSD">BSD</option>
<option value="BTC">BTC</option>
<option value="BTN">BTN</option>
<option value="BWP">BWP</option>
<option value="BYR">BYR</option>
<option value="BZD">BZD</option>
<option value="CAD">CAD</option>
<option value="CDF">CDF</option>
<option value="CHF">CHF</option>
<option value="CLP">CLP</option>
<option value="CNY">CNY</option>
<option value="COP">COP</option>
<option value="CRC">CRC</option>
<option value="CUP">CUP</option>
<option value="CVE">CVE</option>
<option value="CZK">CZK</option>
</select>
<select align="right" id="to_currency" name="to_currency">
<option value="INR">INR</option>
  <option value="AED">AED</option>
<option value="AFN">AFN</option>
<option value="ALL">ALL</option>
<option value="AMD">AMD</option>
<option value="ANG">ANG</option>
<option value="AOA">AOA</option>
<option value="ARS">ARS</option>
<option value="AUD">AUD</option>
<option value="AWG">AWG</option>
<option value="AZN">AZN</option>
<option value="BAM">BAM</option>
<option value="BBD">BBD</option>
<option value="BDT">BDT</option>
<option value="BGN">BGN</option>
<option value="BHD">BHD</option>
<option value="BIF">BIF</option>
<option value="BND">BND</option>
<option value="BOB">BOB</option>
<option value="BRL">BRL</option>
<option value="BSD">BSD</option>
<option value="BTC">BTC</option>
<option value="BTN">BTN</option>
<option value="BWP">BWP</option>
<option value="BYR">BYR</option>
<option value="BZD">BZD</option>
<option value="CAD">CAD</option>
<option value="CDF">CDF</option>
<option value="CHF">CHF</option>
<option value="CLP">CLP</option>
<option value="CNY">CNY</option>
<option value="COP">COP</option>
<option value="CRC">CRC</option>
<option value="CUP">CUP</option>
<option value="CVE">CVE</option>
<option value="CZK">CZK</option>

</select>
<br>
<br>
<input type="submit" id="right-label" value="Convert" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
</div>
</form><br>
</center>
</body>
</html>