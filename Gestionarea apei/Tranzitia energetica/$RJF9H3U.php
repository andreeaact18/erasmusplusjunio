<?php
    function validateTime($hour, $minute, $second) {
        // Convert inputs to integers
        $hour = (int)$hour;
        $minute = (int)$minute;
        $second = (int)$second;

        // Check if the values are within the valid range
        if ($hour < 0 || $hour > 24 || $minute < 0 || $minute > 59 || $second < 0 || $second > 59) {
            echo "Invalid time input!";
        } else {
            // Check for special cases
            if ($hour == 24 && $minute == 0 && $second == 0) {
                echo "Midnight";
            } elseif ($hour == 12 && $minute == 0 && $second == 0) {
                echo "Midday";
            } else {
                echo "Valid time input";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hour = $_POST["hour"];
        $minute = $_POST["minute"];
        $second = $_POST["second"];

        validateTime($hour, $minute, $second);
    }
    ?>