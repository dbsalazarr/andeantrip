<!-- 
EL ARCHIVO searchform.php es la plantilla de nuestro formulario de busqueda 
-->

<form role="search" method="get" class="search-form" id="searchform" action="<?php esc_url( home_url('/') ) ?>">

    <input type="hidden" value="<?php get_search_query() ?>" name="s" id="s" >

    <div class="group-field">
        <label for="destino">¿Dónde quieres viajar?</label>
        <input type="text" placeholder="Machu Picchu, Cusco, .." id="destino" name="destino">
        <span class="icon-field"> <img src=" <?php echo get_template_directory_uri(); ?>/media/icon-search.png " alt="icon search"></span>
    </div>
    
    <div>
        <input type="submit" class="boton primario" value="BUSCAR" id="searchsubmit">
    </div>
</form><!-- END FORM FOR SEARCH -->