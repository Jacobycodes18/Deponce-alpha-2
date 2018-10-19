<?php
    include '../includes/header.php';

    include_once '../includes/dbh.inc.php';
    
    $sql = "SELECT * FROM posts";

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)) {
//            echo 'again';
            $title = $row['post_title'];
            $sub = $row['post_subtitle'];
            $date = $row['post_date'];
            $content = $row['post_content'];
            $id = $row['post_id'];
            $img = $row['post_img'];
            
            $posts .= '<article class="blog-item category-lifestyle with-image col-xs-12">
                        <div class="wrap">
                            <div class="img">
                                <a id="ip" href="news-article.php?post='.$id.'" style="background-image: url('.$img.');"></a>
                            </div>
                            <div class="content">
                                <div class="locked"><i class="fa fa-lock"></i></div>
                                <h5><a href="news-article.php?post='.$id.'">'.$title.'</a></h5>
                                <div class="date">'.$sub.'</div>
                                <div class="date">'.$date.'</div>
                                <p>'.$content.'</p>
                            </div>
                            <div class="clear"></div>
                            <div class="bottom like-on comment-on">
                                <div class="col"><a href="#" class="zilla-likes" id="zilla-likes-603" title="Like this" data-postfix=" like"><i class="multimedia-icon-heart"></i> <span>0 likes</span></a></div>
                                <div class="col"><i class="multimedia-icon-speech-bubble-1"></i> <a href="../lifestyle/wishing-well/index.html#comments">1 Comment</a></div>
                            </div>
                        </div>
                    </article>';
        }
    }
?>

    <main class="main-row">
        <div class="container">
            <div class="header-space"></div>
            <div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="heading-decor-s tac">
                    <h2 style="text-align: center" class="h vc_custom_heading"><div>News & Updates</div></h2></div>
                <div class="blog-items row blog-type-horizontal blog-59bfa5cd550aa ">
                   <?php print $posts?>
                </div>
                <div class="load-button tac"><a href="#" data-wrap=".blog-59bfa5cd550aa" data-max="10" data-start-page="1" data-next-link="http://deponce.jacobyclarke.io/testd/blog-horizontal/page/2/" class="button-style1"><span>Load more</span></a></div>
            </div>
        </div>
    </div>
</div>
        </div>
    </main>
   
<?php
    include '../includes/socials_.php';
    include '../includes/footer-main.php';
?>