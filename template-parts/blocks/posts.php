<?php
/*
 * Block Name: Posts Block
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

// $display_order 	 = get_field('display_order');
// $display_order = ! empty( $args['display_order'] ) ? $args['display_order'] : $display_order;

$items = get_field('items');
$title = get_field('title');
$featured_post = get_field('featured_post');
$all_posts = get_field('all_posts');
// $items = ! empty( $args['items'] ) ? $args['items'] : $items;

$block_name = 'posts';

// Create id attribute allowing for custom "anchor" value.
$id = $block_name . '-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className   = array( $block_name );
$className[] = '';

$args = array(
    'post_type' => 'publication',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'post__in' => $items,
    'order'          => 'ASC',
);

$featured_args = array(
    'post_type' => 'publication',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'post__in'
);


$query_posts = new WP_Query($args);
?>

<div class="<?php echo implode( ' ', $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
    <div class="container">
        <div class="posts__top">
            <?php if (!empty($title)) : ?> 
                <h2 class="posts__title"><?php echo $title; ?></h2> 
            <?php endif; ?>
            <?php if ( ! empty( $all_posts ) ) :
                $link_target = $all_posts['target'] ? $all_posts['target'] : '_self'; ?>
                <div class="posts__button"> 
                    <a href="<?php echo $all_posts['url']; ?>" target="<?php echo $link_target; ?>">
                        <?php echo $all_posts['title']; ?>
                    </a>
                </div>  
            <?php endif; ?> 
        </div>
        
        <div class="posts__items desktop swiper"> 
            <div class="swiper-wrapper">
                <?php
                $featured_query = new WP_Query($featured_args); ?>
                <?php if ($featured_query->have_posts()) : ?>
                    <?php while ($featured_query->have_posts()) : $featured_query->the_post();
                        $time = get_field('time', get_the_ID() );
                        ?>
                        <div class="posts__item-one swiper-slide"> 
                            <div class="posts__item-one-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                <div class="back"></div> 
                            </div>                        
                            <div class="posts__item-content">
                                <div>
                                    <?php if ( ! empty( get_the_category() ) ) : ?>
                                        <?php foreach (( get_the_category() ) as $category ): ?>
                                            <a href="<?php echo get_term_link( $category ); ?>" class="category"><?php echo $category->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>    
                                <div>
                                    <h3 class="date"><?php echo $time; ?></h3>
                                    <a href="<?php echo get_the_permalink(); ?>"><h3 class="posts__item-one-title"><?php echo get_the_title(); ?></h3></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="posts__item-several">
                    <?php while ($query_posts->have_posts()) : $query_posts->the_post();
                        ?>
                        <div class="posts__item-several-item swiper-slide">
                            <div class="">
                                <img class=""
                                        src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                            </div>
                            <div class="posts__item-several-item-content">
                                <div class="posts__item-several-item-top">
                                    <?php if (!empty(get_the_category())) : ?>
                                        <?php foreach ((get_the_category()) as $category): ?> 
                                            <a href="<?php echo get_term_link($category); ?>" class="category"><?php echo $category->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?> 
                                    <div class="date"><?php echo get_the_date('j.n.Y'); ?></div> 
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>"><h4 class="posts__item-several-title"><?php echo get_the_title(); ?></h4></a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?> 
                </div>
            </div>
            
        </div>

        <div class="posts__items mobile swiper"> 
            <div class="swiper-wrapper">
                <?php
                $featured_query = new WP_Query($featured_args); ?>
                <?php if ($featured_query->have_posts()) : ?>
                    <?php while ($featured_query->have_posts()) : $featured_query->the_post();
                        $time = get_field('time', get_the_ID() );
                        ?>
                        <div class="posts__item-one swiper-slide"> 
                            <div class="posts__item-one-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                <div class="back"></div> 
                            </div>                        
                            <div class="posts__item-content">
                                <div>
                                    <?php if ( ! empty( get_the_category() ) ) : ?>
                                        <?php foreach (( get_the_category() ) as $category ): ?>
                                            <a href="<?php echo get_term_link( $category ); ?>" class="category"><?php echo $category->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>    
                                <div>
                                    <h3 class="date"><?php echo $time; ?></h3>
                                    <a href="<?php echo get_the_permalink(); ?>"><h3 class="posts__item-one-title"><?php echo get_the_title(); ?></h3></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <!-- <div class="posts__item-several"> -->
                    <?php while ($query_posts->have_posts()) : $query_posts->the_post();
                        ?>
                        <div class="posts__item-several-item swiper-slide">
                            <div class="">
                                <img class=""
                                        src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                            </div>
                            <div class="posts__item-several-item-content">
                                <div class="posts__item-several-item-top">
                                    <?php if (!empty(get_the_category())) : ?>
                                        <?php foreach ((get_the_category()) as $category): ?> 
                                            <a href="<?php echo get_term_link($category); ?>" class="category"><?php echo $category->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?> 
                                    <div class="date"><?php echo get_the_date('j.n.Y'); ?></div> 
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>"><h4 class="posts__item-several-title"><?php echo get_the_title(); ?></h4></a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?> 
                <!-- </div> -->
            </div>
            
            
        </div>
        <div class="swiper-buttons">
                <div class="swiper-button-prev">
                   <img src="<?php echo V_TEMP_URL . '/assets/img/prev.svg'; ?>" alt=""/>  
                </div>
                <div class="swiper-button-next">
                   <img src="<?php echo V_TEMP_URL . '/assets/img/next.svg'; ?>" alt=""/>
                </div>
            </div> 
    </div>
</div>