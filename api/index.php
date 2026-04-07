<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - Ahlam El Bouhati</title>
    <style>
        body {
    font-family: Arial;
    margin: 0;
    padding: 0;
        }
    header {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 20px;
    }
    nav {
        background-color: #555;
        text-align: center;
        padding: 10px;
    }
    
    nav a {
        color: white;
        margin: 10px;
        text-decoration: none;
        font-weight: bold;
    }
    section {
        padding: 20px;
    }
    .project {
        background-color: #f4f4f4;
        margin: 10px 0;
        padding: 15px;
        border-radius: 5px;
    }
    form {
        display: flex;
        flex-direction: column;
        width: 300px;
    }
    
    input, textarea {
        margin: 5px 0;
        padding: 10px;
    }
    
    button {
        background-color: #333;
        color: white;
        padding: 10px;
        border: none;
    }
    .success {
        color: green;
        margin-top: 10px;
    }
    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px;
    }
    </style>
</head> 
<body>

    <header>
        <h1>Ahlam El Bouhati</h1>
        <p>Développeuse Web</p>
    </header>
    <nav>
        <a href="#about">À propos</a>
        <a href="#projects">Projets</a>
        <a href="#contact">Contact</a>
    </nav>
    <section id="about">
        <h2>À propos</h2>
        <p>
            Je suis Ahlam El Bouhati, développeuse web passionnée par la création des sites modernes.
        </p>
    </section>
    <section id="projects">
        <h2>Mes Projets</h2>

        <div class="project">
            <h3>Atelier 1</h3>  
        </div>

        <div class="project">
            <h3>Atelier 2</h3>
        </div>
        <div class="project">
            <h3>Atelier 2</h3>
        </div>
    </section>
    <footer>
        <p>2026 Ahlam El Bouhati</p>
    </footer>

</body>
</html>