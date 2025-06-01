<?php
// This file receives the command from the C# app via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['command'])) {
    $command = $_POST['command'];

    // Save the command to a text file or database (simplest is to a text file)
    file_put_contents('command.txt', $command);
    
    // Respond with success
    echo json_encode(["message" => "Command received successfully."]);
} else {
    echo json_encode(["message" => "Invalid request."]);
}
?>
