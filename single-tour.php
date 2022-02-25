<?php get_header(); ?>
    <article class="tour-descripcion centrar">
        <header>
            <h1> <?php the_title(); ?></h1>
            <div class="tour-content-image">
                <?php the_post_thumbnail(); ?>
                <div class="tour-text-image">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </header>
        
        <div class="tour-text">
            <?php the_content(); ?>
        </div>
        <div class="text-center" style="margin-top: 2.5rem;">
            <a href="" class="boton secundario"> GALERÍA </a>
        </div>
        <!-- 
            Contenido para la galería
         -->


         <div class="text-center" style="margin-top: 5rem;">
            <a href="" class="boton primario">  EXPLORAR MÁS TOURS </a>
        </div>

        <section class="seccion tours-section">
            <h2 class="titulo-seccion text-center">
                Destinos Recomendados
            </h2>

            
            <?php 
                $args = array(
                    'post_type' => 'tour',
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                );

                $tours = new WP_Query($args);
            ?>
            <div class="grid-tour" id="grid">
                <?php while( $tours->have_posts() ) : $tours->the_post(); ?>
                <article class="item">
                    <div class="tour-content">
                        <!-- Imagen -->
                        <?php the_post_thumbnail('tour'); ?>
                        <div class="tour-detalles"> 
                            <div class="tour-cabecera">
                                <h3 class="tour-titulo">  <?php the_title(); ?> </h3>
                                <p> <span class="tour-duracion"> <?php the_field("duracion_tour") ?> </span> </p>
                            </div>
                            <div class="tour-extras icons-social">
                                <ul class="categorias">
                                    
                                    <li> <a target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                                    </a> </li>
                                    
                                    <li> <a target="_blank" class="twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=Una maravilloso recorrido de la mano de @andeantrip:">
                                    </a></li>
                                    
                                    <li> <a target="_blank" class="" href="https://web.whatsapp.com/send?phone=51941002491&text=Hola Andean me interesa el siguiente recorrido: <?php the_title();?>">
                                    </a> </li>
                                </ul>
                                <a href="<?php the_permalink(); ?>" class="ver-tour boton primario text-center"> EXPLORAR </a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </section>

    </article>
<?php get_footer(); ?>