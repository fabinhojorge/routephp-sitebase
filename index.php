<?
function redirecionar($p) {
	$path = $p;
    $header = "layout/header.php";
    $footer = "layout/footer.php";
    $layout = "layout/layout.php";

    include($layout);
}

$path = ltrim($_SERVER['REQUEST_URI'], '/');
$elements = explode('/', $path);

if(count($elements) == 0){                       // No path elements means home
    redirecionar("home.php");
}else{ 
	
	$route = strtolower(array_pop($elements));
	
	switch($route){

    case '':
    case "home":
    	redirecionar("home.php");
        break;
    case 'contato':
    	redirecionar("contato.php");
    	break;
    default:
        //header('HTTP/1.1 404 Not Found');
        echo "Page not Found";
	}
}
?>