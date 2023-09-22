<?php
$post_id = get_the_ID();
$job_title = get_field('job_title', $post_id);
$image = get_field('image', $post_id);
$name = get_field('name', $post_id);
$linkedin = get_field('linkedin', $post_id);
?>
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="lex-team-members__card">
        <div class="lex-team-members__card-content">
            <?php if ( ! empty( $linkedin ) ) : ?>
                <a href="<?php echo $linkedin['url']; ?>"><img src="<?php echo V_TEMP_URL . '/assets/img/linkedin-blue.svg'; ?>" alt="" /></a>
            <?php endif; ?>
            <?php if ( ! empty( $name ) ) : ?>
                <p class="lex-team-members__card-name mb-10">
                    <?php echo $name; ?>
                </p>
            <?php endif ?>
            <?php if ( ! empty( $job_title ) ) : ?>
                <p class="lex-team-members__card-position">
                    <?php echo $job_title; ?>
                </p>
            <?php endif ?>
        </div>
        <?php if (!empty($image)): ?>
            <div class="lex-team-members__card-image">
                <div class="lex-img-w-border lex-img-w-border--small">
                    <div class="lex-img-w-border__image-border"></div>
                    <div class="lex-img-w-border__image-wrapper">
                        <img class="lex-img-w-border__photo" src="<?php echo esc_url($image['url']); ?>" alt=""/>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
</div>