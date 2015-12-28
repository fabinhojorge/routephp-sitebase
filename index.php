<?

include("settings.php");


function redirecionar($p, $conf, $c, $a) {


    $path_file = $p;
    $controller = $c;
    $action = $a;
    $header = "layout/header.php";
    $nav = "layout/navigation.php";
    $footer = "layout/footer.php";
    $layout = "layout/layout.php";

    include($layout);
}

function error404(){
    header('HTTP/1.1 404 Not Found');
    echo "Page not Found";
}


//$path = ltrim($_SERVER['REQUEST_URI'], '/');

$elements = explode('/', $conf['base_url']);

if(count($elements) == 0){
    redirecionar("home.php", $conf, $c="home", $a="index");
}else{ 
	
    //$route = strtolower(array_pop($elements));
    //$controller = array_shift(array_values($elements));
    $elements = array_reverse($elements, true);
    $controller = array_pop($elements);
    $action = array_pop($elements);

    
	switch($controller){

        case '':
        case 'index':
        case 'index.php':
        case 'home':
        case 'home.php':
        case 'inicio':
        case 'inicio.php':
            redirecionar("home.php", $conf, $c="home", $a="index");
            break;
        case 'email':
            include("send_email.php");
            break;
        default:
            error404();
	}
}

?>