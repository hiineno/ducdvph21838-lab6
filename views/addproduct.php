
<?php  var_dump($err) ; var_dump($value) ?>
<form action="/index" method="POST" enctype="multipart/form-data">
   
    <input type="text" name="name" placeholder="nhap ten sp">
    <br>
    <br>
    <input type="file" name="image" >
    <br>
    <br>
    <input type="text" name="price" placeholder="gia">
    <br>
    <br>
    <button type="submit" >gui</button>
</form>