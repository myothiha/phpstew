
<?php include("partials/header.php"); ?>

    <h1>Welcome to Todo List Application</h1>

    <?php include("partials/nav.php"); ?>
        
        <h3>User list</h3>

        <ul>
            <?php foreach($users as $user) : ?>
            
                    <li><?php echo $user->name . ' ( '. $user->age .' years)'; ?></li>
                    
            <?php endforeach ?>
        </ul>

        <form action="/user" method="post">
            <input type="text" name="name" />
            <input type="submit" value="Submit">
        </form>

<?php include("partials/footer.php"); ?>