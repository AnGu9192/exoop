<?php
//include "Phone.php";

include "Animals.php";
include "HTML.php";

$html = new HTML();
$html->openTag("h3",['class'=>'title','id'=>'title']);
//echo "class= " . "'title'";
//echo "&nbsp";
//echo "id= " . "'title'";
//echo "&nbsp";
echo "Text From OOP HTML";
$html->closeTag("h3");


//homework
$dog = new Animals();
$dog->set_name('rex');
$dog->set_color('black');
echo "Name: " . $dog->get_name();
echo "<br>";
echo "Color: " .  $dog->get_color();