<form method="post">        
Enter a Number: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
<?php   
    if($_POST)  
    {  
       function fact($n)
       {
       if($n ==0)
       {
	   return 1;
       }
       else 
       {	
	   return $n * fact($n-1);
       }
    }
    $num = $_POST['num']; 
   echo "Factorial of $num is ";
   print_r(fact($num)."\n");
  }
?>