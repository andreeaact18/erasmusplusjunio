<!DOCTYPE html>
<html>
<head>
    <title>Random Password</title>
</head>
<body>
    <?php
    $randomPassword = rand(100000, 999999); // Generate a random 6-digit password

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the guessed digits
        $guess2 = $_POST["guess2"];
        $guess5 = $_POST["guess5"];

        // Check if the guesses are correct
        if ($guess2 == substr($randomPassword, 1, 1) && $guess5 == substr($randomPassword, 4, 1)) {
            echo "<p>Both guesses are correct! The password is: $randomPassword</p>";
        } elseif ($guess2 == substr($randomPassword, 1, 1) || $guess5 == substr($randomPassword, 4, 1)) {
            echo "<p>One of the guesses is correct!</p>";
        } else {
            echo "<p>Both guesses are incorrect!</p>";
        }
    }
    ?>

    <h2>Random Password Guessing Game</h2>
    <p>Guess the 2nd and 5th digits of the password:</p>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="guess2">2nd Digit:</label>
        <input type="number" name="guess2" min="0" max="9" required>
        <br><br>
        <label for="guess5">5th Digit:</label>
        <input type="number" name="guess5" min="0" max="9" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>