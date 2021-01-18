<?php
	//conectar con servidor
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$basededatos="prueba";
	
	$conexion=mysqli_connect($servidor,$usuario,"") or die ("error con el servidor");
	$bd=mysqli_select_db($conexion,$basededatos) or die ("erro conexion base de datos");
	//registro
	//declaracion
	$name=null;
	$birthday=null;
	$email=null;
	$clase=null;
	$pass=null;
	//poner
	if( isset($_POST['name'])) {
		
	$name=$_POST['name'];
	}
	if( isset($_POST['birthday'])) {
		
	$birthday=$_POST['birthday'];
	}
	if( isset($_POST['email'])) {
		
	$email=$_POST['email'];
	}
	if( isset($_POST['clase'])) {
		
	$clase=$_POST['clase'];
	}
	if( isset($_POST['pass'])) {
		
	$pass=$_POST['pass'];
	}
	
	
	//preguntas agua
	//declaracion
	$pa1=null;
	$pa2=null;
	$pa3=null;
	$pa4=null;
	$pa5=null;
	$pa6=null;
	$pa7=null;
	$pa8=null;
	$pa9=null;
	$pa10=null;
	$pa11=null;
	$pa12=null;
	$pa13=null;
	$pa14=null;
	$pa15=null;
	$pa16=null;
	$pa17=null;
	$pa18=null;
	$pa19=null;
	$pa20=null;
	//poner
	$cont=0;
	if( isset($_POST['pa1'])) {
		
	$pa1=$_POST['pa1'];
	}
	if ($pa1=="si"){
		$cont += 1;
	}
	if( isset($_POST['pa2'])) {
		
	$pa2=$_POST['pa2'];
	}
	if( isset($_POST['pa3'])) {
		
	$pa3=$_POST['pa3'];
	}
	if( isset($_POST['pa4'])) {
		
	$pa4=$_POST['pa4'];
	}
	if( isset($_POST['pa5'])) {
		
	$pa5=$_POST['pa5'];
	}
	if ($pa6=="si"){
		$cont += 1;
	}
	if( isset($_POST['pa6'])) {
		
	$pa6=$_POST['pa6'];
	}

	if( isset($_POST['pa7'])) {
		
	$pa7=$_POST['pa7'];
	}
	
	if ($pa8=="si"){
		$cont += 1;
	}
	if( isset($_POST['pa8'])) {
		
	$pa8=$_POST['pa8'];
	}
	if ($pa7=="si"){
		$cont += 1;
	}
	
	if( isset($_POST['pa9'])) {
		
	$pa9=$_POST['pa9'];
	}
	if ($pa9=="si"){
		$cont += 1;
	}
	if( isset($_POST['pa10'])) {
		
	$pa10=$_POST['pa10'];
	}
	
	if( isset($_POST['pa11'])) {
		
	$pa11=$_POST['pa11'];
	}
	if ($pa11=="no"){
		$cont += 1;
	}
	
	if( isset($_POST['pa12'])) {
		
	$pa12=$_POST['pa12'];
	}
	if ($pa12=="si"){
		$cont += 1;
	}
	
	if( isset($_POST['pa13'])) {
		
	$pa13=$_POST['pa13'];
	}
	if ($pa13=="si"){
		$cont += 1;
	}
	
	if( isset($_POST['pa14'])) {
		
	$pa14=$_POST['pa14'];
	}
	if ($pa14=="si"){
		$cont += 1;
	}
	
	if( isset($_POST['pa15'])) {
		
	$pa15=$_POST['pa15'];
	}
	if ($pa15=="si"){
		$cont += 1;
	}
	
	if( isset($_POST['pa16'])) {
		
	$pa16=$_POST['pa16'];
	}
	if ($pa16=="si"){
		$cont += 2;
	}
	if( isset($_POST['pa17'])) {
		
	$pa17=$_POST['pa17'];
	}
	if( isset($_POST['pa18'])) {
		
	$pa18=$_POST['pa18'];
	}
	if( isset($_POST['pa19'])) {
		
	$pa19=$_POST['pa19'];
	}
	if( isset($_POST['pa20'])) {
		
	$pa20=$_POST['pa20'];
	}
	
	
	//preguntas energia
	//declaracion
	$pe1=null;
	$pe2=null;
	$pe3=null;
	$pe4=null;
	$pe5=null;
	$pe6=null;
	$pe7=null;
	$pe8=null;
	$pe9=null;
	$pe10=null;
	$pe11=null;
	$pe12=null;
	$pe13=null;
	$pe14=null;
	$pe15=null;
	$pe16=null;
	$pe17=null;
	$pe18=null;
	$pe19=null;
	$pe20=null;
	//poner
	if( isset($_POST['pe1'])) {
		
	$pe1=$_POST['pe1'];
	}
	if( isset($_POST['pe2'])) {
		
	$pe2=$_POST['pe2'];
	}
	if( isset($_POST['pe3'])) {
		
	$pe3=$_POST['pe3'];
	}
	if( isset($_POST['pe4'])) {
		
	$pe4=$_POST['pe4'];
	}
	if( isset($_POST['pe5'])) {
		
	$pe5=$_POST['pe5'];
	}
	if( isset($_POST['pe6'])) {
		
	$pe6=$_POST['pe6'];
	}
	if( isset($_POST['pe7'])) {
		
	$pe7=$_POST['pe7'];
	}
	if( isset($_POST['pe8'])) {
		
	$pe8=$_POST['pe8'];
	}
	if( isset($_POST['pe9'])) {
		
	$pe9=$_POST['pe9'];
	}
	if( isset($_POST['pe10'])) {
		
	$pe10=$_POST['pe10'];
	}
	if( isset($_POST['pe11'])) {
		
	$pe11=$_POST['pe11'];
	}
	if( isset($_POST['pe12'])) {
		
	$pe12=$_POST['pe12'];
	}
	if ($pe12=="si"){
		$cont += 2;
	}
	if( isset($_POST['pe13'])) {
		
	$pe13=$_POST['pe13'];
	}
	if ($pe13=="si"){
		$cont += 1;
	}
	if( isset($_POST['pe14'])) {
		
	$pe14=$_POST['pe14'];
	}
	if ($pe14=="si"){
		$cont += 1;
	}
	if( isset($_POST['pe15'])) {
		
	$pe15=$_POST['pe15'];
	}
	if ($pe15=="si"){
		$cont += 2;
	}
	if( isset($_POST['pe16'])) {
		
	$pe16=$_POST['pe16'];
	}
	if ($pe16=="si"){
		$cont += 1;
	}
	if( isset($_POST['pe17'])) {
		
	$pe17=$_POST['pe17'];
	}
	if ($pe17=="si"){
		$cont += 1;
	}
	if( isset($_POST['pe18'])) {
		
	$pe18=$_POST['pe18'];
	}
	if( isset($_POST['pe19'])) {
		
	$pe19=$_POST['pe19'];
	}
	if ($pe19=="si"){
		$cont += 1;
	}
	if( isset($_POST['pe20'])) {
		
	$pe20=$_POST['pe20'];
	}
	if ($pe20=="si"){
		$cont += 1;
	}
	
	
	//preguntas entorno
	//declaracion
	$pn1=null;
	$pn2=null;
	$pn3=null;
	$pn4=null;
	$pn5=null;
	$pn6=null;
	$pn7=null;
	$pn8=null;
	$pn9=null;
	$pn10=null;
	$pn11=null;
	$pn12=null;
	$pn13=null;
	$pn14=null;
	$pn15=null;
	$pn16=null;
	$pn17=null;
	$pn18=null;
	$pn19=null;
	$pn20=null;
	//poner
	if( isset($_POST['pn1'])) {
		
	$pn1=$_POST['pn1'];
	}
	if( isset($_POST['pn2'])) {
		
	$pn2=$_POST['pn2'];
	}
	if( isset($_POST['pn3'])) {
		
	$pn3=$_POST['pn3'];
	}
	if( isset($_POST['pn4'])) {
		
	$pn4=$_POST['pn4'];
	}
	if( isset($_POST['pn5'])) {
		
	$pn5=$_POST['pn5'];
	}
	if ($pn5=="si"){
		$cont += 1;
	}
	if( isset($_POST['pn6'])) {
		
	$pn6=$_POST['pn6'];
	}
	if( isset($_POST['pn7'])) {
		
	$pn7=$_POST['pn7'];
	}
	if( isset($_POST['pn8'])) {
		
	$pn8=$_POST['pn8'];
	}
	if( isset($_POST['pn9'])) {
		
	$pn9=$_POST['pn9'];
	}
	if ($pn9=="si"){
		$cont += 2;
	}
	if( isset($_POST['pn10'])) {
		
	$pn10=$_POST['pn10'];
	}
	if ($pn10=="si"){
		$cont += 1;
	}
	if( isset($_POST['pn11'])) {
		
	$pn11=$_POST['pn11'];
	}
	if ($pn11=="si"){
		$cont += 1;
	}
	if( isset($_POST['pn12'])) {
		
	$pn12=$_POST['pn12'];
	}
	if( isset($_POST['pn13'])) {
		
	$pn13=$_POST['pn13'];
	}
	if ($pn13=="si"){
		$cont += 2;
	}
	if( isset($_POST['pn14'])) {
		
	$pn14=$_POST['pn14'];
	}
	if( isset($_POST['pn15'])) {
		
	$pn15=$_POST['pn15'];
	}
	if( isset($_POST['pn16'])) {
		
	$pn16=$_POST['pn16'];
	}
	if ($pn16=="si"){
		$cont += 1;
	}
	if( isset($_POST['pn17'])) {
		
	$pn17=$_POST['pn17'];
	}
	if ($pn17=="si"){
		$cont += 1;
	}
	if( isset($_POST['pn18'])) {
		
	$pn18=$_POST['pn18'];
	}
	if( isset($_POST['pn19'])) {
		
	$pn19=$_POST['pn19'];
	}
	if( isset($_POST['pn20'])) {
		
	$pn20=$_POST['pn20'];
	}
	if ($pn20=="si"){
		$cont += 1;
	}
	
	//preguntas materiales
	//declaracion
	$pm1=null;
	$pm2=null;
	$pm3=null;
	$pm4=null;
	$pm5=null;
	$pm6=null;
	$pm7=null;
	$pm8=null;
	$pm9=null;
	$pm10=null;
	$pm11=null;
	$pm12=null;
	$pm13=null;
	$pm14=null;
	$pm15=null;
	$pm16=null;
	$pm17=null;
	$pm18=null;
	$pm19=null;
	$pm20=null;
	//poner
	if( isset($_POST['pm1'])) {
		
	$pm1=$_POST['pm1'];
	}
	if( isset($_POST['pm2'])) {
		
	$pm2=$_POST['pm2'];
	}
	if( isset($_POST['pm3'])) {
		
	$pm3=$_POST['pm3'];
	}
	if( isset($_POST['pm4'])) {
		
	$pm4=$_POST['pm4'];
	}
	if ($pm4=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm5'])) {
		
	$pm5=$_POST['pm5'];
	}
	if ($pm5=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm6'])) {
		
	$pm6=$_POST['pm6'];
	}
	if ($pm6=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm7'])) {
		
	$pm7=$_POST['pm7'];
	}
	if ($pm7=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm8'])) {
		
	$pm8=$_POST['pm8'];
	}
	if ($pm8=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm9'])) {
		
	$pm9=$_POST['pm9'];
	}
	if ($pm9=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm10'])) {
		
	$pm10=$_POST['pm10'];
	}
	if( isset($_POST['pm11'])) {
		
	$pm11=$_POST['pm11'];
	}
	if( isset($_POST['pm12'])) {
		
	$pm12=$_POST['pm12'];
	}
	if ($pm12=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm13'])) {
		
	$pm13=$_POST['pm13'];
	}
	if ($pm13=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm14'])) {
		
	$pm14=$_POST['pm14'];
	}
	if ($pm14=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm15'])) {
		
	$pm15=$_POST['pm15'];
	}
	if( isset($_POST['pm16'])) {
		
	$pm16=$_POST['pm16'];
	}
	if( isset($_POST['pm17'])) {
		
	$pm17=$_POST['pm17'];
	}
	if( isset($_POST['pm18'])) {
		
	$pm18=$_POST['pm18'];
	}
	if( isset($_POST['pm19'])) {
		
	$pm19=$_POST['pm19'];
	}
	if ($pm19=="si"){
		$cont += 1;
	}
	if( isset($_POST['pm20'])) {
		
	$pm20=$_POST['pm20'];
	}
	
	echo "Llevas ".$cont." puntos";
	
	
	
	

	
	
	
	
	
	
	$sql="INSERT INTO clase VALUES('','$name','$birthday','$email','$clase','$pass')";
	$ejecutar=mysqli_query($conexion,$sql);
	
	//pregunta agua
	$sql1="INSERT INTO pa VALUES('$pa1','$pa2','$pa3','$pa4','$pa5','$pa6','$pa7','$pa8','$pa9','$pa10','$pa11','$pa12','$pa13','$pa14','$pa15','$pa16','$pa17','$pa18','$pa19','$pa20')";
	$ejecutar=mysqli_query($conexion,$sql1);
	
	//pregunta energia
	$sql2="INSERT INTO pe VALUES('$pe1','$pe2','$pe3','$pe4','$pe5','$pe6','$pe7','$pe8','$pe9','$pe10','$pe11','$pe12','$pe13','$pe14','$pe15','$pe16','$pe17','$pe18','$pe19','$pe20')";
	$ejecutar=mysqli_query($conexion,$sql2);
	
	//pregunta entorno
	$sql3="INSERT INTO pn VALUES('$pn1','$pn2','$pn3','$pn4','$pn5','$pn6','$pn7','$pn8','$pn9','$pn10','$pn11','$pn12','$pn13','$pn14','$pn15','$pn16','$pn17','$pn18','$pn19','$pn20')";
	$ejecutar=mysqli_query($conexion,$sql3);
	
	//pregunta materiales
	$sql4="INSERT INTO pm VALUES('$pm1','$pm2','$pm3','$pm4','$pm5','$pm6','$pm7','$pm8','$pm9','$pm10','$pm11','$pm12','$pm13','$pm14','$pm15','$pm16','$pm17','$pm18','$pm19','$pm20')";
	$ejecutar=mysqli_query($conexion,$sql4);
	
	
	
		
		
	
	
?>
<!DOCTYPE>
	<html>
	<head></head>
	<body>
	<link rel="stylesheet" type="text/css" href="menucss.css"> 
	<a href="bloques.html">
  <div id="btn1" class="button">
    <h1>Ecoworks</h1>
  </div>
</a>


<a href="puntuacion.html">
  <div id="btn2" class="button">
    <h1>Puntuaciones</h1>
	
  </div>
</a>

<a href="team.html">
  <div id="btn3" class="button">
    <h1>Team</h1>
  </div>
</a>
</body>
</html>
