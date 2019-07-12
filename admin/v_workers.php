<?php
require_once "index.php";
?>

<div class="row">
    <div class="col-sm-12">
        <h1>Workers</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_a = "select * from workers";
            $run_a = mysqli_query($con,$get_a);
            $count_a = mysqli_num_rows($run_a);
            if($count_a==0){
                echo "<h2> No worker found </h2>";
            }
            else {
                $i = 0;
                while ($row_a = mysqli_fetch_array($run_a)) {
                    $a_id = $row_a['id'];
                    $a_name = $row_a['Name'];
                    $a_age = $row_a['Age'];
                    $a_gender = $row_a['Gender'];
                    $a_contact = $row_a['Contact'];
                    ?>
                    <tr>
                        <td><?php echo $a_id; ?></td>
                        <td><?php echo $a_name; ?></td>
                        <td><?php echo $a_age; ?></td>
                        <td><?php echo $a_gender; ?></td>
                        <td><?php echo $a_contact; ?></td>
                        <td><a href="index.php?e_workers=<?php echo $a_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?d_workers.php=<?php echo $a_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>