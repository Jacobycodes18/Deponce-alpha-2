<?php
    session_start();
?>
<style>
td {
    border-bottom: 1px solid #b8b8b8 !important;
    border-top: 1px solid #b8b8b8 !important;
    background: white;
    line-height: 2rem;
    min-width: 140px;
}
    
    tr {
        border-right: 1px solid #b8b8b8;
        border-left: 1px solid #b8b8b8;
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
    .mod {
        width: 45%;
    }
    .edit {
        float: right;
        padding: 5px;
    }
    .scroll {
        overflow-y: scroll !important;
    }
</style>

<div class="main-row">
    <div class="left-pane">
        <h6>Basic Information</h6>
        <div class="mod">
            <table>
                <tr>
                    <td><strong>Full Name</strong></td><td><?php echo $_SESSION['u_first']; echo ' ';echo $_SESSION['u_last'];?></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td><td><?php echo $_SESSION['u_email']?><i class="fa fa-pencil edit"></i></td>
                </tr>
                <tr>
                    <td><strong>Username</strong></td><td><?php echo $_SESSION['u_uid']?><i class="fa fa-pencil edit"></i></td>
                </tr>
                <tr>
                    <td><strong>Password</strong></td><td><a href="#">Change Password</a></td>
                </tr>
            </table>
        </div>
        <h6>Additional Information</h6>
        <div class="mod">
            <table>
                <tr>
                    <td><strong>Gender</strong></td><td><a href="#">Add Gender</a></td>
                </tr>
                <tr>
                    <td><strong>Phone Number</strong></td><td><a href="#">Add Phone</a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="right-pane"></div>
</div>