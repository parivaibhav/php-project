<?php

include('includes/db.php');

$useremail = $_POST['useremail'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$useremail' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    $_SESSION['user_type'] = $user['user_type'];

    if ($user['user_type'] == 'admin') {
        $_SESSION['email'] = $_POST['useremail'];
        header("Location: admin/index.php");
    } else {
        header("Location: client/index.php");
    }
} else {
    echo "Login failed.";
}


$conn->close();

?>




<?php include 'tophtml.php'; ?>
<?php include 'header.php'; ?>



<body>
    <div class="container border border-3  border-light-subtle my-3 rounded-3" style="padding: 90px;">
        <h1 class="text-center py-2">Login in Your Account</h1>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label ">Email address</label>
                <input type="email" class="form-control py-3" id="exampleFormControlInput1" placeholder="name@example.com" name="useremail" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control py-3" id="exampleFormControlInput1" placeholder="Enter your password" name="password" required>
            </div>
            <button class="btn btn-danger w-100 py-3">Login</button>
        </form>
    </div>

</body>
<?php include 'footer.php'; ?>
<?php include 'endhtml.php'; ?>