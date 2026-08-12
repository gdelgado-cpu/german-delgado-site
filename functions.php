<?php
/**
 * Glitche Child Theme - Germán Delgado
 * Funciones personalizadas y contenido inicial.
 */

// Cargar estilos del tema padre, dark.css y del child theme.
add_action( 'wp_enqueue_scripts', 'german_glitche_child_scripts', 1 );
function german_glitche_child_scripts() {
    wp_enqueue_style( 'glitche-parent-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'glitche' )->get( 'Version' ) );
    wp_enqueue_style( 'glitche-dark-style', get_template_directory_uri() . '/assets/css/dark.css', array( 'glitche-parent-style' ), wp_get_theme( 'glitche' )->get( 'Version' ) );
    wp_enqueue_style( 'glitche-child-style', get_stylesheet_uri(), array( 'glitche-dark-style' ), wp_get_theme()->get( 'Version' ) );
}

// Favicon personalizado del sitio.
add_action( 'wp_head', 'german_glitche_favicon', 1 );
function german_glitche_favicon() {
    echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( get_stylesheet_directory_uri() . '/assets/favicon.svg' ) . '" />' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url( get_stylesheet_directory_uri() . '/assets/favicon.svg' ) . '" />' . "\n";
}

// CSS inline para corregir colores oscuros, botones, formulario y hero.
add_action( 'wp_head', 'german_glitche_force_dark_css', 100 );
function german_glitche_force_dark_css() {
    ?>
    <style>
        body, .container .line { background: #26262d !important; }
        .container, .section:before, .footer, .header, .preloader { background: #31313a !important; }
        body, p, .single-post-text, td, blockquote, .copy, .resume-items .resume-item .single-post-text { color: #a2a2a6 !important; }
        h1, h2, h3, h4, h5, h6, .section.started .started-content .h-title, .section .content .title .title_inner, .resume-items .resume-item .name, .service-items .service-item .name, .info-list ul li strong { color: #f0f0f0 !important; }
        a, .section.works .filters label { color: #FDBD06 !important; }
        a:hover { color: #FDBD06 !important; }
        .section .content .title .title_inner { box-shadow: inset 0 -6px 0px #666666 !important; }
        .header .head-top .top-menu ul li a { color: #f0f0f0 !important; }
        .header .head-top .top-menu ul li.current-menu-item > a, .header .head-top .top-menu ul li a:hover { color: #FDBD06 !important; }
        .footer .soc a .ion { color: #f0f0f0 !important; }
        .footer .soc a:hover .ion { color: #FDBD06 !important; }
        .skills ul li .progress { background: #666666 !important; }
        .skills ul li .progress .percentage { background: #FDBD06 !important; }
        .resume-items .resume-item .date { color: #FDBD06 !important; }
        .box-items .box-item .desc .name { color: #f0f0f0 !important; }
        .box-items .box-item .category { color: #FDBD06 !important; }

        /* Botones con texto visible */
        a.btn.fill, .btn.fill, button.btn.fill, input.btn.fill {
            color: #ffffff !important;
            border-color: #FDBD06 !important;
        }
        a.btn.fill:hover, .btn.fill:hover, button.btn.fill:hover, input.btn.fill:hover {
            color: #FDBD06 !important;
            background: transparent !important;
        }
        a.btn, .btn, button.btn, input.btn {
            color: #ffffff !important;
            border-color: #FDBD06 !important;
        }
        a.btn:hover, .btn:hover, button.btn:hover, input.btn:hover {
            color: #FDBD06 !important;
        }

        /* Formulario oscuro legible */
        input, textarea, select, .wpcf7-form-control {
            background: transparent !important;
            color: #f0f0f0 !important;
            border-color: #666666 !important;
        }
        input::placeholder, textarea::placeholder { color: #a2a2a6 !important; }
        input:focus, textarea:focus { border-color: #FDBD06 !important; }
        .wpcf7-submit, input[type="submit"] {
            background: #FDBD06 !important;
            color: #ffffff !important;
            border-color: #FDBD06 !important;
        }
        .wpcf7-submit:hover, input[type="submit"]:hover {
            background: transparent !important;
            color: #FDBD06 !important;
        }

        /* Hero subtitle visible */
        .started-content .h-subtitles, .started-content .h-subtitle, .started-content .typed-subtitle {
            color: #f0f0f0 !important;
        }
        .section.started .mouse_btn { color: #FDBD06 !important; }

        /* Forzar color de marca en elementos restantes del tema padre */
        :root { --main-color: #FDBD06 !important; --theme-color: #FDBD06 !important; --accent-color: #FDBD06 !important; }
        .button, a.button, .glitche-btn, .glitche-button, .btn-primary, .btn-secondary,
        input[type="button"], input[type="reset"], .wpcf7-form .wpcf7-submit,
        .hero .btn, .hero a, .started-content .btn, .about-buttons a, .contact-buttons a,
        .section .button, .section a.button, .content a.button {
            background-color: #FDBD06 !important;
            border-color: #FDBD06 !important;
            color: #31313A !important;
        }
        .button:hover, a.button:hover, .glitche-btn:hover, .btn-primary:hover,
        input[type="button"]:hover, .wpcf7-form .wpcf7-submit:hover,
        .about-buttons a:hover, .contact-buttons a:hover, .hero .btn:hover {
            background-color: transparent !important;
            color: #FDBD06 !important;
            border-color: #FDBD06 !important;
        }
        i, .ion, .icon, .lnr, .service-icon, .skill-icon, .fas, .fab, .fa,
        .ion-social-linkedin, .ion-social-instagram, .ion-social-github, .ion-social-whatsapp,
        .footer .soc a .ion, .footer .soc a:hover .ion,
        .section.started .started-content .h-text-button, .h-text-button,
        .section .content .title .title_inner::after, .title_inner::after,
        .section-title::after, .heading::after, .line, .divider, .separator,
        .resume-items .resume-item .name::after, .service-items .service-item .name::after,
        .progress .percentage span, .skills .progress .percentage,
        .box-items .box-item .image .category, .box-item .category,
        .section.works .filters label:hover, .filters button:hover, .filters label.active,
        .portfolio-filter button.active, .section.started .mouse_btn,
        .preloader .spinner, .preloader .line, .preloader .spinner-line {
            color: #FDBD06 !important;
            background-color: #FDBD06 !important;
            border-color: #FDBD06 !important;
            fill: #FDBD06 !important;
            stroke: #FDBD06 !important;
            box-shadow: inset 0 -6px 0px #FDBD06 !important;
        }
        .section .content .title .title_inner {
            box-shadow: inset 0 -6px 0px #FDBD06 !important;
        }
    </style>
    <?php
}

// Contenido inicial al activar el tema (solo una vez).
add_action( 'after_switch_theme', 'german_glitche_setup_initial_content' );
function german_glitche_setup_initial_content() {
    if ( get_option( 'german_glitche_content_installed_v2' ) ) {
        return;
    }

    // Actualizar título y descripción del sitio.
    update_option( 'blogname', 'Germán Delgado' );
    update_option( 'blogdescription', 'Ingeniero de Sistemas · Automatización IA · UI/UX · Video IA' );
    update_option( 'show_on_front', 'page' );

    // Configurar ACF theme options para logo, redes, copyright y modo oscuro.
    if ( function_exists( 'update_field' ) ) {
        update_field( 'header_logo_type', 1, 'options' );
        update_field( 'header_logo_text', 'G.', 'options' );
        update_field( 'preloader_text', 'Cargando...', 'options' );
        update_field( 'copyright', '© ' . date( 'Y' ) . ' Germán Delgado. Todos los derechos reservados.', 'options' );
        update_field( 'theme_ui', 1, 'options' );

        $social_links = array(
            array( 'icon' => 'ion-social-linkedin', 'url' => 'https://www.linkedin.com/in/german-andres-delgado-9a0340313/' ),
            array( 'icon' => 'ion-social-instagram', 'url' => 'https://www.instagram.com/german_d_d/' ),
            array( 'icon' => 'ion-social-github', 'url' => 'https://github.com/gdelgado-cpu' ),
            array( 'icon' => 'ion-social-whatsapp', 'url' => 'https://wa.me/573174158919' ),
        );
        update_field( 'social_links', $social_links, 'options' );
    }

    // Crear página de inicio.
    $home_id = wp_insert_post( array(
        'post_title'   => 'Inicio',
        'post_content' => '',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_author'  => 1,
    ) );

    if ( $home_id && ! is_wp_error( $home_id ) ) {
        update_option( 'page_on_front', $home_id );
    }

    german_glitche_create_or_update_menu();

    // Marcar contenido como instalado.
    update_option( 'german_glitche_content_installed_v2', true );
}

// Verificar y recrear menú si no está correcto (corre en cada request admin/front, muy ligero).
add_action( 'after_setup_theme', 'german_glitche_verify_menu' );
function german_glitche_verify_menu() {
    $menu = wp_get_nav_menu_object( 'Menú Principal' );
    $needs_update = false;

    if ( ! $menu ) {
        $needs_update = true;
    } else {
        $items = wp_get_nav_menu_items( $menu->term_id );
        $has_about = false;
        if ( $items ) {
            foreach ( $items as $item ) {
                if ( $item->title === 'Sobre Mí' ) {
                    $has_about = true;
                    break;
                }
            }
        }
        if ( ! $has_about ) {
            $needs_update = true;
        }
    }

    if ( $needs_update ) {
        german_glitche_create_or_update_menu();
    }
}

function german_glitche_create_or_update_menu() {
    $menu_name = 'Menú Principal';
    $menu = wp_get_nav_menu_object( $menu_name );
    if ( $menu ) {
        $items = wp_get_nav_menu_items( $menu->term_id );
        if ( $items ) {
            foreach ( $items as $item ) {
                wp_delete_post( $item->ID, true );
            }
        }
        wp_delete_nav_menu( $menu->term_id );
    }

    $menu_id = wp_create_nav_menu( $menu_name );
    if ( is_wp_error( $menu_id ) ) {
        return;
    }

    $menu_items = array(
        array(
            'menu-item-title'  => 'Inicio',
            'menu-item-url'    => '#inicio',
            'menu-item-type'   => 'custom',
            'menu-item-status' => 'publish',
        ),
        array(
            'menu-item-title'  => 'Sobre Mí',
            'menu-item-url'    => '#about',
            'menu-item-type'   => 'custom',
            'menu-item-status' => 'publish',
        ),
        array(
            'menu-item-title'  => 'Experiencia',
            'menu-item-url'    => '#experience',
            'menu-item-type'   => 'custom',
            'menu-item-status' => 'publish',
        ),
        array(
            'menu-item-title'  => 'Portafolio',
            'menu-item-url'    => '#portfolio',
            'menu-item-type'   => 'custom',
            'menu-item-status' => 'publish',
        ),
        array(
            'menu-item-title'  => 'Contacto',
            'menu-item-url'    => '#contact',
            'menu-item-type'   => 'custom',
            'menu-item-status' => 'publish',
        ),
        array(
            'menu-item-title'  => 'CV',
            'menu-item-url'    => get_stylesheet_directory_uri() . '/assets/cv_german_delgado.pdf',
            'menu-item-type'   => 'custom',
            'menu-item-status' => 'publish',
        ),
    );

    foreach ( $menu_items as $item ) {
        wp_update_nav_menu_item( $menu_id, 0, $item );
    }

    $locations = get_theme_mod( 'nav_menu_locations' );
    $locations['primary'] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );
}
