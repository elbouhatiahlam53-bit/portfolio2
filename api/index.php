<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 1</title>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

<style>

body{
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #eef2ff, #dbeafe);
    margin: 0;
}

/* HEADER */
header{
    background: linear-gradient(45deg, #da1fc1, #7c3aed);
    color: white;
    text-align: center;
    padding: 25px;
    font-size: 24px;
    font-weight: 700;
    letter-spacing: 2px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* SECTION */
section{
    display: flex;
    justify-content: center;
    gap: 40px;
    padding: 60px 20px;
    flex-wrap: wrap;
}

/* CARD */
.card{
    background: white;
    width: 330px;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    text-align: center;
    transition: 0.4s;
}

.card:hover{
    transform: translateY(-10px);
}

/* TITLES */
.card h2{
    color: #7c3aed;
    margin-bottom: 10px;
}

.card p{
    color: #777;
    margin-bottom: 20px;
}

/* LINKS (Exercice + Rapport côte à côte) */
.links{
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}

.links a{
    flex: 1;
}

/* BUTTON */
.btn{
    display: block;
    text-decoration: none;
    padding: 12px;
    border-radius: 10px;
    color: white;
    font-weight: 500;
    transition: 0.3s;
}

.btn-code{
    background: linear-gradient(45deg, #da1fc1, #ff4dd2);
}

.btn-rapport{
    background: linear-gradient(45deg, #374151, #6b7280);
}

.btn:hover{
    transform: scale(1.05);
}

</style>
</head>

<body>

<header>
    AHLAM EL BOUHATI
</header>

<section>

<!-- Atelier 1 -->
<div class="card">
    <h2>Atelier 1</h2>
    <p>Choisissez une option :</p>

    <div class="links">
        <?php 
            echo '<a class="btn btn-code" href="exercice1.php">💻 Exercice 1</a>';
            echo '<a class="btn btn-rapport" href="rapport ex1.pdf" target="_blank">📄 Rapport</a>';
        ?>
    </div>

    <div class="links">
        <?php 
            echo '<a class="btn btn-code" href="exercice2.php">💻 Exercice 2</a>';
            echo '<a class="btn btn-rapport" href="rapport ex2.pdf" target="_blank">📄 Rapport</a>';
        ?>
    </div>

</div>

<!-- Atelier 2 -->
<div class="card">
    <h2>Atelier 2</h2>
    <p>Choisissez une option :</p>

    <div class="links">
        <?php 
            echo '<a class="btn btn-code" href="exercice3.php">💻 Exercice 3</a>';
            echo '<a class="btn btn-rapport" href="rapport ex3.pdf" target="_blank">📄 Rapport</a>';
        ?>
    </div>

    <div class="links">
        <?php 
            echo '<a class="btn btn-code" href="exercice4.php">💻 Exercice 4</a>';
            echo '<a class="btn btn-rapport" href="rapport ex4.pdf" target="_blank">📄 Rapport</a>';
        ?>
    </div>

</div>

</section>

</body>
</html>