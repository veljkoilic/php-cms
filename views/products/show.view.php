<?php require "views/partials/header.view.php" ?>
<a href="/admin/products" class="btn btn-primary">< Back to all</a>
<div class="form-group">
    <p>ID</p>
    <h3><?= $product->id ?></h3>
</div>

<div class="form-group">
    <p>Title</p>
    <h3><?= $product->title ?></h3>
</div>

<div class="form-group">
    <p>Description</p>
    <h3><?= $product->description ?></h3>
</div>

<div class="form-group">
    <p>Image</p>
    <img src="<?= $product->image ?>" alt="">
</div>
<?php require "views/partials/footer.view.php" ?>
