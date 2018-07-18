<?php require "partials/header.view.php" ?>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <?php if ($task->isCompleted()): ?>
                <li><strike><?= $task->description ?></strike></li>
            <?php else: ?>
                <li><?= $task->description ?></li>
            <?php endif; ?>
        <?php endforeach;?>
    </ul>


<form action="/task/add" class="form" method="post">
    <div class="form-group">
        <label for="description">Task</label>
        <input type="text" name="description" id="description">
    </div>

    <button>Submit</button>
</form>
<?php require "partials/footer.view.php" ?>
