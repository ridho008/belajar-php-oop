<?php

require_once 'data/conflict-namespace.php';
require_once 'data/helper-namespace.php';

// ambil class conflict di folder data
$one = new Data\One\Conflict();
$two = new Data\Two\Conflict();

// folder data > helper-namespace.php
echo Helper\APPLICATION;

Helper\helpMe();