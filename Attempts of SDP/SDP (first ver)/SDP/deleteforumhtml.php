<?php
include("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    try {
        // Create a PDO connection
        $pdo = new PDO('mysql:host=localhost;dbname=forum', 'root', '');

        // Set PDO to throw exceptions on error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Retrieve the ID from the URL and sanitize it (you should use more secure methods)
        $id = $_GET["id"];

        // Construct the SQL query to delete the record
        $sql = "DELETE FROM discussionhtml WHERE id = :id";

        // Prepare the SQL statement
        $stmt = $pdo->prepare($sql);

        // Bind the ID parameter
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            // Record deleted successfully
            echo "Record deleted successfully. <a href='staffviewhtml.php'>Back to staffviewhtml</a>";
        } else {
            // Error while deleting the record
            echo "Error: Record not deleted.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request.";
}
?>
