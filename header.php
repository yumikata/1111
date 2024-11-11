<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div id="header-logo">
            <h1>My profile</h1>
            <?php $args =array(
                    'theme_location' => 'header_nav',
                    'container' => 'nav',
                );
                wp_nav_menu($args);
                ?>
        </div>
    </header>