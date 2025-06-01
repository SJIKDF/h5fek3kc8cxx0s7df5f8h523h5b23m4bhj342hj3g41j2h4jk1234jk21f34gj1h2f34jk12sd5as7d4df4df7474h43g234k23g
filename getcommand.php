<?php
// This file fetches the saved Lua command
if (file_exists('command.txt')) {
    $command = file_get_contents('command.txt');
    echo $command; // Output the command directly for Roblox to fetch
} else {
    echo "No command available.";
}
?>
