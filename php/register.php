
<?php
$con = mysqli_connect("localhost", "root", "", "guvi");
if (!$con) {
    echo "connection error";
}
$name = htmlspecialchars(trim($_POST['username']));
//$email = htmlspecialchars(trim($_POST['email']));
$pass = htmlspecialchars(trim($_POST['password']));
//$cpass = htmlspecialchars(trim($_POST['cpassword']));
//$mobile = htmlspecialchars(trim($_POST['mobile']));

if (empty($name) || empty($pass)) {
    echo '<div class="alert alert-success">please fill all required field</div>';
} else {
    $sql = "insert into registration (user,pass) values ('$name','$pass')";
    if ($res = mysqli_query($con, $sql)) {
        echo '<div class="alert alert-success">data successfully inserted</div>';
        echo "success";
    } else {
        echo '<div class="alert alert-warning">data not inserted</div>';
        echo "fail";
    }
}