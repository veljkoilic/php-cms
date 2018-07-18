<?php require "views/partials/header.view.php" ?>

    <form action="/admin/createuser" method="POST" >

    <div class="form-group">
        <label for="name">name</label>
        <input type="text" required name="name" id="name" class="form-control" >
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" required name="email" id="email" class="form-control" >
    </div>

    <div class="form-group">
        <label for="password">name</label>
        <input type="password" required name="password" id="password" class="form-control" >
    </div>

    <button class="btn btn-primary">Submit</button>
</form>
<?php require "views/partials/footer.view.php" ?>
