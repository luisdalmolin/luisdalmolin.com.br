<?php
/**
 * Pagina de inverter URL
 *
 * @author Luis Dalmolin
 * 09/2011
 */
 
 
 
 
/**
 * Fazendo a inversão da URL
 */
include_once('_inc/link.class.php');

$acao = isset($_POST['acao']) ? $_POST['acao'] : '';
if( $acao == 'inverter' ) {	
    if( $_POST['url'] != '' ) {
        $urlValida = false;
        $link      = new Link( $_POST['url'] );
        if( $link->inverter() ) {
            $urlValida = true;
            $link->inserir();
        }
    }
}


/* header */ 
get_header();
?>
<div class="post type-post hentry" id="inverter-url">    
    <div class="post-title"> 
        <div class="float-left">
            <h1 class="titulo">
                <a href="http://luisdalmolin.com.br/inverter-url/" rel="bookmark" title="<?=the_title()?>"><?=the_title()?></a>
            </h1>
        </div><!-- .float-left -->
        
        <div class="float-right">
            <g:plusone size="medium"></g:plusone>
        </div><!-- .float-right -->
        
        <div class="clear"></div>
    </div><!-- .post-title -->
      
    <?php
    if( isset($urlValida) ) :
        if( $urlValida ) :
            ?>
            <div class="float-left" style="width:300px">
                <h3 class="titulo" style="font-size:14px;">
                    URL invertida: <a href="<?=$link->linkInvertido?>" target="_blank"><strong><?=$link->linkInvertido?></strong></a>
                </h3>

                <p style="font-size:13px;">Funcionou certinho? Da um +1 ae então!</p>
                <br /><br />

                <div class="compartilhar">
                    <div class="item-compartilhe">
                        <a href="http://twitter.com/share" class="twitter-share-button" data-via="luisdalmolin" data-url="<?php the_permalink(); ?>" data-count="horizontal">Tweet</a>
                    </div><!-- .item-compartilhe -->

                    <div class="item-compartilhe">
                        <g:plusone size="medium"></g:plusone>
                    </div><!-- .item-compartilhe -->

                    <div class="clear"></div>

                    <br />
                    <iframe src="http://www.facebook.com/plugins/like.php?app_id=175726325786274&amp;href=<?php the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=trebuchet+ms&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>												
                </div><!-- .compartilhe -->
            </div><!-- .float-left -->

            <div class="float-right" style="width:300px">
                <script type="text/javascript"><!--
                google_ad_client = "ca-pub-5890576079495680";
                /* Blog Dalmolin */
                google_ad_slot = "0929216115";
                google_ad_width = 300;
                google_ad_height = 250;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </div><!-- .float-right -->

            <div class="clear"></div>

            <br /><hr /><br />
            <?php
        else : 
            ?>
            <p style="font-size:14px;">Resultado: <strong><?=$link->linkInvertido?></strong> 
            <small style="font-size:10px;position:relative;left:15px;">(não parece ser um URL válida)</small></p><br />

            <script type="text/javascript"><!--
            google_ad_client = "ca-pub-5890576079495680";
            /* Blog Dalmolin */
            google_ad_slot = "0929216115";
            google_ad_width = 300;
            google_ad_height = 250;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>

            <br /><br />
            <p>Não funcionou? Deixe a URL nos comentários para buscarmos novas formas de descriptografar estas URL's.</p>

            <hr />
            <br /><br />
            <?php
        endif;
    endif;
    ?>

    <div class="float-left" style="width:300px">
        <form action="<?php the_permalink(); ?>" method="post" id="form-inverter-url">
            <input type="hidden" name="acao" value="inverter" />

            <label>
                Digite a <strong>URL</strong> para <strong>inverter</strong>: <br />
                <input type="text" name="url" id="url" required="true" autofocus />
            </label>

            <input type="submit" value="<?=the_title()?>" class="submit" onclick="_gaq.push(['_trackEvent', 'Inverter', 'Inverter URL'])" />

            <br /><br /><br /><br />

            <p style="line-height:20px">Não sabe como <strong>inverter</strong> a sua <strong>URL</strong>? Olhe a explicação abaixo...</p>

            <br /><br />
        </form>
    </div><!-- .float-left -->

    <div class="float-right" style="width:300px">
        <?php 
        if( !isset($urlValida) ) :
            ?>
            <script type="text/javascript"><!--
            google_ad_client = "ca-pub-5890576079495680";
            /* Blog Dalmolin */
            google_ad_slot = "0929216115";
            google_ad_width = 300;
            google_ad_height = 250;
            //-->
            </script>
            <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
            </script>
            <?php
        endif;
        ?>
    </div><!-- .flaot-right -->

    <div class="clear"></div>
    <br /><br />
    <?php 
    /**
     * Conteudo 
     */ 
    // the_content();
    ?>
    
    <h2 class="titulo">Links e URL que você pode inverter ou descriptografar</h2>
		
    <p>A ferramenta de <strong>Inverter URL</strong> funciona para os seguintes tipos de links:</p>
    <ul style="line-height:20px">
        <li style="padding:0 0 5px 25px;font-size:13px">URL invertida: <strong>/lru-retrevni/rb.moc.nilomladsiul//:ptth</strong></li>
        <li style="padding:0 0 5px 25px;font-size:12px">
            e URL criptografada:<br />
            <strong>aHR0cDovL2x1aXNkYWxtb2xpbi5jb20uYnIvaW52ZXJ0ZXItdXJsLw==</strong> (base 64) e 
            <strong style="font-size:10px">687474703a2f2f6c75697364616c6d6f6c696e2e636f6d2e62722f696e7665727465722d75726c2f</strong> (Hexadecimal)
        </li>

        <li style="padding:0 0 5px 25px;font-size:13px">
            Nota: Para funcionar, você deve pegar apenas a parte final da URL que fica no protetor de links. Por exemplo: http://luisdalmolin.com.br/links.php?link=<strong>aHR0cDovL2x1aXNkYWxtb2xpbi5jb20uYnIvaW52ZXJ0ZXItdXJsLw==</strong>
        </li>
    </ul>

    <br />
    <p>Depois, é só colar a URL logo acima que o nosso sistema se vira para inverter!</p>
    <br />
    
    <div class="ultimos-invertidos">
        <h2 class="titulo">Últimas URL's invertidas e descriptografadas</h2>

        <div class="float-left" style="width:50%">
            <ul>
                <?php 
                /**
                 * Listando as ultimas URLs invertidas
                 */ 
                $resUrl = mysql_query("SELECT link FROM dal_link ORDER BY id DESC LIMIT 4");
                while( $linha = mysql_fetch_array( $resUrl ) ) {
                    echo '<li><a target="_blank" href="'.$linha['link'].'" rel="nofollow external">'.$linha['link'].'</a></li>';
                }
                ?>
            </ul>
        </div><!-- .float-left -->

        <div class="float-right" style="width:30%">
            <h3>
                <img src="<?=TEMPLATE?>img/inverter-link-url.jpg" alt="Inverter URL" width="200" />
            </h3>
        </div><!-- .float-right -->

        <div class="clear"></div>
        
        <p>O site tem um média de 200 URL's que são invertidas todo o dia. E só queremos que esse número aumente, e por isso precisamos da sua ajuda pra divulgar!</p>
    </div><!-- .ultimos invertidos -->


    <br />
    <div class="iframe-inversor">
        <h2 class="titulo">Quer colocar a ferramente de Inverter URL no seu site?</h2>
        <p>É só copiar e colar o código abaixo no seu site! Pronto, a ferramenta para inverter url já vai estar lá. 
        Se quiser, ainda pode personalizar com o CSS. Só pedimos que mantenha o link para ajudar o nosso site.</p>

        <textarea cols="70" rows="10" onclick="this.select()">
