<?php
/*
 * Block Name: Hero Block
 * Slug:
 * Description:
 * Keywords:
 * Dependency:
 * Align: false
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$background = get_field('background');
$title = get_field('title');
$subtitle = get_field('subtitle');

$block_name = 'hero';

// Create id attribute allowing for custom "anchor" value.
$id = ! empty( $block['id'] ) ? $block_name . '-' . $block['id'] : '';
if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className   = array( $block_name ); 
$className[] = ''; 
?>

<div class="<?php echo implode( ' ', $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
    <div class="container">
        <div class="hero__wrap">
            <div class="hero__text">
                <?php if (!empty($title)) : ?>
                    <h1><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php if (!empty($subtitle)) : ?>
                    <p class="hero__subtitle"><?php echo $subtitle; ?></p>
                <?php endif; ?>

            </div>
            <div></div>
        </div>
    </div>
    <?php if (!empty($background)): ?>
        <img class="hero__background" src="<?php echo esc_url($background['url']); ?>" alt="image">  
    <?php endif ?>
</div>
