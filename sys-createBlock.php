<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="sys-createBlock-stylesheet.css" type="text/css" rel="stylesheet" media="(min-width: 640px)">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
	<form id="form" action="sys-buildBlock.php" method="POST">
		
        <!-- ===== BLOCK DESIGN ===== -->
		<section id="blockDesign">
            
			<div class="block">
				<textarea name="topic" placeholder="Topic.." id="blockDesign_block_textarea"></textarea>
			</div>
		
        </section>
        
        
        <!-- ===== CONTENT ===== -->
		<section id="content" >
            
            
            <div id="triangle"></div>
            <input name="blockColor" type="color" value="#ffffff" id="content_blockColor">
            <button id="btnBlock" type="submit">Block!</button>
            
            
		</section>
	</form>
</body>
</html>


