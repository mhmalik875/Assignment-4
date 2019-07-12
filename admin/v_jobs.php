<?php
require_once "index.php";
?>

<div class="row">
    <div class="col-sm-12">
        <h1>Jobs</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Service</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_a = "select * from jobs";
            $run_a = mysqli_query($con,$get_a);
            $count_a = mysqli_num_rows($run_a);
            if($count_a==0){
                echo "<h2> No job found </h2>";
            }
            else {
                $i = 0;
                while ($row_a = mysqli_fetch_array($run_a)) {
                    $a_name = $row_a['cust_name'];
                    $a_email = $row_a['cust_email'];
                    $a_cell = $row_a['cust_cell'];
                    $a_service = $row_a['service'];
                    ?>
                    <tr>
                        <td><?php echo $a_name; ?></td>
                        <td><?php echo $a_email; ?></td>
                        <td><?php echo $a_cell; ?></td>
                        <td><?php echo $a_service; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>