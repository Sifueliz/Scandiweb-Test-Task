<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<header>
<title>add-product</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
</header>

<body>

<form method="post" id="#Product_Form" action="initialize.php" name="#Product_Form"> 
  

  <div>
  <p>Product Add</p><br>
  <input type="submit" value="Save">
  <button type="reset" class="btn btn-primary" onclick="window.location.href='index.php'"> Cancel </button>
  </div>
 

  <label for="SKU">SKU:</label><br>
    <input type="text" id="#sku" name="sku"><br>
    <label for="Name">Name:</label><br>
    <input type="text" id="#name" name="name"><br>
    <label for="Price">Price:</label><br>
    <input type="text" id="#price" name="price"><br>

    <label for="productType">Type Switcher:</label>
    
    <Select id="#productType" onchange="prodType(this.value);" name="#productType"> 
    <option value="Type Switcher">Type Switcher</option>
    <option value="DVD" id="DVD">DVD</option>
    <option value="Books" id="Books">Books</option>
    <option value="Furniture" id="Furniture">Furniture</option>
    </select><br>

    <div class="input_field" id=Size_DVD>
    <label for="Size">Size:</label><br>
    <input type="text" id="#size" name="size" <?php require_once "DVD.class.php" ?>><br>
    </div>

    <div class="input_field" id=Weight_Books>
    <label for="Weight">Weight:</label><br>
    <input type="text" id="#weight" name="weight"><br>
    </div>

    <div class="input_field" id=Height_Width_Length>
    <label for="Height">Height:</label><br>
    <input type="text" id="#height" name="height"><br>
    <label for="Width">Width:</label><br>
    <input type="text" id="#width" name="width"><br>
    <label for="Length">Length:</label><br>
    <input type="text" id="#length" name="length"><br>
    </div>
   

</form>

</body>
</html>

<script>
const map = {
  "DVD": "Size_DVD",
  "Books": "Weight_Books",
  "Furniture": "Height_Width_Length"
};

function prodType(value) {
  document
    .querySelectorAll(".input_field")
    .forEach((node) => (node.style.display = "none"));

  document.getElementById(map[value]).style.display = "block";
}
</script>