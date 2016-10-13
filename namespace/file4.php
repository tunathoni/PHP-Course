<?php namespace running;

 include 'file1.php';
 include 'file2.php';
 include 'file3.php';

 use foo as veline;
 use bar as bro;
 use animate;

 $cat = new veline\Cat;

 echo $cat->says();
 echo bro\Dog::says();
 echo animate\Animal::breathe();

?>