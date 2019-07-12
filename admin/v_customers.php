<?php
require_once "index.php";
?>

<div class="row">
    <div class="col-sm-12">
        <h1>Customers</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_a = "select * from customers";
            $run_a = mysqli_query($con,$get_a);
            $count_a = mysqli_num_rows($run_a);
            if($count_a==0){
                echo "<h2> No customer found </h2>";
            }
            else {
                $i = 0;
                while ($row_a = mysqli_fetch_array($run_a)) {
                    $a_name = $row_a['username'];
                    $a_gender = $row_a['gender'];
                    $a_contact = $row_a['email'];
                    ?>
                    <tr>
                        <td><?php echo $a_name; ?></td>
                        <td><?php echo $a_gender; ?></td>
                        <td><?php echo $a_contact; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>