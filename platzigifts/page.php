<?php get_header(); ?>
<main class="container">
    <?php if(have_posts()){//esta fucion va hacer que si todavia queda cotenido para mostrar
//devuelva true en caso contrario devuelva false
        while(have_posts( )){
            the_post();//va a mostrar elcoenido una ves y lo instanciar 
            ?>
            <h1 class='my-3'><?php the_title();
            //lo que hara la funcion the title es justamente mostrar el titulo 
            //de nuestro archivo?></h1>
            <?php the_content(); //el contenido que tengaos guardado en los bloques?>
        <?php }
    }?>
</main>
<?php get_footer(); ?>
