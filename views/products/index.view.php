<?php

//dd(getcwd());
?>
<?php require "views/partials/header.view.php" ?>

<a href="/admin/products/create" class="btn btn-primary">Add new product</a>
<br>
<br>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Thumbnail</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product->id ?></td>
        <td><?= $product->title ?></td>
        <td><?= substr($product->description, 0, 50) ?>...</td>
        <td><img src="/storage/<?= $product->image ?>" alt="" width="150"></td>
        <td><a href="/admin/products/show?id=<?= $product->id ?>">Show</a> | <a href="/admin/products/edit?id=<?= $product->id ?>">Edit</a> | <form action="/admin/products/destroy" method="post"><button class="btn">
                    <input type="hidden" name="id" value="<?= $product->id ?>">Delete</button></form></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php require "views/partials/footer.view.php" ?>
