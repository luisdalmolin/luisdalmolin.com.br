<?php
/**
 * Header do template
 *
 * @author Luís Dalmolin <luis.nh@gmail.com>
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title><?php wp_title() ?></title>

    <?php
    /* wp_head */
    wp_head();
    ?>
    <meta name="author" href="humans.txt" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <link rel="stylesheet" href="<?=TEMPLATE?>css/pure.css" />
    <link rel="stylesheet" href="<?=TEMPLATE?>style.css" />
    <link rel="publisher" href="<?=SOCIAL_GOOGLEPLUS?>" />

    <link rel="sitemap" type="application/xml" title="Sitemap" href="<?=URL?>sitemap.xml" />
</head>

<body>
    <div class="pure-g-r" id="layout">
        <div class="sidebar pure-u">
            <header class="header">
                <hgroup>
                    <h1 class="brand-title">Luís Dalmolin</h1>
                    <!--
                    <h2 class="brand-tagline">Creating a blog layout using Pure</h2>
                    -->
                </hgroup>

                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a class="pure-button" href="<?=URL?>">Blog</a>
                        </li>

                        <!--
                        <li class="nav-item">
                            <a class="pure-button" href="#">Projetos</a>
                        </li>
                        -->
                    </ul>
                </nav>
            </header>
        </div>

        <div class="pure-u-1">
            <div class="content">