<?php



$route_files = rsearch( __MODEL_DIR__, '_route.php' );
//di($route_files);
$routes = [];
foreach (  $route_files as $file ) {
    include $file;
}

//di($routes);


/**
 * @param $name
 * @return mixed
 *      return FALSE if there is no route.
 */
function get_route( $name ) {
    global $routes;
    if ( isset( $routes[ $name ] ) && $routes[ $name ] ) return $routes[ $name ];
    else return FALSE;
}

function add_route( $name, $option ) {
    global $routes;
    $routes[ $name ] = $option;
}
$_current_route = null;
function set_current_route( $route ) {
    global $_current_route;
    $_current_route = $route;
}
function get_current_route( ) {
    global $_current_route;
    return $_current_route;
}


