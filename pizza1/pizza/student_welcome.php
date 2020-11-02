<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Welcome Student!</h1>
        <h2>Available Sizes</h2>
        <table>
            <tr>
                <th>Size</th>
                <th>Diameter (inches)</th>
            </tr>
            <?php foreach ($sizes as $size): ?>
            <tr>
                <td><?php echo $size['size']; ?></td>
                <td><?php echo $size['diameter']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <h2>Available Toppings</h2>
        <table>
            <?php foreach ($toppings as $topping): ?>
            <tr>
                <td><?php echo $topping['topping']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <h2>Check Your Pizza's Status</h2>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="check_status"> 
            <select name = "username">
                <?php foreach ($users as $user): ?> 
                <option value = "<?php echo $user['username']; ?>"><?php echo $user['username']; ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" value="check status">Check Pizza's Status</button>
        </form>
        <?php if($username != NULL): ?>
            <h2>Order Progress For: <?php echo $username; ?></h2>
            <?php if($get_personal_order == null): ?>
                <p>No Orders in Progress for: <?php echo $username; ?></p>
            <?php else: ?>
                <?php foreach($get_personal_order as $order ): ?><?php $flag=0; ?>
                <table>
                        <tr>
                            <td><?php echo $order['order_id']; ?></td>
                            <td><?php echo $order['username']; ?></td>
                            <td><?php echo $order['status']; ?></td>
                            <?php if ($order['status'] == "Baked"): $flag = 1; ?> <?php endif; ?>
                        </tr>
                </table>
                <?php endforeach; ?>
                <?php if($flag): ?>
                    <form action="index.php" method="post">
                        <input type="hidden" name="username" value="<?php echo $username; ?>">
                        <input type="hidden" name="action" value="acknowledge">
                        <button type="submit" value="acknowledge" >Acknowledge Delivery of Baked Pizzas</button>
                    </form>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        
        <p>
            <a href="?action=order_pizza">Order a New Pizza</a>
        </p>
    </section>
</main>
<?php include '../view/footer.php'; 