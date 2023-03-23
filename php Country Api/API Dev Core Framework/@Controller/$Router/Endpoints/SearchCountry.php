<?php
require('./@Data/DbMethods/DbExtensionMethods.php');
require('./@Data/MySqlConnection/DbConnection.php');


$Data = new DbExtensionMethods($ConnectionLine);


print($Data->searchCountry($_GET['country']));

