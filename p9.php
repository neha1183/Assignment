<html>
<head>
<title>Employee Details</title>
</head>
<body>
<form method="post">
<center>
<h2>Employee Details</h2>
<table border="2">
<tr>
<td>
 <input type="file" id="img" name="img" required>Profile
</td>
</tr>
<tr>
<td> <input type="text" name="" value="" placeholder="Enter Employee Number" required/>
</td>
</tr>
<tr>
<td> <input type="text" name="" value="" placeholder="Enter First Name" required/>
</td>
<td> <input type="text" name="" value="" placeholder="Enter Last Name" required/>
</td>
</tr>
<tr>
<td> <textarea name="address" rows="3" cols="30" required></textarea>
</td>
</tr>
<tr>
<td>
<input type="radio" value="male" name="gender">male
</td>
<td>
<input type="radio" value="female" name="gender">female
</td>
</tr>
<tr>
<td>
<input type="text" name="" placeholder="designation" required>
</td>
</tr>
<tr>
<td>
<input type="number" name="" placeholder="Phone number" required>
</td>
</tr>
<tr>
<td>
Category: 
<input type="radio" value="Part Time" name="cat">Part Time
</td>
<td>
<input type="radio" value="Full Time" name="cat">Full Time
</td>
<td>
<input type="radio" value="Contract" name="cat">Contract
</td>
</tr>
</td>
</tr>
<tr>
<td>
<input type="text" name="wr" placeholder="number of hours">(only part time employees)
</td>
</tr>
<tr>
<td>
<tr>
<td> <input type="text" name="salary" value="" placeholder="Enter basic salary" required/>
</td>
</tr>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</center>
</form>

<?php
  if(isset($_POST['submit']))
  {
        $bs= $_POST['salary'];
        $jb= $_POST['cat'];
        $wr=$_POST['wr'];
        if($jb=='Part Time')
        {
           $bs=$wr*100;
           echo "Basic Salary : ".$bs."/-<br>"; 
        }
        elseif($jb=='Full Time')
        {
          if($bs<10000)
          {
           $da = 0.45 * $bs;
           $hr = 0.10 * $bs;
	   $gross = $bs + $da + $hr;
	   echo "Basic Salary : ".$bs."/-<br>";
	   echo "Dearness Allowance: " .$da."/-<br>";
	   echo "House Rent : " .$hr ."/-<br>";
	   echo "Gross Salary : " .$gross ."/-<br>";
          }
          elseif($bs>=10000 and $bs<50000)
          {
            $da = 0.75 * $bs;
           $hr = 0.20 * $bs;
           $pf=1200;
           $tax=0.05 * $bs;
	   $gross = $bs + $da + $hr;
           $Net=$gross-$pf-$tax;
	   echo "Basic Salary : ".$bs."/-<br>";
	   echo "Dearness Allowance: " .$da."/-<br>";
	   echo "House Rent : " .$hr ."/-<br>";
	   echo "Gross Salary : " .$gross ."/-<br>";
           echo "Net Salary : " .$Net ."/-<br>";
          }
          else
          {
            $da = 0.9 * $bs;
           $hr = 0.30 * $bs;
           $pf=0.05 * $bs;;
           $tax=0.15 * $bs;
	   $gross = $bs + $da + $hr;
           $Net=$gross-$pf-$tax;
	   echo "Basic Salary : ".$bs."/-<br>";
	   echo "Dearness Allowance: " .$da."/-<br>";
	   echo "House Rent : " .$hr ."/-<br>";
	   echo "Gross Salary : " .$gross ."/-<br>";
           echo "Net Salary : " .$Net ."/-<br>";
          }
        }
        else
        {
         if($bs<5000)
          {
           $da = 200;
           $hr = 0;
	   $gross = $bs + $da + $hr;
	   echo "Basic Salary : ".$bs."/-<br>";
	   echo "Dearness Allowance: " .$da."/-<br>";
	   echo "House Rent : " .$hr ."/-<br>";
	   echo "Gross Salary : " .$gross ."/-<br>";
          }
          elseif($bs>=5000 and $bs<25000)
          {
            $da = 0.15 * $bs;
           $hr = 1000;
           $tax=0.03 * $bs;
	   $gross = $bs + $da + $hr;
           $Net=$gross-$tax;
	   echo "Basic Salary : ".$bs."/-<br>";
	   echo "Dearness Allowance: " .$da."/-<br>";
	   echo "House Rent : " .$hr ."/-<br>";
	   echo "Gross Salary : " .$gross ."/-<br>";
           echo "Net Salary : " .$Net ."/-<br>";
          }
          else
          {
            $da = 0.20 * $bs;
           $hr = 0.05 * $bs;
           $tax=0.09 * $bs;
	   $gross = $bs + $da + $hr;
           $Net=$gross-$tax;
	   echo "Basic Salary : ".$bs."/-<br>";
	   echo "Dearness Allowance: " .$da."/-<br>";
	   echo "House Rent : " .$hr ."/-<br>";
	   echo "Gross Salary : " .$gross ."/-<br>";
           echo "Net Salary : " .$Net ."/-<br>";
          }          
        }
  }
?>

</body>
</html>