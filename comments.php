<div class="my-4">
  <div class="p-4 bg-gray-200 border">
    <?php wp_list_comments(); ?>
    <hr>
    <hr>
    <hr>
    <?php paginate_comments_links(); ?>
    <?php previous_comments_link(); ?>
    <div class="bg-light p-3">
      <?php
      comment_form(
        array(
          'class_form'         => 'border',
          'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
          'title_reply_after'  => '</h3>',
        )
      );
       ?>
    </div>

  </div>
</div>
