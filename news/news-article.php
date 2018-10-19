<?php
    include_once '../includes/header.php';
    
    if(!isset($_GET['post'])) {
        echo 'nothing';
        exit();
        
    }else {
            include_once '../includes/dbh.inc.php';
        
            $pid = mysqli_real_escape_string($conn, $_GET['post']);
    
            $sql = "SELECT post_title, post_subtitle, post_date, post_content, post_img FROM posts WHERE post_id = '$pid'";

            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $title = $row['post_title'];
                    $sub = $row['post_subtitle'];
                    $date = $row['post_date'];
                    $content = $row['post_content'];
                    $src = $row['post_img'];
                }
            }
    }
?>
 
<div class="header-space"></div>
 <main class="main-row">
  <div class="container">
    <div id="post-605" class="post-605 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion">
      <div class="site-content">
        <div class="heading-decor">
          <h1 class="h2"><?php echo $title;?></h1>
        </div>
        <div class="date"><?php echo $sub;?></div>
        <div class="date"><?php echo $date;?></div>
        <div class="post-img"><?php echo '<img width="1345" height="895" src="'.$src.'" class="attachment- size-" alt=""/>';?></div>
        <div class="post-content">
          <p><?php echo $content;?></p>
        </div>
      </div>
      <div class="post-bottom">
        <a href="#" class="zilla-likes" id="zilla-likes-605" title="Like this" data-postfix=" like"><i class="multimedia-icon-heart"></i> <span>0 likes</span></a>
      </div>

      <div id="comments" class="comments-area">
        <div id="commentform-area">
          <div id="respond" class="comment-respond">
            <div class="heading-decor">
              <h3><span>Leave a comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></span></h3>
            </div>
            <form action="comments-post.php" method="post" id="commentform" class="comment-form row">
              <div class="col-xs-12 col-sm-6"><?php //if(!$_SESSION){}else echo $_SESSION['profile'];?></div>

              <div class="col-xs-12"><textarea id="comment" class="style1" name="comment" placeholder="Enter your comment..." rows="5" maxlength="65525" required="required"></textarea></div>
              <div class="col-xs-12"><input name="submit" type="submit" id="submit" class="button-style1" value="Send" /> <input type='hidden' name='comment_post_ID' value='605' id='comment_post_ID' />
                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
              </div>
            </form>
          </div>
          <!-- #respond -->
        </div>
      </div>
      <!-- #comments -->
    </div>
  </div>
</main>


<?php
    include '../includes/socials_.php';
    include '../includes/footer-main.php';
?>