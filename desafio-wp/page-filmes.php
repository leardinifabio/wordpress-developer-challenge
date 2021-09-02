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
<?php
endif;
?>
<?php
$args = array('post_type' => 'videos');
$query = new WP_Query($args);
    if ($query->have_posts()):
        echo '<div class="page-videos">';
        echo '<ul class="lista-videos container-play">';
        while ($query->have_posts()): $query->the_post();
            echo '<li class="videos">';
            the_post_thumbnail();
            the_title('<p class="titulo-video">','</p>');
            echo '</li>';
        endwhile;
        echo '</ul>';
        echo '</div>';
    endif;
?>
    </main>
<?php
require_once 'footer.php';
?>
