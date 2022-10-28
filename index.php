<?php

echo "<h3>Global Scope</h3>";
$count=100;

function getNumber()
{
    global $count;
    echo $count.'</br>';

}
getNumber();
echo "<h3>Local Scope</h3>";
function getNum(){
    $num=1000;
    return $num;

}
echo getNum().'</br>';
echo "<h3>Static Scope</h3>";
function savingCount($tk){
    static $saving=10000;
    $saving += $tk;
    echo "Your total saving of this month is $saving </br>";


}
savingCount(1000);
savingCount(1000);

echo "<h3>Associatiave Array</h3>";
$bike=[
    'name'=>'FZ5',
    'color'=>'black',
    'condition'=>'good',
    'model'=>'g21'
];
$bike['color']='white';
$bike['condition']='pretty good';
echo '<pre>';
print_r ($bike);
echo'<pre>';

echo "<h3>Indexing Array</h3>";
$family=[
    'father',
    'mother',
    'sister',
    'brother'
];
echo'<pre>';
print_r($family);
echo'<pre>';
echo "<h3>Multi Dimonsional Array</h3>";
$bike=[
    'name'=>'FZ5',
    'condition'=>'good',
    'model'=>'g21',
    'color'=>[
        'black',
        'white'
    ]
];
echo '<pre>';
print_r ($bike);
echo'<pre>';
echo "<h3>String Function</h3>";
$name='dale jordan';
echo "How are you ",strtoupper($name).'</br>';
echo"How are you ",strtolower($name).'</br>';
echo"How are you ",ucwords($name).'</br>';
echo"How are you ",strrev($name).'</br>';
echo"How are you ",str_shuffle($name).'</br>';

$fb='www.facebook.com';
if(strpos($fb,'.facebook')){
    echo"It is there";
}else{
    echo"Is is not there";
}
