<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 1</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card{
            background: white;
            width: 350px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card h2{
            color: #da1fc1;
            margin-bottom: 10px;
        }

        .card p{
            color: #555;
            margin-bottom: 20px;
        }

        .btn{
            display: block;
            width: 100%;
            text-decoration: none;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-code{
            background-color: #da1fc1;
        }

        .btn-code:hover{
            background-color: #b915a3;
        }

        .btn-rapport{
            background-color: #333;
        }

        .btn-rapport:hover{
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>AHLAM EL BOUHATI</h1>
    </header>
<section>
<div class="card">
    <h2>Atelier 1</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="exercice1.php">Code Source</a>';
        echo '<a class="btn btn-rapport" href="rapport ex1.pdf" target="_blank">Rapport</a>';
        echo '<a class="btn btn-code" href="exercice2.php">Code Source</a>';
        echo '<a class="btn btn-rapport" href="rapport ex2.pdf" target="_blank">Rapport</a>';
    ?>
</div>
<div class="card">
    <h2>Atelier 2</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="exercice3.php">Code Source</a>';
        echo '<a class="btn btn-rapport" href="rapport ex3.pdf" target="_blank">Rapport</a>';
        echo '<a class="btn btn-code" href="exercice4.php">Code Source</a>';
        echo '<a class="btn btn-rapport" href="rapport ex4.pdf" target="_blank">Rapport</a>';
    ?>
</div>
</section>
</body>
</html>