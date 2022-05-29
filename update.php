<?Php
include 'database.php';
$id = $_GET['id'];
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql_run = "UPDATE `crud` SET `name`='$name',`email`='$email',`password`='$password' WHERE id = '$id' ";
    $query = mysqli_query($conn, $sql_run);
    if ($query) {
        header('location: display.php');
    }
}

?>