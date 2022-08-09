<?php 

$matches = [];
// mecari kata yang akan dicari
// i = incase sensitif, tidak peduli huruf besar dan kecil
// mencari kata ridho, tony, rya
$result = (bool) preg_match_all("/ridho|tony|rya/i", "Ridho Surya", $matches);
var_dump($result, $matches);

// mengubah kata-kata kasar menjadi ***
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");
var_dump($result);

// memecah string, menjadi array
$result = preg_split("/[\s,-]/", "Ridho Surya Adalah-Programmer Ganteng, Dunia Avatar.");
var_dump($result);