<?php
$post_id = get_the_ID();
// $linkedin = get_field('linkedin', $post_id);
?>



        

            
<div class="road-to-success__item">
    <div>
        <span class="road-to-success__item-date"> 
            <?php echo get_the_date('M') ?>
        </span>     
        <a class="road-to-success__item-link" href="<?php the_permalink() ?>">
            <?php the_title() ?>
        </a>
    </div>
</div>