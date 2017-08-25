
<?php include("partials/header.php"); ?>

    <h1>Welcome to Todo List Application</h1>

    <?php include("partials/nav.php"); ?>
        
        <h3>Todo list</h3>

        <ul>
            <?php foreach($tasks as $task) : ?>
            
                <?php if($task->completed) : ?>
                    <strike><li><?php echo $task->description; ?></li></strike>
                    
                <?php else: ?>
                    <li><?php echo $task->description; ?></li>
                <?php endif ?>
                    
            <?php endforeach ?>
        </ul>
        
<?php include("partials/footer.php"); ?>