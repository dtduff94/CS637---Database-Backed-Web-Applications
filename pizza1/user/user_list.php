<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>User List</h1>

    <h2>Users</h2>
        <table>
            <tr>
                <th>User Name</th>
                <th>Room Number</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['room']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p>
            <a href="?action=show_add_form">Add User</a></p>
        </p>
    </section>
</main>
<?php include '../view/footer.php';