<?php
    include"includes/header.php";
    include"includes/topnav.php";
    include"includes/sidebar.php";
    if(!isset($_SESSION['session_username']))
    {
        header("Location: login.php");
    }
    if(isset($_POST['upload_file']))
    {
        $uploaded_file = $_FILES['uploaded_file']['name'];
        $uploaded_file_temp = $_FILES['uploaded_file']['tmp_name'];
        move_uploaded_file( $uploaded_file_temp , "FilesUploaded/$uploaded_file" );
        $path = "FilesUploaded/".$uploaded_file;
        $msg = $path." Uploaded Successfully!";
        ?>
        <script>alert("<?php echo $msg; ?>");</script>
        <script>window.open('fileupload.php','_self')</script>
        <?php
    }
?>

<style>
    input[type="file"]
    {
        display: none;
    }
    .custom-file-upload
    {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
</style>

<form action="fileupload.php" method="post" enctype="multipart/form-data">
    <label class="custom-file-upload">
        <input type="file" name="uploaded_file">
        Select File
    </label><br>
    <input type="submit" value="Upload" name="upload_file" class="btn btn-primary">
</form>

<?php
    include"includes/footer.php";
?>