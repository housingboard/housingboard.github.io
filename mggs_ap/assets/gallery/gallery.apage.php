<?php

$dir = 'pics';
$files = scandir($dir);
//print_r($files);
$cnt=count($files);
for($i=0;$i<$cnt;$i++)
{
	$file=$files[$i];
	if($file!="." && $file!="..")
	{
		echo("<img view=gallery src=\"gallery/pics/$file\" >\n");
	}
}

?>
