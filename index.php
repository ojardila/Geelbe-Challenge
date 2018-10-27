<?php
use GeelbeChallenge\GeelbeChallenge;
require 'src/bootstrap.php';
$geelbe =  new GeelbeChallenge();
$geelbe->setLimitNumber(100);
$geelbe->run();