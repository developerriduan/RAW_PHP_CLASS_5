<?php
echo '<h3>'."Expl:1 "."</br>".'</h3>';
$my_name = "<h4>Riduan</h4>";
echo htmlentities($my_name);

echo '<h3>'."Expl:2 "."</br>".'</h3>';
$url = htmlentities("<a href= 'facebook'>Facebook</a>");
echo html_entity_decode($url)."</br>";
echo htmlspecialchars($url);

echo '<h3>'."Expl:3 "."</br>".'</h3>';
$names = "Riduan_Hossen."."</br>";
echo str_repeat($names,12);

echo '<h3>'."Expl:4 "."</br>".'</h3>';
$ph_number = "01867992204";
if(empty($ph_number)){
echo "Please enter your phone number";
}else{
    if(is_numeric($ph_number)){
        echo "Thanks";
    }else{
        echo "number must be int";
    }
}

echo '<h3>'."Expl:5 "."</br>".'</h3>';
$is_Set_value = null;
var_dump(isset($is_Set_value)) ;


echo '<h3>'."Expl:6 "."</br>".'</h3>';
$file_Extrn = "index.php";

$file_array = explode('.',$file_Extrn);

if(end($file_array) == 'html'){
echo "great";
}else{
    echo "select different Extrn";
}
echo '<h3>'."Expl:7 "."</br>".'</h3>';
$name = "Riduan_Hossen.Dept.Computer";
$namePieces = explode('.',$name);
if (in_array('Dept',$namePieces)){
        echo "great";
}else{
    echo "wrong";
}

echo '<h3>'."Expl:8 "."</br>".'</h3>';
$cars = [
    "Volvo","BMW","Toyota"
];
echo count($cars);

echo '<h3>'."Expl:9 "."</br>".'</h3>';

$array_count = [
    'name' => 'Riduan',
    'age' => '22',
    'number' => '01867992204',
];

$array_count1 = [
    'name' => 'Hossen',
    'age' => '22',
    'number' => '01857992204',
];

print_r(array_diff($array_count,$array_count1));

echo '<h3>'."Expl:10 "."</br>".'</h3>';

$frnd = [
    'Sakib',
    'sagar',
    'shakib',
    'habib'
];

array_push($frnd,['munna','Riaj']);

echo "<pre>";
print_r($frnd);
echo "</pre>";

echo '<h3>'."Expl:11 "."</br>".'</h3>';
$frnd = [
    'Sakib',
    'sagar',
    'shakib',
    'habib'
];

array_pop($frnd);

echo "<pre>";
print_r($frnd);
echo "</pre>";

echo '<h3>'."Expl:12 "."</br>".'</h3>';

$frnd = [
    'Sakib',
    'sagar',
    'shakib',
    'habib'
];

array_shift($frnd);

echo "<pre>";
print_r($frnd);
echo "</pre>";

echo '<h3>'."Expl:13 "."</br>".'</h3>';

$frnd = [
    'Sakib',
    'sagar',
    'shakib',
    'habib'
];

array_unshift($frnd,'Sabbir','raful');

echo "<pre>";
print_r($frnd);
echo "</pre>";