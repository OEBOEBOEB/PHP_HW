<?php

	$num=$_GET["num"];
		
	echo '<form action="HW6.php"  enctype="multipart/form-data"  method="post">';

		for($i=0;$i<$num;$i++){
			echo '<input type="file" name="file[]" ><br/><br/>';
		}

	echo '<input type="submit" name="file" value="上傳">';
	echo '</form>';

	$num=$_GET["num"];

		if(isset($_FILES["upload"])){

			for($i=0;$i<$num;$i++){

				echo $_FILES["upload"]["name"][$i]."<br/>";    
				echo $_FILES["upload"]["tmp_name"][$i]."<br/>";
				echo $_FILES["upload"]["size"][$i]."<br/>";
				echo $_FILES["upload"]["type"][$i]."<br/>";
				
				$name=$_FILES["upload"]["name"][$i];
				$tmp=$_FILES["upload"]["tmp_name"][$i];

				if(!empty($name)){
					copy($tmp,$name);
					echo "檔案上傳成功";
					unlink($tmp);
				}else{
					echo "檔案上傳失敗";
				}
			}
		}

?>