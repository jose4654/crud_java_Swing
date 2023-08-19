<?php

function getMenu($categoria=null)
{
    $lista_menu = array(
        array('codigo' => 1,'año_lanzamiento' => '17/2001', 'num_serie' => '1225','nombre' => 'age of empire 1', 'categoria' => 'a', 'precio' => 2000, 'descuento' => 0),
        array('codigo' => 2, 'año_lanzamiento' => '15/1999','num_serie' => '1223','nombre' => 'age of empire 2', 'categoria' => 'b', 'precio' => 2500, 'descuento' => 0),
        array('codigo' => 3, 'año_lanzamiento' => '14/2004','num_serie' => '1252','nombre' => 'age of empire 3', 'categoria' => 'c', 'precio' => 2700, 'descuento' => 500),
        array('codigo' => 4, 'año_lanzamiento' => '13/2005','num_serie' => '1224','nombre' => 'age of empire 4', 'categoria' => 'd', 'precio' => 800, 'descuento' => 0),
        array('codigo' => 5, 'año_lanzamiento' => '11/2008','num_serie' => '1222','nombre' => 'age of mythology Tale of the dragon', 'categoria' => 'e', 'precio' => 500, 'descuento' => 0),
        array('codigo' => 6, 'año_lanzamiento' => '4/2002','num_serie' => '1262','nombre' => 'age of Mythology', 'categoria' => 'f', 'precio' => 900, 'descuento' => 0),
        array('codigo' => 7,'año_lanzamiento' => '1/2003','num_serie' => '1226', 'nombre' => 'titan quest', 'categoria' => 'g', 'precio' => 1700, 'descuento' => 400),
        array('codigo' => 8,'año_lanzamiento' => '2/1998','num_serie' => '1522', 'nombre' => 'age of mythology titans expansion', 'categoria' => 'h', 'precio' => 300, 'descuento' => 0),
       
       


    );
    //

    if( $categoria ){

        $menu_filtrado = array();

        foreach($lista_menu as $item)
        {
            if($item['nombre'] == $categoria)
            {
                array_push($menu_filtrado, $item);
            }
        }
        
    }else{

        $menu_filtrado = $lista_menu;

    }

    return $menu_filtrado;



     

}
function getCategoriasMenu()
{

    $lista_menu = getMenu();
    $categorias = array();

    foreach($lista_menu as $item)
    {
        if( !in_array($item['nombre'], $categorias) )
        {
            array_push($categorias, $item['nombre']);
        }
    }

    sort($categorias);

    return $categorias;

}



?>