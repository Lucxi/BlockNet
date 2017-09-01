<?php
    
/*
	$blockName = scandir("unimatrix/");
	$arrlength = count($blockName);
	
	for($x = 0; $x < $arrlength; $x++) {
		if($blockName[$x] != '.' && $blockName[$x] != '..'){
            
            
			
            $target = "unimatrix/" .$blockName[$x]. "/config/style-blockColor.txt";
			echo $target."<br />";
            
            
            $style_blockColor = file_get_contents("unimatrix/" .$blockName[$x]. "/config/style-blockColor.txt");
            
            if($style_blockColor){
                goto test
            }
            

		}
	}
	*/

	$dir = "unimatrix/";
	// Öffnen eines bekannten Verzeichnisses und danach seinen Inhalt einlesen
	if (is_dir($dir)) { // Prüft, ob der angegebene Dateiname ein Verzeichnis ist
	    if ($dh = opendir($dir)) { // Öffnen eines Verzeichnis-Handles
	        
			while (($file = readdir($dh)) !== false) {
	        	if ($file != '.' && $file != '..') {
	        		
                    // Set Block Link
                    $linkToBlock = "/BlockNet/unimatrix/".$file."/block-index.php";
                    // Set order number
                    $setOrder = file_get_contents("unimatrix/".$file."/config/id.txt");
                    // Display Topic
					$dis_topic = file_get_contents("unimatrix/".$file."/config/dip_topic.txt");
					// Set BlockColor
					$style_blockColor = file_get_contents("unimatrix/".$file."/config/style_blockColor.txt");
                    
                    
                    // ===== BUILDS DIV DIV =====
                    echo    "<a href='$linkToBlock' style='order: $setOrder;'>
                                <div id='$file' class='block' style='background-color: $style_blockColor;'>
                                    <h2>".$dis_topic."</h2>
                                </div>
                            </a>";
					

					
	        	}
	        }
	        closedir($dh);
	    }
	}




	/*
	$id = file_get_contents();

    echo '<style type="text/css">
        #id-elementb {
            display: none;
        }
        </style>';


	header("Location: index.php");
	*/
?>