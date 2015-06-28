<?php

require 'class.Address.inc.php';

echo "<h2>Instanting Address</a>";
$address = new Address;

echo "<h2>Empty</h2>";
echo " <tt><pre>"  . var_export($address, TRUE) . "</pre></tt>";

echo "<h2>Setting properties ... </h2>";
$address->street_adress_1 = "555 Fake Street";
$address->city_name = 'Townsville';
$address->subdivison_name = 'State';
$address->postal_code = '12345';
$address->country_name = 'United States of America';
echo " <tt><pre>"  . var_export($address, TRUE) . "</pre></tt>";

echo "<h2>Display address...</h2>";
echo $address->display();


echo "<h2>Testing magic __get and __set</h2>";
unset($address->postal_code);
$address->postal_code = NULL ;
echo " <tt><pre>"  . var_export($address, TRUE) . "</pre></tt>";
echo $address->display();

echo "<h2>Testing Address __construct with an array</h2>";
$address_2 = new Address(array(
	'street_adress_1' => '123 Phony Ave' ,
	'city_name' => 'Villageland' ,
	'subdivison_name' => 'Region' ,
	'postal_code' => '66890' ,
	'country_name' => 'Canada' ,
	 ));
echo $address_2->display();

echo "<h2>Address __toString</h2>";
echo $address_2;