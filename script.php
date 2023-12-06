<?php
$odp1=$_POST["q1"];
$odp2=$_POST["q2"];
$odp3=$_POST["q3"];
$odp4=$_POST["q4"];
$odp5=$_POST["q5"];
$odp6=$_POST["q6"];
$odp7=$_POST["q7"];
$odp8=$_POST["q8"];
$odp9=$_POST["q9"];
$odp10=$_POST["q10"];
$odp11=$_POST["q11"];
$odp12=$_POST["q12"];

$suma=0;

if($odp1==1){
    $suma++;
    echo "<p>Pytanie 1-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 1-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}

if($odp2==1){
    $suma++;
    echo "<p>Pytanie 2-poprawna odpowiedź(a)</p>";
}
else{
    echo "<p>Pytanie 2-niepoprawna odpowiedź, poprawną odpowiedzyła była odpowiedź a</p>";
}

if($odp3==1){
    $suma++;
    echo "<p>Pytanie 3-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 3-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}

if($odp4==1){
    $suma++;
    echo "<p>Pytanie 4-poprawna odpowiedź(d)</p>";
}
else{
    echo "<p>Pytanie 4-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź d</p>";
}

if($odp5==1){
    $suma++;
    echo "<p>Pytanie 5-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 5-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}

if($odp6==1){
    $suma++;
    echo "<p>Pytanie 6-poprawna odpowiedź</p>";
}
else{
    echo "<p>Pytanie 6-niepoprawna odpowiedź</p>";
}

if($odp7==1){
    $suma++;
    echo "<p>Pytanie 7-poprawna odpowiedź</p>";
}
else{
    echo "<p>Pytanie 7-niepoprawna odpowiedź</p>";
}

if($odp8==1){
    $suma++;
    echo "<p>Pytanie 8-poprawna odpowiedź</p>";
}
else{
    echo "<p>Pytanie 8-niepoprawna odpowiedź</p>";
}

if($odp9==1){
    $suma++;
    echo "<p>Pytanie 9-poprawna odpowiedź</p>";
}
else{
    echo "<p>Pytanie 9-niepoprawna odpowiedź</p>";
}

if($odp10==1){
    $suma++;
    echo "<p>Pytanie 10-poprawna odpowiedź</p>";
}
else{
    echo "<p>Pytanie 10-niepoprawna odpowiedź</p>";
}

if($odp11==1){
    $suma++;
    echo "<p>Pytanie 11-poprawna odpowiedź</p>";
}
else{
    echo "<p>Pytanie 11-niepoprawna odpowiedź</p>";
}

if($odp12==1){
    $suma++;
    echo "<p>Pytanie 12-poprawna odpowiedź</p>";
}
else{
    echo "<p>Pytanie 12-niepoprawna odpowiedź</p>";
}

?>