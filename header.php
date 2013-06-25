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
    
    <link href='http://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?=TEMPLATE?>style.css?v=101" type="text/css" /> 
    <link rel="stylesheet" href="<?=TEMPLATE?>css/style-mobile.css" type="text/css" media="screen and (max-width:640px)" /> 
    <link rel="stylesheet" href="<?=TEMPLATE?>css/style-regular.css" type="text/css" media="screen and (min-width:641px)" /> 
    <link rel="stylesheet" href="https://gist.github.com/stylesheets/gist/embed.css" type="text/css" /> 
    <link rel="publisher" href="<?=SOCIAL_GOOGLEPLUS?>" /> 

    <link rel="sitemap" type="application/xml" title="Sitemap" href="<?=URL?>sitemap.xml" />

    <script src="<?=TEMPLATE?>js/libs/modernizr.js"></script>
</head>

<body>
    <div id="container">
        <header id="header">
            <div id="header-content">
                <div class="float-left id-site">
                    <img src="<?=TEMPLATE?>img/luisdalmolin-puc.jpg" alt="Luís Dalmolin" class="header-content-img" />

                    <<?=is_home() ? 'h1' : 'div'?> class="header-title">
                        <a href="<?=URL?>"><?=bloginfo('title')?></a> 
                    </<?=is_home() ? 'h1' : 'div'?>>
                </div><!-- .float-left --> 
                
                <div class="icones-sociais">
                    <a class="icone-social icone-social-github" href="<?=SOCIAL_GITHUB?>">Github</a>
                    <a class="icone-social icone-social-googleplus" href="<?=SOCIAL_GOOGLEPLUS?>">Google plus</a>
                    <a class="icone-social icone-social-twitter" href="<?=SOCIAL_TWITTER?>">Twitter</a>
                    <a class="icone-social icone-social-linkedin" href="<?=SOCIAL_LINKEDIN?>">LinkedIn</a>
                    <a class="icone-social icone-social-rss" href="<?=SOCIAL_RSS?>">RSS</a>
                </div><!-- .icones-sociais --> 
                
                <div class="clear"></div>
            </div><!-- #header-content --> 
        </header>

        <div id="main" role="main">
            <section class="content" id="content">