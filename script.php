<?php
$odp1=$_GET["q1"];
$odp2=$_GET["q2"];
$odp3=$_GET["q3"];
$odp4=$_GET["q4"];
$odp5=$_GET["q5"];
$odp6=$_GET["q6"];
$odp7=$_GET["q7"];
$odp8=$_GET["q8"];
$odp9=$_GET["q9"];
$odp10=$_GET["q10"];
$odp11=$_GET["q11"];
$odp12=$_GET["q12"];

$suma=0;

if($odp1==1){
    $suma++;
}

if($odp2==1){
    $suma++;
}

if($odp3==1){
    $suma++;
}

if($odp4==1){
    $suma++;
}

if($odp5==1){
    $suma++;
}

if($odp6==1){
    $suma++;
}

if($odp7==1){
    $suma++;
}

if($odp8==1){
    $suma++;
}

if($odp9==1){
    $suma++;
}

if($odp10==1){
    $suma++;
}

if($odp11==1){
    $suma++;
}

if($odp12==1){
    $suma++;
}

echo"<h1>Udało Ci się zdobyć ".$suma." punktów! Gratuluję!</h1>";
echo '<video width="500px" height="250px" autoplay><source src="assets/confetti.mp4" play></video>';
echo '<p class="img a">Źródło: <a href="https://pixabay.com/videos/confetti-celebration-carnival-fun-121983/">https://pixabay.com/videos/confetti-celebration-carnival-fun-121983/</a></p>';


if($odp1==1){
    echo "<p>Pytanie 1-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 1-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}

if($odp2==1){
    echo "<p>Pytanie 2-poprawna odpowiedź(a)</p>";
}
else{
    echo "<p>Pytanie 2-niepoprawna odpowiedź, poprawną odpowiedzyła była odpowiedź a</p>";
}

if($odp3==1){
    echo "<p>Pytanie 3-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 3-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}

if($odp4==1){
    echo "<p>Pytanie 4-poprawna odpowiedź(d)</p>";
}
else{
    echo "<p>Pytanie 4-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź d</p>";
}

if($odp5==1){
    echo "<p>Pytanie 5-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 5-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}

if($odp6==1){
    echo "<p>Pytanie 6-poprawna odpowiedź(b)</p>";
}
else{
    echo "<p>Pytanie 6-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź b</p>";
}

if($odp7==1){
    echo "<p>Pytanie 7-poprawna odpowiedź(b)</p>";
}
else{
    echo "<p>Pytanie 7-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź b</p>";
}

if($odp8==1){
    echo "<p>Pytanie 8-poprawna odpowiedź(a)</p>";
}
else{
    echo "<p>Pytanie 8-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź a</p>";
}

if($odp9==1){
    echo "<p>Pytanie 9-poprawna odpowiedź(d)</p>";
}
else{
    echo "<p>Pytanie 9-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź d</p>";
}

if($odp10==1){
    echo "<p>Pytanie 10-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 10-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}

if($odp11==1){
    echo "<p>Pytanie 11-poprawna odpowiedź(a)</p>";
}
else{
    echo "<p>Pytanie 11-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź a</p>";
}

if($odp12==1){
    echo "<p>Pytanie 12-poprawna odpowiedź(c)</p>";
}
else{
    echo "<p>Pytanie 12-niepoprawna odpowiedź, poprawną odpowiedzią była odpowiedź c</p>";
}
?>
