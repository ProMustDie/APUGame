<?php
include('db_Connection.php');

// Get the raw JSON data from the input stream
$json_data = file_get_contents('php://input');

// Decode the JSON data into an associative array
$data = json_decode($json_data, true);

// Retrieve data from the decoded array
$selected_answers = $data['selected_answers'] ?? [];
$question_id = $data['question_id'] ?? null;

// Initialize variables
$is_correct = false;

if (!empty($selected_answers) && !empty($question_id)) {
    // Prepare and execute a SQL statement to retrieve the correct answer from the database
    $stmt = $connection->prepare("SELECT answer FROM sqlgame WHERE questionID = ?");
    $stmt->bind_param("i", $question_id);
    $stmt->execute();
    $stmt->store_result();

    // Bind the result variable
    $stmt->bind_result($correct_answer);

    // Fetch the result
    if ($stmt->fetch()) {
        // Verify if the selected answer matches the correct answer
        $correct_answer = explode(" ",$correct_answer);
        $is_correct = ($selected_answers == $correct_answer);
    }

    // Close the statement
    $stmt->close();
}

// Return the result (JSON format)
echo json_encode(['is_correct' => $is_correct]);
?>
