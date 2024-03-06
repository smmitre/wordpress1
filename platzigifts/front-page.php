<?php get_header();?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-3'><?php the_title(); ?>!!</h1>
            <?php the_content(); ?>

        <?php    }
    }?>

    <div class="lista-productos my-5">
        <h2 class='text-center'>PRODUCTOS</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'producto',
            'post_per_page' => -1, //va definir que cantidad productos traera
            'order'         => 'ASC',//sera el orden por el cual ordenamos los productos
            'orderby'       => 'title'
        );

        $productos = new WP_Query($args);

        if($productos->have_posts()){//sera un metodo de la vaiable productos
            while($productos->have_posts()){//
                $productos->the_post();//va ser un metodo de productos
                ?>
                <div class="col-4">
                    <figure>
                        <?php the_post_thumbnail('large'); ?><!--es para poner la imagen-->
                    </figure>
                    <h4 class='my-3 text-center'><!--Aca lo que hacemos es colocar el enalce para uqe podamos acceder a lso productos-->
                        <a href="<?php the_permalink(); ?>"><!--retormara la url que es del producto y la va imprimir-->
                            <?php the_title();?>
                        </a>
                    </h4>
                </div>

           <?php }
        }

        ?>
      </div>
    </div>

</main>

<?php get_footer(); ?>