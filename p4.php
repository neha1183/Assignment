<html>  
<body>  
 <form method="post">  
 Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  
</body>  
</html>  
<?php  
 if($_POST)  
 {   
  //get the number entered  
  $num = $_POST['num'];  
  //store entered number in a variable  
  $x = $num;  
  $sum  = 0;  
  while( $x != 0 )  
  {  
   $rem   = $x % 10; //find reminder  
   $sum   = $sum + ( $rem * $rem * $rem ); //cube the reminder and add it to the sum variable till the loop ends  
   $x  = $x / 10;  
  }  
  //if the entered number and $sum value matches then it is an armstrong number  
  if( $num == $sum )  
  {  
   echo "$num an Armstrong Number";  
  }else  
  {  
   echo "$num is not an Armstrong Number";  
  }  
 }  
?>     