<form action="<?php the_permalink() ?>" method="post">
	<input type="hidden" name="acao" value="inverter" />
	<label>
		Digite a <strong>URL</strong> para <strong>inverter</strong>: <br />
		<input type="text" name="url" id="url" style="font-size:13px;padding:2px;margin:5px 0 0 0;width:300px;" autofocus />
	</label><br />	
	<input type="submit" value="Inverter URL" /><br />
	<a href="http://luisdalmolin.com.br/inverter-url/">Inverter URL</a>
</form>
        </textarea>
    </div><!-- .iframe-inversor -->

    <br />
    <p>E no seu site, a ferramente <strong>Inverter URL</strong> vai aparecer da seguinte forma:</p>
    <form action="<?php the_permalink() ?>" method="post">
        <input type="hidden" name="acao" value="inverter" />

        <label>
            Digite a <strong>URL</strong> para <strong>inverter</strong>: <br />
            <input type="text" name="url" id="url" style="font-size:13px;padding:2px;margin:5px 0 0 0;width:300px;" />
        </label><br />	
        <input type="submit" value="Inverter URL" style="padding:5px;margin-top:3px;"/><br />

        <p style="text-align:right">A ferramenta de <a href="http://luisdalmolin.com.br/inverter-url/">Inverter URL</a> é fornecida gratuitamente.</p>
    </form>

    <br />
    <p>A idéia de criar uma ferramenta para inversão de URL foi do <a href="http://twitter.com/#!/AlanMartini" target="_blank">Alan Martini.</a></p>


    <h3 class="titulo">Porque os protetores de links invertem as URL's?</h3>

    <p>Normalmente, os sites de downloads precisam de alguma forma de lucro para manter o site. E nas páginas onde a URL está invertida, existem muitras propagandoas. É nessas propagandas que os sites tem seu lucro.</p>
    
    <div class="compartilhar">
        <h3 class="titulo">Compartilhe a ferramenta de inverter URL</h3>
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <div class="item-compartilhe">
            <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-count="horizontal">Tweet</a>
        </div><!-- .item-compartilhe -->
        
        <div class="item-compartilhe">
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
            <g:plusone size="medium"></g:plusone>
        </div><!-- .item-compartilhe -->
        
        <div class="item-compartilhe">
        	<iframe src="http://www.facebook.com/plugins/like.php?app_id=175726325786274&amp;href=<?php the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=trebuchet+ms&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
        </div><!-- .item-compartilhe -->
        <div style="clear:both;"></div>
    </div><!-- .compartilhar -->
    
</div><!-- .post -->

<?php 
/* comentarios */ 
comments_template();


/* footer */ 
get_footer();