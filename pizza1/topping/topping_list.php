<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Topping List</h1>

    <h2>Toppings</h2>
        <table>
            <tr>
                <th>Topping Name</th>
            </tr>
            <?php foreach ($toppings as $topping): ?>
            <tr>
                <td><?php echo $topping['topping']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p>
            <a href="?action=show_add_form">Add Topping</a></p>
        </p>
    </section>
</main>
<?php include '../view/footer.php';
