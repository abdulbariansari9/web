<div class="b"><input type="checkbox">
<center>SKU</center>
<center>Name</center>
<center>Price</center>


<?php
if(isset($_POST['delete']))
{

</div> $sql = 'SELECT * FROM products';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  

    echo '<div class="b">'; 
    
    echo '<input type="checkbox">'; 
    echo "<center>{$row['sku']}</center>".
    "<center>{$row['name']}</center>".
    "<center>{$row['price']}</center>"; 
    echo '</div>';

    echo '<input name = "delete[]" type="checkbox" value="$row["sku"]" >'; 
    echo "<center>{$row['sku']}</center>".
    "<center>{$row['name']}</center>".
    "<center>{$row['price']}</center>";
    
 } //end of while  
}else{  
echo "0 results";  
}  

<label for="fname">Size (in MB):</label><br>
        <input type="text" id="fname" name="sku"><br>

        <label for="fname">Weight (in Kg):</label><br>
        <input type="text" id="fname" name="sku"><br>

        <label for="fname">Height:</label><br>
        <input type="text" id="fname" name="sku"><br>

        <label for="fname">Length:</label><br>
        <input type="text" id="fname" name="sku"><br>

        <label for="fname">Breadth:</label><br>
        <input type="text" id="fname" name="sku"><br><br>

        <label for="lname">Type Switcher</label>
        <select name="type" id="register_country" style="width:160px">
            <option value="india">Select</option>
            <option value="pakistan">DVD</option>
            <option value="africa">Book</option>
            <option value="china">Furniture</option>
        </select>
        <hr>


