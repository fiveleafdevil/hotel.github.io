<?php
// Database connection information
$host = "localhost";
$username = "root";
$password = "";
$database = "loginpage1";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input values
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare SQL statement to insert new user into "users" table
    $sql = "INSERT INTO sign ( email, password) VALUES ( '$email', '$password')";

    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "New user created successfully";
        header("Location: ./index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Sign Up</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="outer-box stylesheet">
        <div class="inner-box">
            <header class="signup-header">
                <h1>Signup</h1> 
                <p>It just takes 30 seconds</p>
            </header>

            <main class="signup-body">
                <form action="index.php">

                    

                    <p> <label for="email">Your Email</label>
                        <input type="email" id="email" placeholder="e.g:- abc@gmail.com" required name="email">
                    </p>

                    <p> <label for="password">Your Password</label>
                        <input type="password" id="password" placeholder="at least 8 characters" required name="password">
                    </p>

                    <p>
                        <input type="submit" id="submit" value="Create Account ">
                    </p>


                </form>
            </main>

            <footer class="signup-footer">
                <p>Already have Account? <a href="">Login</a></p>

            </footer>
        </div>

        <div class="circle c1"></div>
        <div class="circle c2"></div>
    </div>
    </form>
    
</body>
</html>