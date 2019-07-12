<?php

require_once "index.php";

if(isset($_GET['d_workers'])){
    $del_id = $_GET['d_workers'];
    $del_work = "delete from workers where id='$del_id'";
    $run_del = mysqli_query($con,$del_work);
    if($run_del){
        header('location: index.php?v_workers');
    }
}