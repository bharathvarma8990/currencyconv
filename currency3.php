<!DOCTYPE html>
<html>
<head>
<title>Currency Convertor</title>
</head>

<style>
div {
  background-color: lightgrey;
  width: 900px;
  height: 400px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}

.alignleft {
	float: left;
}
.alignright {
	float: right;
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
  <li><a href="index.php">Home</a></li>
  <li><a class="active" href="currency.php">Currency</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<body style="background-image: url('images/currency 3.jpg');">
<center>
<h2> CURRENCIES AVAILABLE  </h2> 

<div>
<p class="alignleft">
PYG-Paraguayan Guarani<br>
QAR-Qatari Riyal<br>
RON-Romanian Leu<br>
RSD-Serbian Dinar<br>
RWF-Rwandan Franc<br>
SAR-Saudi Riyal<br>
SBD-Solomon Islands Dollar<br>
SCR-Seychellois Rupee<br>
SDG-Sudanese Pound<br>
SEK-Swedish Krona<br>
SGD-Singapore Dollar<br>
SHP-Saint Helena Pound<br>
SLL-Sierra Leonean Leone<br>
SOS-Somali Shilling<br>
SRD-Surinamese Dollar<br>
STD-Sao Tome And Principe Dobra<br>
SYP-Syrian Pound<br>
THB-Thai Baht<br>
TOP-Paanga<br>
TRY-Turkish New Lira<br>
TWD-New Taiwan Dollar<br>
TZS-Tanzanian Shilling<br>
USD-United States Dollar<br>

</p>
<p class="alignright">
VEF-Venezuelan Bolivar<br>
VUV-Vanuatu Vatu<br>
WST-Samoan Tala<br>
XAF-Central African CFA Franc<br>
XCD-East Caribbean Dollar<br>
XOF-West African CFA Franc<br>
YER-Yemeni Rial<br>
ZAR-South African Rand<br>

</p>
</div>

<a href="currency2.php" align="middle"><--page 2</a>

</center>
</body>
</html>