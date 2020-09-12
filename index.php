<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href='assets/css/style.css' type="text/css"> -->
    <title>Cadastro de cidades</title>
</head>
<body>
    <main class="container mt-5">
        <section class="col">
            <?php
            
            include_once 'chooseLocalization.php';
            include_once 'cityRegisters.php';

            ?>
        </section>
    </main>
</body>    

 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

 <script src="assets/js/index.js"></script>
 <script src="assets/js/sendCityData.js"></script>
 <script src="assets/js/findRoute.js"></script>
 <script src="assets/js/checkCityExists.js"></script>
 