<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add User</h1>
    <form action="index.php" method="post" id="add_user_form">
        <input type="hidden" name="action" value="add_user" />
        
        <label>User:</label>
        <input type="text" name="user_name" />
        <br>
        
        <label>Room Number:</label>
        <input type="text" name="room" />
        
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add User" />
        <br />  <br />
    </form>
    <p><a href="index.php?action=list_users">View User List</a></p>

</div>
<?php include '../view/footer.php'; ?>

