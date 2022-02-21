<?php
require_once 'header.php';
?>

<body>
    <div class="trans">

        <div class="sender">
            <form method="POST">
                <?php
                include 'db.php';
                $ids = $_GET['idtransfer'];
                $showquery = "select * from `customers` where ID=($ids) ";
                $showdata = mysqli_query($db_connection, $showquery);
                if (!$showdata) {
                    printf("Error: %s\n", mysqli_error($db_connection));
                    exit();
                }
                $arrdata = mysqli_fetch_array($showdata);
                ?>

                <h3>Sender Details</h3>
                <div class="mb-3">
                    <input type="name" class="form-control" name="name1" value="<?php echo $arrdata['NAME']; ?>" required placeholder="Enter Your Name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <input type="email" class="form-control" id="email" name="email1" value="<?php echo $arrdata['EMAIL']; ?>" required placeholder="Email ID" name="email">
                </div>
                <div class="mb-3">
                    <input type="phone" class="form-control" name="amount1" value="" style="width:210px;" required placeholder="Amount" name="pswd">
                </div>

        </div>
        <div class="process">
            <button name="submit" style="color:red" class="trans-but">Transfer</button>
        </div>
        <div class="receiver">
            <h3>Receiver Details</h3>

            <div class="mb-3">
                <input type="name" class="form-control" name="name2" value="" required placeholder="Enter Your Name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <input type="email" class="form-control" id="email" name="email2" value="" required placeholder="Email ID" name="email">
            </div>

            </form>
            <?php

            include 'db.php';

            if (isset($_POST['submit'])) {


                $Sender_name = $_POST['name1'];
                $Sender_email = $_POST['email1'];
                $Sender = $_POST['amount1'];
                $Receiver_name = $_POST['name2'];
                $Receiver_email = $_POST['email2'];



                $ids = $_GET['idtransfer'];
                $senderquery = "select * from `customers` where ID=$ids ";
                $senderdata = mysqli_query($db_connection, $senderquery);

                if (!$senderdata) {
                    printf("Error: %s\n", mysqli_error($db_connection));
                    exit();
                }
                $arrdata = mysqli_fetch_array($senderdata);

                //receiverquery
                $receiverquery = "select * from `customers` where Email='$Receiver_email' ";
                $receiver_data = mysqli_query($db_connection, $receiverquery);

                if (!$receiver_data) {
                    printf("Error: %s\n", mysqli_error($db_connection));
                    exit();
                }
                $receiver_arr = mysqli_fetch_array($receiver_data);
                $id_receiver = $receiver_arr['ID'];


                if ($arrdata['Amount_limit'] >= $Sender) {
                    $decrease_sender = $arrdata['Amount_limit'] - $Sender;
                    $increase_receiver = $receiver_arr['Amount_limit'] + $Sender;
                    $query = "UPDATE `customers` SET `ID`=$ids,`Amount_limit`= $decrease_sender  where `ID`=$ids ";
                    $rec_query = "UPDATE`customers` SET `ID`=$id_receiver,`Amount_limit`= $increase_receiver where  `ID`=$id_receiver ";
                    $res = mysqli_query($db_connection, $query);
                    $rec_res = mysqli_query($db_connection, $rec_query);
                    if ($res && $rec_res) {
            ?>
                        <script>
                            alert("Transaction Successful!");
                        </script>

                    <?php

                    } else {
                    ?>
                        <script>
                            alert("Error!");
                        </script>

                    <?php

                    }
                } else {
                    ?>
                    <script>
                        alert("Transaction Not  Successful!");
                    </script>
            <?php

                }
            }
            ?>
        </div>
    </div>
</body>

</html>
<?php
require_once 'footer.php';
?>