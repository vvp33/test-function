<?php

require __DIR__ . '/function.php';
$input = "аоарао Привет иван crhrivhrv rhvurvhuirfhv \n crhrivhrv  аоарао   crhrivhrv-crhrivhrv привет как дела
работаешь Иван привет huhuh. rvtvvtgtg аоарао
";
$output = getFivePopularWords($input);

var_dump($output);
