<?php
// connect to the database
$db = mysqli_connect('sql6.freemysqlhosting.net', 'sql6451241', 'bVRimSp8yD', 'sql6451241');

// Uploads files
if (isset($_POST['reg_user'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['documents']['name'];
    
    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['documents']['tmp_name'];

    if (!in_array($extension, ['zip', 'rar'])) {
        echo "Your file extension must be .zip or .rar";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO seller_info (documents) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
// connect to database
$db = mysqli_connect('sql6.freemysqlhosting.net', 'sql6451241', 'bVRimSp8yD', 'sql6451241');

$sql = "SELECT * FROM seller_info";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM seller_info WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
    
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE seller_info SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>