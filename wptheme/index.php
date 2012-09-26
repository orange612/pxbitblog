<!doctype html>

<html lang="en-us">

    <head>

        <meta charset="utf-8">

    	<title><?php bloginfo('name'); ?> <?php wp_title('',true,''); ?></title>

        <meta name="description" content="EL podcast.">

        <link rel="shortcut icon" href="/favicon.ico">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

        <meta name="viewport" content="width=device-width">   

    </head>

    <body>

    	<header class="bigasspic">

        <div class="barcontainer cf">

          <div class="logo">

            <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="pxbit" /></a>

            <h1 class="element-invisible" style="display:none">pxbit</h1>

          </div>

          <nav class="navigation nav">

            <ul>

              <li><a href="#">Episodios</a></li>

              <li><a href="#">Contact</a></li>

            </ul>

          </nav>

        </div><!-- /.barcontainer -->

        <div class="header-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="column-first">

            <div class="teaser cf alpha-bg">


              <?php the_post_thumbnail('episode-square', array('class' => 'teaser-image')); ?>

              <!--<img class="teaser-image" src="sample_img/teaser_pic.png" alt="" />-->

              <h2 class="title"><?php the_title(); ?></h2>

              <?php the_excerpt(); ?>

            </div><!-- /.teaser -->

          </div><!-- /.column-first -->

          <div class="column-second">

            <div class="social alpha-bg round-corners">

            

            <a href="https://twitter.com/pxbit" class="twitter-follow-button" data-show-count="false">Follow @pxbot</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			

            

            </div>
<?php the_field('mixlr_embed'); ?>


          </div><!-- /.column-second -->





          



<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>

        





        </div>



    	</header>



    	<div class="maincontainer cf">

        <ul class="list">

<?php query_posts('cat=1&showposts=6');
if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li>
          	<a href="<?php the_permalink(); ?>">
            <figure>
            <?php the_post_thumbnail('thumbnail'); ?>
            <figcaption class="caption"><?php the_title(); ?></figcaption>
            </figure>
            </a>
          </li>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

        </ul>

    	</div><!-- /.main-container -->

      <footer class="footer cf">

        <div class="loveblock">

          <p>Yikes! ya no hay nada mas que ver por aqui. Pero puedes dejar tu correo electronico y recibiras nuestras novedades antes que nadie.</p>

        </div>

        <div class="mailform">

          <form action="index_submit" method="get" accept-charset="utf-8">

            <div class="item-1"><input type="text" name="mail" value="Quiero mas pxbit en mi correo" class="form-text"></div>

            <div class="item-2"><input type="submit" value="pew!" class="form-submit"></div>

          </form>

        </div>

      </footer>

    </body>

</html>