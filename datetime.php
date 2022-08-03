<?php 
$dateTime = new DateTime();
// mengubah tanggal
$dateTime->setDate(1990, 1, 20);
// mengubah waktu
$dateTime->setTime(10, 10, 10, 0);

// DateInterval, mengubah hanya tanggal/waktu yang diinginkan
// tambah 1 tahun
$dateTime->add(new DateInterval("P1Y"));

// mengurangi 1 bulan
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);
var_dump($dateTime);

// mengubah timezone
$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

// format datetime
$string = $now->format("Y-m-d H:i:s");
echo $string;

// parse DateTime
// mengubah string menjadi datetime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10");
var_dump($date);