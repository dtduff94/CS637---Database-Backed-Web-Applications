<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Current Orders Report</h1>
        <h2>Orders Baked but not delivered</h2>
        <?php if ($baked_orders == NULL): ?>
        <p>No pizza needs to be delivered</p>
        <br>
        <?php else: ?>
        <table>
            <tr>
                <th>Order # in Queue</th>
                <th>User</th>
                <th>Status</th>
            </tr> 
        <?php foreach ($baked_orders as $orders): ?>
        <tr>
            <td><?php echo $orders['order_id']; ?></td>
            <td><?php echo $orders['username']; ?></td>
            <td><?php echo $orders['status']; ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
        <?php endif; ?>
        
        <h2>Orders Preparing (in the oven)</h2>
        <?php if ($preparing_orders == NULL): ?>
        <p>No pizza's need baking</p>
        <br>
        <?php else: ?>
        <table>
            <tr>
                <th>Order # in Queue</th>
                <th>User</th>
                <th>Status</th>
            </tr>
        <?php foreach ($preparing_orders as $orders): ?>
        <tr>
            <td><?php echo $orders['order_id']; ?></td>
            <td><?php echo $orders['username']; ?></td>
            <td><?php echo $orders['status']; ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
        <?php endif; ?>
        
        <form action="index.php" method="post">
        <label>&nbsp;</label>
            <input type="hidden" name="action" value="baked">
            <input type="submit" value="Mark Oldest Pizza as Baked" />
        </form>
        <h2></h2> 
        
    </section>
</main>
<?php include '../view/footer.php';