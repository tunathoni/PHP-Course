<?php namespace running;

 include 'file1.php';
 include 'file2.php';
 include 'file3.php';
 include 'lib/file5.php';

 use foo as veline;
 use bar as bro;
 use animate;
 use lib\man as kodew;

 $cat 		= new veline\Cat;
 $woman 	= new kodew\Woman;
 $anjing 	= new bro\Dog;

 echo $cat->says();
 echo $anjing->says();
 echo animate\Animal::breathe();

 echo $woman->walk();

?>