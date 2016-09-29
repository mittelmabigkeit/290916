<meta charset="utf-8">
<?php
$f="c:\\OpenServer\\domains\\php290916\\text.txt";
$fileowner=fileowner($f);
echo $fileowner;
echo "<br>";
if (chown($f,"Администратор")) 
	{
		echo "Владелец изменился";
	}
else
	{
		echo "Ошибка";
	}
echo "<br>";
if (chgrp($f,"Гости"))
	{
		echo "Группа изменена";
	}
	else
	{
		echo "Ошибка";
	}
echo "<br>";
$par=0777;	
if (chmod($f,$par))
	{
		echo "Доступ изменен";
	}
	else
	{
		echo "Ошибка";
	}
echo "<br>";
$arr=stat($f);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "<br>";
$filesize=filesize($f);
echo $filesize;
echo "<br>";
$filemtime=filemtime($f);
echo $filmetime;
echo "<br>";
?>