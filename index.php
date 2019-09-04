<?php
//ピカチュウの設計図が書かれたファイルの読み込み
require_once('Pikachu.php');

//ピカチュウの設計図を元に、実体を作成
//インスタンス化
$pikachu= new Pikachu();

//クラスを元に作ったピカチュウの操作
//プロパディとかメソッドの使い方
//ピカチュウ１にHP100を設定する
$pikachu1->hp=100;

//ピカチュウ１にHP100を設定する
$pikachu->mp=50;

//画面にピカチュウのHPとMPを表示
echo 'ピカチュウの HPは';
echo $pikachu1->hp;
echo '<br>';

echo 'ピカチュウのMPは';
echo $pikachu1->mp;
echo '<br>';

//メソッド(振る舞い)の実行
//サンダーボルトの実行
$pikachu1->thunderVolt();

//アイアンテールの実行
$pikachu1->ironTail();

$pikachu2=new Pikachu();
$pikachu2->hp=500;
$pikachu2->mp=1500;

echo 'ピカチュウ1のHPは';
echo $pikachu1->hp;

echo '<br>';

echo 'ピカチュウ2のHPは';
echo $pikachu2->hp;

//ピカチュウ３の作成
$pikachu3=new Pikachgu();
echo'ピカチュウ３のHPは';
echo$pikacyu3->hp;

