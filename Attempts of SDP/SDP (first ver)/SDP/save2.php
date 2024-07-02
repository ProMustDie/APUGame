<?php
include 'conn.php';

// Check if the required POST variables are set
if (isset($_POST['id'], $_POST['name'], $_POST['msg'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $msg = $_POST['msg'];

    if ($name != "" && $msg != "") {
        $sql = $conn->query("INSERT INTO discussionhtml (parent_comment, student, post)
            VALUES ('$id', '$name', '$msg')");
        echo json_encode(array("statusCode" => 200));
    } else {
        echo json_encode(array("statusCode" => 201));
    }
} else {
    echo json_encode(array("statusCode" => 202)); // Indicate missing POST variables
}

$conn = null;
?>
