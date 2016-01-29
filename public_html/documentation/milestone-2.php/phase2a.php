<?php
$desktopWireframe = "desktopWireframe.txt";
if(file_exists($desktopWireframe)){
	echo file_get_contents($desktopWireframe);
}
?>