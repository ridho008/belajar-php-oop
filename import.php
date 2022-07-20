<?php
require_once 'data/conflict-namespace.php';
require_once 'data/helper-namespace.php';

// alias
// use Data\One\Conflict as Conflict1;
// use Data\Two\Conflict as Conflict2;
// use function Helper\helpMe;
// use const Helper\APPLICATION;

// $conflict1 = new Conflict1();
// $conflict2 = new Data\Two\Conflict();

// Helper\helpMe("Tony");
// helpMe();
// echo APPLICATION;

// ---------- Group use Declaration --------
// memanggil beberapa class di dalam file conflict-namespace
use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpMe};

$conflict = new Conflict1();
$dummny = new Dummy();
$sample = new Sample();