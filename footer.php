<?php 
/**
 * Footer do template
 * 
 * @author Luís Dalmolin <luis.nh@gmail.com> 
 */ 
?>
            </section>

            <aside class="sidebar">
                <?php 
                /* sidebar */ 
                get_sidebar();
                ?>
            </aside><!-- .sidebar --> 
        </div><!-- #main --> 
    </div><!-- #container -->

<div id="fb-root"></div>
    
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script src="<?=TEMPLATE?>_js/libs/jquery.js"><\/script>')</script>

<!-- scripts concatenated and minified via ant build script-->
<script defer src="<?=TEMPLATE?>js/plugins.js?v=1"></script>
<script defer src="<?=TEMPLATE?>js/script.js?v=1"></script>
<!-- end scripts-->
	
<script type="text/javascript">
window._gaq = [['_setAccount','UA-10402950-10'],['_trackPageview'],['_trackPageLoadTime']];
Modernizr.load([
    ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js', 
    'https://apis.google.com/js/plusone.js', 
    '//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=326686580683711', 
    '//platform.twitter.com/widgets.js'
]);
</script>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->  

<?php 
/* wp_foot */ 
wp_footer();
?>
</body>
</html>
