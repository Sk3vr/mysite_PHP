<?php

include "lib/data.php";

$p = $_GET['p'] ?? null;

$page = match($p) {
	'contacts'  => 'contacts.php',
	'portfolio' => 'portfolio.php',
	'blog'		=> 'blog.php',
	'resume' 	=> 'resume.php',
	'events' 	=> 'events.php',
	default     => 'main.php',
};

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Резюме - <?= $fullName ?></title>
    <!-- CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Load Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>
    <!-- Icons -->
    <link href="assets/css/ioniыcons.css" rel="stylesheet">
</head>
<body>
<!-- Container -->
<div class="container roboto bcg-green">
    <!-- Wrapper -->
    <div class="wrapper bcg-white">

        <header>
            <nav>
                <ul>
				<?php foreach($navigation as ['link' => $l, 'name' => $n]): ?> <!--Применили диструктуризация-->
                    <li>
					<a 
					href="/?p=<?= $l ?>"
					class="lnk">
					<?= $n ?>
					</a>
					</li>
				<?php endforeach; ?>
                </ul>
            </nav>
        </header>
        
		<main>
			<?php include "pages/$page"; ?>
		</main>
		
        <footer>
            <small>© <?= date('Y'), " " , $fullName ?></small>
        </footer>
    </div>
    <!-- end Wrapper -->
</div>
<!-- end Container -->
<!-- JS -->
<script src="assets/js/jQuery.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>