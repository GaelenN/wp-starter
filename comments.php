<section id="comments">
    <div class="container">
    <?php
    echo comment_form();
    $commments = get_comments();
    foreach( $comments as $comment ):
    ?>
    <div class="comment">
        <h4><?php echo $comment->comment_author ?> - <a href="mailto:<?php echo $comment->comment_author_email ?>"><?php echo $comment->comment_author_email ?></a></h4>
        <?php echo $comment->comment_content ?>
    </div>
<?php endforeach; ?>
</div>
</section>
