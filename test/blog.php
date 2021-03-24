<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Eat.Sleep.Data</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style_sheet.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid"> <!-- container -->
			<?php 
                require("menu.php");
            ?>
			<main>
                <h1 id="title">Blog Artikel</h1>
                <div class="card-deck">
                    <div class="col-sm-6">
                        <div class="card mb-4">
                            <img src="img/the-national-council-hall-4575420_960_720.jpg" class="card-img-top img-fluid" alt="a cat">
                                <div class="card-body">
                                    <h4 class="card-title">Die fünfte Schweiz an den Nationalratswahlen</h4>
                                    <p class="card-text">Über die Resultate der Nationalratswahlen wurde in letzter Zeit viel berichtet. Eine Bevölkerungsgruppe wurde dabei jedoch oft übersehen – jene der Auslandschweizer. Ein Blick auf diese Gruppe von Stimmbürger und Kandidaten bringt aufschlussreiche Erkenntnisse.</p>
                                    <a href="blg_1.php" class="btn btn-primary">Zum Artikel</a>
                                </div>
                            </div>
                        </div>
                    </div>
			</main>
			<footer>
                <div class="myfooter text-center py-1">
                    Yanik Kipfer - Seminar Webprogrammierung und Datenvisualisierung FS 2020
                </div>
            </footer>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
