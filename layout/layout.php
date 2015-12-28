<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

	<title>Layout</title>

	<!-- Script -->
	<script src="<?=$conf['base_path']?>/js/jquery.js"></script>
    <script src="<?=$conf['base_path']?>/js/bootstrap.min.js"></script>

	<!-- CSS -->
	<link href="<?=$conf['base_path']?>/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=$conf['base_path']?>/css/default.css" rel="stylesheet" />


</head>
<body>

	<?include($nav);?>

	<?include($header);?>

	<?include($path_file);?>

	<?include($footer);?>

</body>
</html>