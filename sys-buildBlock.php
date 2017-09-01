<?php
	$iTopic = $_POST['topic'];
    $iblockColor =$_POST['blockColor'];


	$id = "0";
	$BlockName = "block~".$id;
	$target = "unimatrix/".$BlockName;

	//create block folder
	while(!file_exists($target) == FALSE) {
		
		$BlockName = "block~".$id;
		$target = "unimatrix/".$BlockName;
    	
    	if(mkdir($target,0700)){
			goto copinxsty; //copy block-index.php & block-stylesheet.css -->
		}else{
			$id = $id + 1;
		}
	}

	//copy block-index.php & block-stylesheet.css <--
    copinxsty:
    copy("sys-resources/block-index.php", $target."/block-index.php");
    copy("sys-resources/block-stylesheet.css", $target."/block-stylesheet.css");


    //create config folder <--
	creConf:
	$target = $target."/config";
	mkdir($target, 0700);



	//create config txt´s<--
    if($fh = fopen($target."/id.txt", "w",'w')){ //<-- NAME
	    fwrite($fh, $id,1024); //<-- VALUE
	    fclose($fh);
	}
	if($fh = fopen($target."/dip_topic.txt", "w",'w')){ //<-- NAME
	    fwrite($fh, $iTopic,1024); //<-- VALUE
	    fclose($fh);
	}
    if($fh = fopen($target."/style_blockColor.txt", "w",'w')){ //<-- NAME
	    fwrite($fh, $iblockColor,1024); //<-- VALUE
	    fclose($fh);
	}
	
	/*
	$newFile = fopen($target."/config.txt", "w") or header("Location: index.php?error=buildBlock");
	$txtIndex = "[topic=".$iTopic."]
	[color=blue]
	[sigrun=blöd]";
	fwrite($newFile, $txtIndex);
	fclose($newFile);
	*/


		
	header("Location: index.php");
?>