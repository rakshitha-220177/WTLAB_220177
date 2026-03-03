<?php
$message = "";
$uploadedFile = "";

if(isset($_POST['upload'])) {

    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {

        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFile = $targetDir . $fileName;

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            $message = "File uploaded successfully!";
            $uploadedFile = $fileName;
        } else {
            $message = "Error uploading file.";
        }

    } else {
        $message = "Please select a file.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload System</title>
</head>
<body>

<h2>Upload File</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <br><br>
    <button type="submit" name="upload">Upload</button>
</form>

<p><?php echo $message; ?></p>

<?php if($uploadedFile != "") { ?>
    <a href="download.php?file=<?php echo $uploadedFile; ?>">
        <button>Download File</button>
    </a>
<?php } ?>

</body>
</html>
