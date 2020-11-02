<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Topping</h1>
    <form action="index.php" method="post" id="add_topping_form">
        <input type="hidden" name="action" value="add_topping" />

        <label>Topping:</label>
        <input type="text" name="topping_name" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Topping" />
        <br />  <br />
    </form>
    <p><a href="index.php?action=list_toppings">View Topping List</a></p>

</div>
<?php include '../view/footer.php'; ?>


