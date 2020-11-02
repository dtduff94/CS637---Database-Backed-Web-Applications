<?php include '../view/header.php'; ?>
<main>
    <h1> Order Pizza </h1>
    <h2>Pizza Size</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="finish">
        <?php foreach($sizes as $size): ?>
            <input type="radio" name="size" required ="required" value="<?php echo $size['size']; ?>"><?php echo $size['size']; ?>
            <br>
        <?php endforeach;?>

        <h2>Toppings</h2>
        <?php foreach($toppings as $topping): ?>
                    <!-- get meat-->
                    <input type="checkbox" name="topping" value="<?php echo topping['topping']; ?>"><?php echo $topping['topping']; ?>
                    <br>
                    <?php endforeach; ?>
                    
        <h2>Name</h2>
        <select name="username" value = "<?php echo $users['username']; ?>" >
            <?php foreach($users as $user): ?>
            <option><?php echo $user['username']; ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit" value="finish">Done!</button><br>
    </form>

    <p><a href="../user/user_add.php">Add User</a></p>
</main>
<?php include '../view/footer.php'; 