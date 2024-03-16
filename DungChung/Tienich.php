<?php

function UploadFile($inputName, $Folder)
{
	if($_FILES[$inputName]["error"]!=0)
	 	return "";
	$filename = "";
	$tmp_name = "";
 	$filename=$_FILES[$inputName]["name"];
	$tmp_name = $_FILES[$inputName]["tmp_name"];
	
	$arr = explode(".",$filename);
	$file_ext = strtolower(end($arr));
	$list_anh = array("jpg","png","gif","jpeg");
	if(in_array($file_ext, $list_anh)==false)
		return "";
	move_uploaded_file($tmp_name, "$Folder/$filename");
	return $filename; 
}

function ShowOptions($rows, $valueColumn, $labelColumn, $selectedVal)
{
	foreach($rows as $row)
	{
		$value = $row[$valueColumn];
		$label = $row[$labelColumn];
		$selected = "";
		if($row[$valueColumn]== $selectedVal)
			$selected = "selected";
		echo "<option value='" . $value. "' " . $selected . ">" . $label ."</option>\n";
	}
}

?>