<!DOCTYPE html>
<html>
<head>
<title>My Perfect GYM</title><meta charest="utf-8">
<style type="text/css">
body { background-image: url(logo.png);
       background-repeat: no-repeat;
background-position: top center; font-family: Comic Sans MS, Comic Sans, cursive;}
	 h2 { margin-top:15em; margin-left:14em; color:purple;}
	 h1 { font-size:100%; color:purple; margin-left:21em;}
     h3 { margin-left:25em; color:black; }
	   </style>
	   <?php

$user="root";
$pass="";
$db="gym";
$total[]=array();
$con= new mysqli('localhost',$user,$pass,$db);

$query1=" SELECT * FROM gyms";
$gym=mysqli_query($con,$query1);


$g[]=array(); // to store name of gym
if(isset($_POST['submit'])){ $name=$_POST["name"];
$selected_gender = $_POST['gender'];  // Storing Selected Value In Variable
$selected_location = $_POST['location'];  
$selected_swimming = $_POST['swimming'];   
$selected_spa = $_POST['spa'];  
$selected_salon = $_POST['salon']; 
if(!empty($_POST['cafe']))
	 $selected_cafe =1;
else	$selected_cafe =0;


if(!empty($_POST['foodmachine']))
$selected_foodmachine =1;
else $selected_foodmachine =0;

if(!empty($_POST['games']))
$selected_games=1;
else $selected_games=0;

}
$c=0; 
while($row=mysqli_fetch_array($gym) ) {
	if( $c<12 ){ $total[$c]=0;
$g[$c]=$row["gym name"];
if($row["pool"]==$selected_swimming)
$total[$c]=$total[$c]+1;
if($row["spa"]==$selected_spa)
	$total[$c]=$total[$c]+1;
if($row["salon"]==$selected_salon)
	$total[$c]=$total[$c]+1;
if($row["region"]==$selected_location)
	$total[$c]=$total[$c]+10;


if($selected_cafe==1){
	if($row["cafe"]==1)
$total[$c]=$total[$c]+1;}
else{ if($row["cafe"]==0)
$total[$c]=$total[$c]+1; }

if($selected_foodmachine==1){
	if($row["foodmachine"]==1)
$total[$c]=$total[$c]+1; }
else{ if($row["foodmachine"]==0)
$total[$c]=$total[$c]+1; }



if($selected_games==1){
	if($row["games"]==1)
$total[$c]=$total[$c]+1; }
else{ if($row["games"]==0)
$total[$c]=$total[$c]+1; }
if($row["gender"]==$selected_gender)
	$total[$c]=$total[$c]+10;
else $total[$c]=0;

$c=$c+1;} }
 


$best=$total[0];
$bi=0;
$altc=3; // Alternitaves counter
for ( $i=0; $i<12; $i++){
	if($best<$total[$i]){ 
		$best=$total[$i];
		$bi=$i;
	}
}

if($best==26){
	echo "<h2>This is the optimal for you " .$name  ."</h2>" ;
	 
echo "<h3>".$g[$bi]."</h3>"; echo "<h3>100%</h3>"; echo "<br>";
echo "<h1>And These are the alternitaves</h1>" ; 
echo "<br>";}
else {
	echo "<h2>Oobs no optimal but These are the alternitaves for you ".$name ."</h2>" ;
	echo "<br>";
echo "<h3>".$g[$bi]."</h3>"; echo "<h3>".intval( $best * 3.8) ."%</h3>"; echo "<br>"; }
while($altc>0){ 
     $best=0;
	 $total[$bi]=0;  // to choose another choice
	 
	for ( $i=0; $i<12; $i++){
	if($best<$total[$i]){
		$best=$total[$i];
		$bi=$i;
	}}
	echo "<h3>".$g[$bi]."</h3>"; echo "<h3>".intval( $best * 3.8) ."%</h3>"; echo "<br>"; $altc=$altc-1;
}

		

?>
	   </head>
<body>


</body>
</html>
