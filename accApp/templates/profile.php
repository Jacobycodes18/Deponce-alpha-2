<?php
    session_start();
    if (!$_SESSION) {
        exit();
    }

    $c = $_SESSION['u_clearance'];

    if($c == 1) {$accType = 'Standard User';}
    if($c == 2) {$accType = 'Premium';}
    if($c == 3) {$accType = 'Standard Client';}
    if($c == 4) {$accType = 'Executive Client';}
    if($c == 5) {$accType = 'Moderator';}
    if($c == 6) {$accType = 'Admin';}

    
?>
<style>
td {
    border-bottom: 1px solid #b8b8b8 !important;
    border-top: 1px solid #b8b8b8 !important;
    background: white;
    line-height: 2rem;
    min-width: 80px;
    width: 160px;
    padding: 0 8px 0px 8px;
}

    tr {
        border-right: 1px solid #b8b8b8;
        border-left: 1px solid #b8b8b8;
        
    }
    @media screen and (max-width:500px){
        tr {
            flex-direction: column;
            display: flex;
            width: 100%;
        }
        td {
            width: 100%;
        }
    }

table {
    border-collapse: collapse;
    border: none;
    width: 100%;
    font-size: 0.9rem;
}

th {
    height: 50px;
}
    .left-pane {
        padding-left: 20px;
    }
    .right-pane {
        padding-right: 20px;
    }
    .mod {
        width: 100%;
        margin-bottom: 20px;
    }
    .edit {
        float: right;
        padding: 5px;
    }
    .scroll {
/*        overflow-y: scroll !important;*/
    }
    button {
        display: inline !important;
        font-size: 12px;
        text-transform: uppercase;
        border: 1px solid #c48f56;
        padding: 0 !important;
        cursor: pointer;
        background: transparent;
        border-radius: 0;
        color: inherit;
        width: 40px !important;
        height: 1.2rem;
        text-align: center;
        vertical-align: middle;
    }
    button > .fa {
        margin:0 !important;
        padding: 0;
    }
</style>

<div class="main-row split">
    <div class="left-pane col-xs-12 col-md-6">
        <h6>Basic Information</h6>
        <div class="mod">
            <table>
                <tr>
                    <td class="TI"><strong>Full Name</strong></td><td><?php echo $_SESSION['u_first']; echo ' ';echo $_SESSION['u_last'];?></td>
                </tr>
                <tr>
                    <td class="TI"><strong>Email</strong></td><td><?php echo $_SESSION['u_email']?><i id="email-edit" class="fa fa-pencil edit"></i></td>
                </tr>
                <tr>
                    <td class="TI"><strong>Username</strong></td><td><?php echo $_SESSION['u_uid']?><i class="fa fa-pencil edit"></i></td>
                </tr>
                <tr>
                    <td class="TI"><strong>Password</strong></td><td><a href="../auth/change-pwd.php">Change Password</a></td>
                </tr>
            </table>
        </div>
        <h6>Additional Information</h6>
        <div class="mod">
            <table>
                <tr>
                    <td class="TI"><strong>Gender</strong></td><td><a href="#">Add Gender</a></td>
                </tr>
                <tr>
                    <td class="TI"><strong>Phone Number</strong></td><td><a href="#">Add Phone</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="right-pane col-xs-12 col-md-6">
        <h6>Security Settings</h6>
        <div class="mod">
            <table>
                <tr>
                    <td class="TI"><strong>Account type:</strong></td><td><?php echo $accType;?></td>
                </tr>
            </table>
        </div>
    </div>
</div>


<script>
var email = document.getElementById('email-edit');
    
    email.addEventListener('click', function(e){
        email.parentElement.innerHTML = '<form method="post" action="../../includes/reset-email.php"><input type="text" name="newEmail"><button class="button-style1" type="submit" name="submit"><i class="fa fa-send"></i></button></form';
    });
</script>