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
                <h1 id="title">Kontakt</h1>
                    <form action="https://formspree.io/xlepdwvj" method="POST">
                        <div class="form-group row" method="post">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" placeholder="Name/Vorname" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 control-label">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="email" id="email" name="email" placeholder="peter@muster.com" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nachricht" class="col-sm-2 control-label">Nachricht</label>
                            <div class="col-sm-10">
                                <textarea id="nachricht" name="nachricht" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-light" type="submit">Abschicken</button>
                            </div>
                        </div>
                    </form>
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
