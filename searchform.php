<!-- 
EL ARCHIVO searchform.php es la plantilla de nuestro formulario de busqueda 
-->

<form role="search" method="get" class="andean-form-content" id="searchform" action="<?php esc_url( home_url('/') ) ?>">
    <input type="hidden" value="<?php get_search_query() ?>" name="s" id="s" >
    <div class="">
        <div class="group-field">
            <span>¿Dónde quieres viajar?</span>
            <input type="text" placeholder="Machu Picchu, Cusco, .." id="destino" name="destino">
            <span class="icon-tours"></span>
        </div>
        <div>
            <input type="submit" class="" value="BUSCAR" id="searchsubmit">
        </div>
    </div>
</form><!-- END FORM FOR SEARCH -->