<?php
    include_once '../includes/header.php';

    if(!isset($_SESSION)) {
        echo 'please signin to create a post';
        exit();
    } else {
        if($_SESSION['u_clearance'] < 3) {
            echo 'not cleared ';
            echo $_SESSION['u_clearance'];
            exit();
        } else {
            echo 'cleared';
        }
    }
?>


<main class="main-row">
    <div class="container">
       <div class="header-space"></div>
        <article class="post-9 page type-page status-publish hentry">
            <div class="site-content">
                <div class="heading-decor">
                    <h1 class="h2">Post To News & Updates</h1>
                </div>
                <div class="container">
                   
                   <br>
                    <form method="post" action="post.php">
                      <span class="wpcf7-form-control-wrap" style="">
                        <label for="title">Post Title</label>
                        <br>
                        <input class="input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="text" id="title" name="title" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <label for="subTitle">Post Sub-Title</label>
                        <input class="input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="text" id="subTitle" name="subTitle" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <label for="image">Post Image URL</label>
                        <input class="input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 500px;" type="text" id="image" name="image" style="border-bottom-color: #9d7245 !important;">
                        <br>
                        <label for="content">Post Content</label>
                         <br>
                          <textarea class="input wpcf7-form-control wpcf7-text wpcf7-validates-as-required style1" style="max-width: 800px;" type="text" id="content" name="content" style="border-bottom-color: #9d7245 !important;"></textarea>
                        <br>
                        <input class="input wpcf7-form-control wpcf7-submit button-style1" type="submit" name="submit" value="Post">
                        </span>
                    </form>
                </div>
            </div>
        </article>
    </div>
</main>