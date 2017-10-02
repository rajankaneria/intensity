<title>Join Us</title>
<?php 
session_start();
include_once './header.php';
include_once './config.php';

if(isset($_POST['join_add']))
{
$photo=$_FILES['join_photo']['name']; 
$target_dir = "uploaded/";
$target_file = $target_dir . basename($_FILES["join_photo"]["name"]);

move_uploaded_file($_FILES["join_photo"]["tmp_name"],$target_file);

    $ins="INSERT INTO join_us (j_title,j_image,j_description) VALUES('','".$photo."','')";
    
    $exe=mysqli_query($con,$ins);
    
    
    
}
?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Service to Join</h2>
            </div>
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add Join us</h2>
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="join_title" maxlength="10" minlength="3" required>
                                        <label class="form-label">Service Title</label>
                                    </div>
                                    <div class="help-info">Min. 3, Max. 10 characters</div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="join_photo" pattern="([^\s]+(\.(?i)(jpg|png|gif|bmp))$)" accept="image/jpg, image/jpeg, image/png" required>
<!--                                        <label class="form-label">Upload Photo</label>-->
                                    </div>
                                    <div class="help-info">Upload Only jpg | jpeg | png Files.</div>
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="join_desc" min="10" max="500" required>
                                        <label class="form-label">Description</label>
                                    </div>
                                    <div class="help-info">Min. Character: 10, Max. Character: 500</div>
                                </div>
                                <input type="submit" name="join_add" class="btn btn-primary waves-effect" value="Add">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
            <!-- Validation Stats -->
            <!-- #END# Validation Stats -->
        </div>
    </section>