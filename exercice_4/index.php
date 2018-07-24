<?php

require_once __DIR__.'/Cat.php';


$cat1 = new Cat('Oscar',5,'black','male','normal');
$cat2 = new Cat('Missy',2,'grey','female','normal');
$cat3 = new Cat('Tony',2,'orange','male','tiger');

echo '<pre>';
print_r($cat1->getInfo());
echo '</pre>';

echo '<pre>';
print_r($cat2->getInfo());
echo '</pre>';

echo '<pre>';
print_r($cat3->getInfo());
echo '</pre>';