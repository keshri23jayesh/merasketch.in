 <?php
  $x=$_POST['a'];
  $y=$_POST['n'];
  $z=$_POST['e'];
  $t=$_POST['p'];
  
  
  mysqli_connect("localhost","root","");
  mysql_select_db("day2");
  $query="INSERT INTO bit(name,phone,email,password) VALUES('$x','$y','$z','$t')";
  mysql_query($query);
  echo "data base hogya";
  ?>