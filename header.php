<?php
/**
 * Header template.
 *
 * @package lex
 * @since 1.0.0
 *
 */
// $contact_button = get_field('contact_button', 'option');
// if( $contact_button ):
//     $contact_button_url = $contact_button['url'];
//     $contact_button_title = $contact_button['title'];
// endif;

// $meeting_button = get_field('meeting_button', 'option');
// if( $meeting_button ):
//     $meeting_button_url = $meeting_button['url'];
//     $meeting_button_title = $meeting_button['title'];
// endif;



$switch_language = get_field('switch_language', 'option');  
$search_button = get_field('search_button', 'option');  
$header_socials = get_field('header_socials', 'option');   
$switch_language_mobile = get_field('switch_language_mobile', 'option');  
$search_button_mobile = get_field('search_button_mobile', 'option');  
$header_socials_mobile = get_field('header_socials_mobile', 'option');   
// ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> -->
	<?php wp_head(); ?>
</head>

<!-- <?php
// acf/main-page-header-block
// $first_block_name = '';
// $content = get_the_content();
// if (has_blocks($content)) {
//     $blocks = parse_blocks($content);
//     foreach ($blocks as $block) {
//         if (!empty($block['blockName'])) {
//             if (!empty($block['blockName'])) $first_block_name = $block['blockName'];
//             break;
//         }
//     }
// }

// $mainWrapperClass = ['main-wrapper'];
// if($first_block_name !== 'acf/main-page-header-block') $mainWrapperClass[] = 'main-wrapper_padding-top';



// $header_logo = get_field('header_logo', 'option');   
// ?> -->





<body <?php body_class(); ?>>

    <header class="header">
        
        <div class="container">
            <div class="header__logo-btn-mobile"> 
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo.svg'; ?>" alt="logo">
                </a> 
            </div>
            <div class="header__wrap">
                <div class="header__logo-btn"> 
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo.svg'; ?>" alt="logo">
                    </a> 
                </div>
                <div class="header__container">
                <div class="header__links-mobile">
                        <?php if (!empty($search_button_mobile)) : ?>
                            <a class="header__link" target="_blank" href="<?php echo esc_url($search_button_mobile); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/search_blue.svg'; ?>" alt="">
                            </a>
                        <?php endif; ?> 
                        <?php if (!empty($header_socials_mobile)) : ?>    
                            <?php foreach ($header_socials_mobile as $row): ?>
                                <?php $icon = $row['icon']; ?>
                                <?php $link = $row['link']; ?>
                                <?php if ($icon && $link): ?>
                                    <a class="header__link" target="_blank" href="<?php echo esc_url($link); ?>">
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                    </a>                                  
                                <?php endif; ?>
                            <?php endforeach; ?>   
                        <?php endif; ?> 
                        <?php if (!empty($switch_language_mobile)) : ?>
                            <a class="header__link" target="_blank" href="<?php echo esc_url($switch_language_mobile); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/en_blue.svg'; ?>" alt="">
                            </a>
                        <?php endif; ?> 
                    </div> 
                    <?php wp_nav_menu(
                        array(
                            'container' => '',
                            'menu_class' => 'header__menu',
                            'menu' => 'header-menu',
                            'depth' => 1,
                        )
                    ); ?>
                    <div class="header__links">
                        <?php if (!empty($search_button)) : ?>
                            <a class="header__link" target="_blank" href="<?php echo esc_url($search_button); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/search.svg'; ?>" alt="">
                            </a>
                        <?php endif; ?> 
                        <?php if (!empty($header_socials)) : ?>    
                            <?php foreach ($header_socials as $row): ?>
                                <?php $icon = $row['icon']; ?>
                                <?php $link = $row['link']; ?>
                                <?php if ($icon && $link): ?>
                                    <a class="header__link" target="_blank" href="<?php echo esc_url($link); ?>">
                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="">
                                    </a>                                  
                                <?php endif; ?>
                            <?php endforeach; ?>   
                        <?php endif; ?> 
                        <?php if (!empty($switch_language)) : ?>
                            <a class="header__link" target="_blank" href="<?php echo esc_url($switch_language); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/en.svg'; ?>" alt="">
                            </a>
                        <?php endif; ?> 
                    </div> 
                    <button class="header__burger"> 
                        <span></span> 
                        <span></span> 
                        <span></span> 
                    </button>              
                </div>
            </div>
        </div> 
        </header>
<!-- <?php echo esc_attr(trim(implode(' ', $mainWrapperClass))) ?> -->
