<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>

<body>
<?php if(!empty($mess)){ echo $mess; }  ?>
    <table border="1">

        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Image</th>
            <th>
                <a href="/them">Thêm</a>
            </th>
        </tr>


        <?php   foreach ($products as $product) : ?>
            <tr>
                <td><?= $product->id ?></td>
                <td><?= $product->name ?></td>
                <td>
                    <img src="images/<?= $product->image ?>" width='100' alt="">
                </td>
                <td>
                    <a href="/edit?id=<?= $product->id ?>">Edit</a>

                    <a href="/delete?id=<?= $product->id ?>" onclick="return confirm('Bạn có chắc xóa không?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>