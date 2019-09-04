<?php
require_once('jun.php');

$jun= new Jun();

$jun->hp=1000;

$jun->mp=500;

$jun1= new Jun();
echo 'junの HPは';
echo $jun1->hp;
echo '<br>';

echo 'junのMPは';
echo $jun1->mp;
echo '<br>';

//メソッド(振る舞い)の実行
//後ろ蹴りの実行
$jun1->usirogeri();

//ハイキックの実行
$jun1->highkick();

$jun2=new Jun();
$jun2->hp=2500;
$jun2->mp=1500;

echo 'jun1のHPは';
echo $jun1->hp;

echo '<br>';

echo 'jun2のHPは';
echo $jun2->hp;

//jun３の作成
$jun3=new Jun();
echo'jun３のHPは';
echo$jun3->hp;

