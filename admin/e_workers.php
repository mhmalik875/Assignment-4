<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['e_workers'])){
    $get_id = $_GET['e_workers'];
    $get_w = "select * from workers where id='$get_id'";
    $run_w = mysqli_query($con, $get_w);
    $row_w = mysqli_fetch_array($run_w);
    $w_id = $row_w['id'];
    $w_name = $row_w['Name'];
    $w_gender = $row_w['Gender'];
    $w_age = $row_w['Age'];
    $w_contact = $row_w['Contact'];
}
if(isset($_POST['update_w'])){
    //getting text data from the fields

    $work_name = $_POST['w_name'];
    $work_gender = $_POST['w_gender'];
    $work_age = $_POST['w_age'];
    $work_contact = $_POST['w_contact'];

    $update_workers = "update workers set Name = '$work_name', 
                                        Age = '$work_age',
                                        Gender = '$work_gender' ,
                                        Contact = '$work_contact',
                                        where id='$w_id'";

    $update_work = mysqli_query($con, $update_workers);
    if($update_work){
        header("location: index.php?v_workers");
    }
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit & Update Worker </h2>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="w_name">Worker Name</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="w_name" name="w_name" placeholder="Name"
                           value="<?php echo $w_name;?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="pro_cat">Worker Age</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="w_age" name="w_age" placeholder="Age"
                           value="<?php echo $w_age;?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="pro_cat">Worker Gender</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="w_gender" name="w_gender" placeholder="Gender"
                           value="<?php echo $w_gender;?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-sm-4 col-lg-3 d-none d-sm-block" for="pro_cat">Worker Contact</label>
                <div class="col-12 col-sm-8 col-lg-9">
                    <input class="form-control" type="text" id="w_contact" name="w_contact" placeholder="Contact"
                           value="<?php echo $w_contact;?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_w" name="update_w"
                           value="Update Worker Now">
                </div>
            </div>
        </form>
    </div>
</div>
