<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 1</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f4f6f9, #e0e7ff);
            margin: 0;
        }

        header{
            background-color: #da1fc1;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        section{
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 50px 20px;
            flex-wrap: wrap;
        }

        .card{
            background: white;
            width: 320px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
            transition: 0.3s;
        }

        .card:hover{
            transform: translateY(-10px);
            box-shadow: 0 20px 35px rgba(0,0,0,0.15);
        }

        .card h2{
            color: #da1fc1;
            margin-bottom: 10px;
        }

        .card p{
            color: #666;
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
            background: linear-gradient(45deg, #da1fc1, #ff4dd2);
        }

        .btn-code:hover{
            transform: scale(1.05);
            opacity: 0.9;
        }

        .btn-rapport{
            background: linear-gradient(45deg, #333, #666);
        }

        .btn-rapport:hover{
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <header>
        AHLAM EL BOUHATI
    </header>

<section>

<div class="card">
    <h2>Atelier 1</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="exercice1.php">Exercice 1</a>';
        echo '<a class="btn btn-rapport" href="rapport ex1.pdf" target="_blank">Rapport</a>';
        echo '<a class="btn btn-code" href="exercice2.php">Exercice 2</a>';
        echo '<a class="btn btn-rapport" href="rapport ex2.pdf" target="_blank">Rapport</a>';
    ?>
</div>

<div class="card">
    <h2>Atelier 2</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="exercice3.php">Exercice 3</a>';
        echo '<a class="btn btn-rapport" href="rapport ex3.pdf" target="_blank">Rapport</a>';
        echo '<a class="btn btn-code" href="exercice4.php">Exercice 4</a>';
        echo '<a class="btn btn-rapport" href="rapport ex4.pdf" target="_blank">Rapport</a>';
    ?>
</div>

<div class="card">
    <h2>Atelier 3</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="https://github.com/elbouhatiahlam53-bit/atelier-3.git">Exercice </a>';
       
    ?>
</div>
<div class="card">
    <h2>Atelier 4</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice</a>';
    ?>
</div>
<div class="card">
    <h2>Atelier 5</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#p">Exercice </a>';
    ?>
</div>
<div class="card">
    <h2>Atelier 6</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
    
       ?>
</div>
<div class="card">
    <h2>Atelier 7</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="https://github.com/elbouhatiahlam53-bit/atelier7.git">Exercice </a>';
        
        
    ?>
</div>
<div class="card">
    <h2>Atelier 8</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
       
    ?>
</div>
<div class="card">
    <h2>Atelier 9</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
       
    ?>
</div>
<div class="card">
    <h2>Atelier 10</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
       
    ?>
</div>
<div class="card">
    <h2>Atelier 11</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
       
    ?>
</div>
<div class="card">
    <h2>Atelier 12</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
       
    ?>
</div>
<div class="card">
    <h2>Atelier 13</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
       
    ?>
</div>
<div class="card">
    <h2>Atelier 14</h2>
    <p>Choisissez une option :</p>

    <?php 
        echo '<a class="btn btn-code" href="#">Exercice </a>';
       
    ?>
</div>

</section>
</body>
</html>