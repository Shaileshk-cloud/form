<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="form.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Online Registration Form</h1>
        <form id="registrationForm" action="submit.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Register</button>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#registrationForm').submit(function(e) {
                alert('Form Submitted Successfully!');
            });
        });
    </script>
    


</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Example output
    echo "<h1>Registration Successful</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
}
?>