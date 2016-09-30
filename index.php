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
$fileatime=fileatime($f);
echo $fileatime;
echo "<br>";
$filectime=filectime($f);
echo $filectime;
echo "<br>";
$filetype=filetype($f);
echo $filetype;
echo "<br>";
if (is_file($f))
	{
		echo "Это файл";
	}
	else
	{
		echo "Это не файл";
	}
echo "<br>";
if (is_dir($f))
	{
		echo "Это директория";
	}
	else
	{
		echo "Это не директория";
	}
echo "<br>";
if (is_link($f))
	{
		echo "Это ссылка";
	}
	else
	{
		echo "Это не ссылка";
	}

echo "<br>";
echo "<br>";
echo "<br>";

function printTree ($level=1){
     $d=@opendir(".");
	 if (!$d) return;
	 while (($e=readdir($d))!==false){
	 if ($e=='.'|| $e=='..')continue;
	 if (!@is_dir($e)) continue;
	 for ($i=0; $i<$level; $i++)echo "  ";
	 echo "$e\n";
	 if (!chdir($e)) continue;
	 printTree($level+1);
	 chdir("..");
	 flush();
	 }
	 closedir($d);
}
echo "<pre>";
echo "/\n";
chdir($_SERVER['DOCUMENT_ROOT']);
PrintTree();
echo"</pre>"; 
?>