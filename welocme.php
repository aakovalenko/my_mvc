
<?php
require('inc/rain.tpl.class.php');
;


$tpl = new RainTPL();



$info = array(
    'name' => 'ahmed',
    'age' => 106,
    'job' => 'eng'
);

$users = array(
    array('name' => 'ahmet', 'age'=>24),
    array('name' => 'musi', 'age'=>18),
    array('name' => 'kali', 'age'=>26),
    array('name' => 'yak', 'age'=>14),
);
$loki = array(
    'g' => 3, 'v' => 4
);

$out = array(
    'petrol' => 12,
    'price' => 3,4,
    'liters' => 20
);

$footer = array(
    'home','about', 'contact','ajax'
);


$tpl->assign('title','***RAINTPL***');

$tpl->assign('info', $info); //array
$tpl->assign($info); //array
$tpl->assign('users', $users);
$tpl->assign('loki',$loki);
$tpl->assign('out', $out);
$tpl->assign('footer',$footer);

//templates/welcome.html
$tpl->draw('welcome');
