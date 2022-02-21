<?php
require_once 'header.php';
?>
<?php
require_once 'db.php';
$sql = 'select * from customers';
$result = $db_connection->query($sql);
// var_dump($result);
?>

<body>
    <div class="cust_tab">
        <table class="styled-table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Amount_limit</th>
                <th colspan="2">Transfer</th>
            </thead>
            <tbody>
                <?php
                while ($customer_info = mysqli_fetch_array($result)) {
                ?>
                    <tr class="active-row">
                        <td><?= $customer_info['ID'] ?></td>
                        <td><?= $customer_info['NAME'] ?></td>
                        <td><?= $customer_info['EMAIL'] ?></td>
                        <td><?= $customer_info['Amount_limit'] ?></td>
                        <td> <a class="btn btn-large btn-danger logout" href="transfer.php?idtransfer=<?php echo $customer_info['ID']; ?>">
                                <i class="fa fa-sign-out" aria-hidden="true">Transfer</i>
                            </a>
                        </td>



                    </tr>
                <?php

                } ?>
            </tbody>
        </table>
    </div>

</body>

</html>
<?php
require_once 'footer.php';
?>