
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
    $sql = "select * from registration where user='".$name."' and pass='".$pass."'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($res);
    if ($row) {
        echo 'Yes';
    } else {
        echo 'No';
    }
}
