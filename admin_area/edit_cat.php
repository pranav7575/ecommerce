<?php  
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<?php
if (isset($_GET['edit_cat'])) {
    $edit_id = $_GET['edit_cat'];
    $edit_cat = "SELECT * FROM categories WHERE cat_id='$edit_id'";
    $run_edit = mysqli_query($con, $edit_cat);
    $row_edit = mysqli_fetch_array($run_edit);

    $c_id = $row_edit['cat_id'];
    $c_title = $row_edit['cat_title'];
    $c_desc = $row_edit['cat_desc'];
    $c_image = $row_edit['cat_image']; // Ensure field name consistency
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb">
            <ul>
                <li class="active">
                    <i class="fa fa-bar-chart"></i>
                    Dashboard / Edit Category
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"> Edit Category</i>
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Category Title</label>
                        <div class="col-md-6">
                            <input type="text" name="cat_title" class="form-control" required value="<?php echo $c_title; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Category Description</label>
                        <div class="col-md-6">
                            <textarea type="text" name="cat_desc" class="form-control"><?php echo $c_desc; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Category Image</label>
                        <div class="col-md-6">
                            <input type="file" name="cat_images" class="form-control">
                            <br>
                            <img src="cat_images/<?php echo $c_image ?>" width="70" height="70">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="update" value="Update Category" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update'])) {
    $cat_title = $_POST['cat_title'];
    $cat_desc = $_POST['cat_desc'];
    $cat_image = $_FILES['cat_images']['name'];
    $temp_name = $_FILES['cat_images']['tmp_name'];

    // Check if a new image was uploaded
    if (!empty($cat_image)) {
        move_uploaded_file($temp_name, "cat_images/$cat_image");
        $image_query = ", cat_image='$cat_image'";
    } else {
        $image_query = ""; // Keep the old image
    }

    $update_cat = "UPDATE categories SET cat_title='$cat_title', cat_desc='$cat_desc' $image_query WHERE cat_id='$c_id'";
    $run_cat = mysqli_query($con, $update_cat);

    if ($run_cat) {
        echo "<script>alert('One Category has been updated successfully')</script>";
        echo "<script>window.open('index.php?view_categories','_self')</script>";
    }
}
?>

<?php } ?>
