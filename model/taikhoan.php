<?php
function insert_users($username, $password, $email)
{
    $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$username','$password','$email')";
    pdo_execute($sql);
}
function checkuser($username, $password)
{
    $sql = "SELECT * FROM users WHERE username='" . $username . "' AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function login($username, $password)
{
    $username = checkuser($username, $password);
    if ($username) {
        if ($username['role_id'] == 1) {
            // Role là 1,đăng nhập vào trang admin
            $_SESSION['username'] = $username['username'];
            $_SESSION['iduser'] = $username['id'];
            $_SESSION['role_id'] = $username['role_id'];
            header("Location:index.php");
            exit();
        } else {
            // ddawng nhaap vao trang user
            $_SESSION['username'] = $username['username'];
            $_SESSION['iduser'] = $username['id'];
            $_SESSION['role_id'] = $username['role_id'];
            header("Location: index.php");
            exit();
        }
    } else {
        // Đăng nhập không thành công
        $thongbao = "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }
}






