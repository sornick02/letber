<?php
$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

$dir = $_SERVER['SCRIPT_FILENAME'];
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url1 = '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$basename = basename(__DIR__);

echo '<head><title>'.$basename.'</title></head>';

	echo '<div style=font-size:18.0pt;line-height:170%;font-family:"Calibri Light",sans-serif>Download Folder</div>';
			
	$dir = __DIR__;
	//Проверка директории (поставь свою директорию!!! (Если у тебя локалка то лучше делать так, по другому будет ошибка))
    $files = scandir($dir);
    //Сортировка по названию (А, Б, В...)
    //sort($files);
    
	foreach($files as $file){
		if (filetype($file)=='dir' and $file<>'.' and $file<>'..') {
			echo '<div style=font-size:12.0pt;line-height:170%;font-family:"Calibri Light",sans-serif><a style=text-decoration:none class= link href="'.$url1.'\\'.$file.'\\index.php" class="product">🗁 '.$file.'</a></div>';		 
		} 
	;}
	
	foreach($files as $file){
		if (filetype($file)=='file' and $file<>'index.php') {			
			echo '<div style=font-size:12.0pt;line-height:170%;font-family:"Calibri Light",sans-serif><a style=text-decoration:none class=link href="'.$url1.'\\'.$file.'" class="product">'.$file.'</a></div>';
		} 
	;}


