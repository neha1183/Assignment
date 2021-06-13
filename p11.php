<html>
<body>
<center>
     <h2>
        Bill
    </h2>

    <form method="post">
        Enter the item names:<input type="text" name="names" placeholder="Enter the item names" required /><br><br>
        Enter the item price:<input type="text" name="price" placeholder="Enter the item price" required />
        <br><br>
        <input type="submit" name="submit" value="Store"/>
	<input type="reset" name="reset" value="Reset"/>
    </form>
    <center><h2>To Display items</center>
    <br>
    <table>
    <tr class="w3-red">
    <th>Item Name</th>
    <th>Item Price</th>
    </tr>
    <tr>
    <?php
       if($_POST)  
       {   
          $names = $_POST['names']; 
          $price = $_POST['price'];

          $nme = explode(',',$names);
          $x = count($nme);

          $prc = explode(',',$price);	
            for($i=0;$i<$x;$i++){
            echo "<tr>";
            echo "<td>{$nme[$i]}</td><td>{$prc[$i]}</td>";
       }
      echo "<tr>";
      echo "</table>";
        echo '<br>';
        $total = 0;
        for($i=0; $i<$x;$i++)
        {
            $total = $total + $prc[$i];
        }

        echo '<h4>Total Amount Is: <b>'.$total. '</b>';

        $mx= max($prc);
        $ky = array_search($mx, $prc);
        echo '<br>';
        echo 'Costliest item Is:<b> '.$nme[$ky]. '</b>';

        $mn= min($prc);
        $key = array_search($mn, $prc);
        echo '<br>';
        echo 'Cheapest item Is:<b> '.$nme[$key]. '</b>';
      }     
  ?>
  <td></td>
  <td></td>
  </tr>
  </table>
<br>
<br>
</center>
</body>
</html>