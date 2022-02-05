<?php
include 'connection.php';
?>
<?php
    if (isset($_POST["Fname"])) {

        $Fname = $_POST["Fname"];
        $Lname = $_POST["Lname"];
        $Gmail = $_POST["Gmail"];
        $City = $_POST["City"];
        $Message = $_POST["Message"];
        
        $page = $_POST["page"];
        $sql = "INSERT INTO anas VALUES('$Fname','$Lname', '$Gmail', '$City','$Message');";
        $result = mysqli_query($conn, $sql);
        header('Location: ' . $page);
        die();
    }
    ?>