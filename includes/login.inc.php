<?php 

session_start();

    if (isset($_POST['submit'])) {
        
        include_once 'dbh.inc.php';
        $row = array();
        $uid = mysqli_real_escape_string($conn, $_POST['user']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pass']);

        //error handlers
        //check if inputs are empty
        if ($_SESSION) {
            header("Location: ../home/?login=alreadyLoggedIn");
            exit();
        } else {
        if (empty($uid) || empty($pwd)) {
            header("Location: ../home/?login=empty#login");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1) {
                header("Location: ../home/?login=error#login");
                exit();
            } else {
                //check if email is verified
                $query = "SELECT emailVerified FROM users WHERE user_uid='$uid'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res, MYSQLI_NUM);
                if ($row == [0]) {
                header("Location: ../home/?login=verifyEmail#login");
                exit();
            } else {
                if ($row = mysqli_fetch_assoc($result)) {
                    //de-hashing pass
                    $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
                    if ($hashedPwdCheck == false) {
                        header("Location: ../home/?login=error#login");
                        exit();
                    } elseif ($hashedPwdCheck == true) {
                        // log in user 
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['user_first'];
                        $_SESSION['u_last'] = $row['user_last'];
                        $_SESSION['u_email'] = $row['user_email'];
                        $_SESSION['u_uid'] = $row['user_uid'];
                        $_SESSION['u_clearance'] = $row['clearance'];
                        header("Location: ../auth/account.php?login=success");
                        exit();
                        
                    }
                }
            }
        }
    }
        }
} else {
    header("Location: ../home/?login=error#login");
    exit();
}