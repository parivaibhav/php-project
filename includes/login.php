 <?php

    session_start();

    include('db.php');


    $useremail = $_POST['useremail'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$useremail' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['user_type'] = $user['user_type'];
      

        if ($user['user_type'] == 'admin') {
            $_SESSION['email'] = $_POST['useremail'];
            header("Location: ../admin/index.php");
        } else {
            header("Location: ../client/index.php");
        }
    } else {
        echo "Login failed.";
    }


    $conn->close();

    ?>