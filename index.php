<!DOCTYPE html>
<html>
<head>
	<title>...</title>
	<meta charset="utf-8">
	<link href="stylesheet.css" type="text/css" rel="stylesheet" media="(min-width: 640px)">
	
</head>
<body>
    
    <section class="section" id="header">
        
        <br><br><h1>Die Idee erklärt</h1>
        <p>
			Diese Sektion wird Einstellungsmöglichkeiten bieten<br>
			Die untere Sektion zeigt Block´s an <br>
			Ein Block kann von einen Unser erstellt werden<br>
			Der User kann den Inhalt des Blocks selber bestimmen<br>
			<br>
			<br>
			Keine Anmeldung. <br>
		</p>

		<form action="sys-createBlock.php">
			<button id="btn-new" type="submit">NEW</button>
		</form>

	</section>

	<section class="section" id="content">
		
		<div id="unimatrix">
			<?php include 'sys-displayBlock.php';?>			
		</div>
		
	</section>


	
<footer id="footer">

</footer>

</html>

