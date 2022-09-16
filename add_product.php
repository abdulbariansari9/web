<!DOCTYPE html>
<html>

<head>
  <script>
    function expand(p1, p2) {
      var p1 = document.getElementById(p1);
      var p2 = document.getElementById(p2);
      if (p1.value == "select") {
        document.getElementById("add").innerHTML = "";
        return false;
      }
      if (p1.value == "dvd") {
        document.getElementById("add").innerHTML = "this is dvd";
        return false;
      }
      if (p1.value == "book") {
        document.getElementById("add").innerHTML = "New text!////book";
        return false;
      }
      if (p1.value == "furn") {
        document.getElementById("add").innerHTML = "<label for='fname'>Size</label><input type='text' id='fname' name='sku'>";
        return false;
      }
    }
  </script>

</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

  <form action="" method="post">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <h2 style="color:white;">Add Product</h2>
      <input type="submit" value="Submit">
      <a href="index.php">cancel</a>
    </nav><br>

    <label for="fname">SKU</label>
    <input type="text" id="fname" name="sku"><br>
    <label for="lname">Name</label>
    <input type="text" id="lname" name="name"><br>
    <label for="lname">Price($)</label>
    <input type="number" id="lname" name="price"><br>
    <label for="lname">Type Switcher</label>
    <select name="type" id="type" onchange="expand(this.id,add)" style="width:160px">
      <option value="select">Select</option>
      <option value="dvd">DVD</option>
      <option value="book">Book</option>
      <option value="furn">Furniture</option>

    </select>

    <div id="add"></div>





  </form>



</body>

</html>