<?php
$post_id = get_the_ID();
$job_title = get_field('job_title', $post_id);
$image = get_field('image', $post_id);
$name = get_field('name', $post_id);
$linkedin = get_field('linkedin', $post_id);
?>

<div class="lex-leadership-team__card" data-aos="fade-up" data-aos-duration="1000">
    <?php if (!empty($image)): ?>
        <div class="lex-leadership-team__card-image">
            <div class="lex-img-w-border lex-img-w-border--small">
                <div class="lex-img-w-border__image-border">
                    <img src="<?php echo V_TEMP_URL . '/assets/img/dashed-circle.svg'; ?>" alt="" />
                </div>
                <div class="lex-img-w-border__image-wrapper">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="" />
                </div>
            </div>
        </div>
    <?php endif ?>
    <div class="lex-leadership-team__card-content">
        <?php if ( ! empty( $name ) ) : ?>
            <p class="lex-leadership-team__card-name mb-20">
               <?php echo $name; ?>
            </p>
        <?php endif ?>
        <?php if ( ! empty( $job_title ) ) : ?>
            <p class="lex-leadership-team__card-position">
                <?php echo $job_title; ?>
            </p>
        <?php endif ?>
        <?php if ( ! empty( $linkedin ) ) : ?>
            <a class="lex-leadership-team__card-linkedin" href="<?php echo $linkedin['url']; ?>"><img src="<?php echo V_TEMP_URL . '/assets/img/linkedin-blue.svg'; ?>" alt=""/></a>
        <?php endif; ?>
    </div>
</div>
