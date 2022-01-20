<?php
include("includes/header.php");
include("includes/sidebar.php");
include("includes/content-top.php");
?>
<?php
/**CODE VOOR HET FORMULIER**/
if(!$session->is_signed_in()){//testen of er een user ingelogd is (is er een session)
   redirect('login2.php');
}
/**vanaf hier code formulier*/
$message ="";
$photo = new Photo();
if(isset($_POST['submit'])){

    $photo->title = $_POST['title'];
    $photo->alternate_text = $_POST['alternate_text'];
    $photo->description = $_POST['description'];
    $photo->set_file($_FILES['file']);

    if($photo->save()){
        $message = "Photo uploaded succesfully";
    }else{
        $message = join("<br>", $photo->errors);
    }
}
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="shadow-lg p-3 mb-5 bg-white rounded">UPLOAD</h1>
            </div>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alternate_text">title</label>
                    <input type="text" name="alternate_text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="file" class="form-control">
                </div>
                <input type="submit" name="submit" value="upload" class="btn btn-primary">
            </form>
        </div>

    </div>
<?php
include("includes/footer.php");
?>