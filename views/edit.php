<?php
    var_dump($err);
?>
<form action="/editpost" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>" />
    <input type="text" name="name" value="<?= $product->name ?>">
    
    <img src="" alt="<?= $product->image ?>" >
     <input type="file" name="image">   
    <button type="submit">sua</button>
     
</form>

