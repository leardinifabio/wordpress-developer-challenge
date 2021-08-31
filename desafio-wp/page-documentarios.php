<?php
$estiloPagina = 'home.css';
require_once 'header.php';

if (have_posts()):
    ?>
    <main class="main-home">
        <?php
        while (have_posts()): the_post();
            the_post_thumbnail('post-thumbnail', array('class' => 'video-home'));
            echo '<div class="conteudo-home-play">';
            the_title('<h2>', '</h2>');
            the_content();
            echo '</div>';
        endwhile;
        ?>
    </main>
<?php
endif;
require_once 'footer.php';