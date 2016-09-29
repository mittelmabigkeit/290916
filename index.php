<meta charset="utf-8">
<?php
/*$f="c:\\OpenServer\\domains\\php290916\\text.txt";
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
echo "<br>";
echo "<br>";
*/
function printTree($level=l) { 
$d = @opendir("."); 
if (!$d) return; 
while (($e=readdir($d)) !== false) { 
if ($e=='.' || $e=='..') continue; 
if (!@is_dir($e)) continue; 
for ($i=0; $i<$level; $i++) echo " "; 
echo "$е\n"; 
if (!chdir($e)) continue; 
printTree($level+l); 
chdir(".."); 
flush();
} 
closedir($d); 
} 
echo "<рге>"; 
echo "/\n"; 
chdir($_SERVER['DOCUMENT_ROOT']); 
printTree(); 
echo "</pre>"; 
?>