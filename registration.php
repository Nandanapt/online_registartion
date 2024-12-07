

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Registration Details</h1>
        </header>
        
        
            <?php
            // Check if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $dob = $_POST['dob'];
                $gender = $_POST['gender'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

               
                // Display user details after form submission
                echo "<h2>Registration Successful!</h2>";
                echo "<p><strong>Name:</strong> $username</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Date of Birth:</strong> $dob</p>";
                echo "<p><strong>Gender:</strong> $gender</p>";
                echo "<p><strong>Phone Number:</strong> $phone</p>";
                echo "<p><strong>Address:</strong> $address</p>";
            }
            ?>
        <h2><center>THANK YOU</center></h2>
    </div>
</body></html>