<?php namespace running;

 include 'file1.php';
 include 'file2.php';
 include 'file3.php';
 include 'file6.php';
 include 'lib/file5.php';

 use foo as veline;
 use foo2 as veline2;
 use bar as bro;
 use animate;
 use lib\man as kodew;

 $cat 		= new veline\Cat;
 $cat2 		= new veline2\Cat;
 $woman 	= new kodew\Woman;
 $anjing 	= new bro\Dog;

 echo $cat->says();
 echo $cat::eat();
 echo $cat2->says();
 echo $anjing->says();
 echo animate\Animal::breathe();

 echo $woman->walk();

?>