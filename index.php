<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz || Feira-Técnologica</title>
    <!--================CSS EXTERNO================-->
    <link rel="stylesheet" href="style.css">
    <!--================Fontes================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!--=====================ICONES================-->
    <!--BOXICONS.COM-->
    <link rel="shortcut icon" href="img/favicon6.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="manifest" href="manifest.json"></link>

</head>
<body>
    <section class="corpo">
        <article class="quiz">
            <h2 id="questoes">Selecione o nível de dificuldade:</h2>
            <div id="alternativasButton">
                <button class="btn" onclick="startEasy()">Fácil</button>
                <button class="btn" onclick="startMed()">Médio</button>
                <button class="btn" onclick="startHard()">Difícil</button>
            </div>
            <button id="proximo">Próximo</button>  
            <p id="frase"></p>    
        </article>
    </section>

    <script src="script.js"></script>

    <footer id="creditos">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>

        <section class="grid">
            <div class="dev">
                <h5 class="titulof">Desenvolvido por:</h5>
                <ul class="menu">
                    <li>Marcus Vannucchi</li>
                    <li>Maria Eduarda</li>
                    <li>Otavio Fernandes</li>
                    <li>Rodrigo Santos</li>
                    <li>Tarcísio Neves</li>
                </ul>
            </div>
            <div class="sobrenos">
                <h5 class="titulof">Sobre Quiz:</h5>
                    <p>Este projeto foi desenvolvido a fim de testar o conhecimento tecnológico de seus participantes. Com o intuito de ensinar sobre a área de uma maneira dinâmica e descontraída.</p>

            </div>
            <div class="tec">
                <h5 class="titulof">Tecnologias usadas:</h5>
                <ul class="menu">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Java Script</li>
                </ul>
            </div>
        </section>
        <div class="etec">
            <p>Etec Zona Leste | Centro Paula Souza &copy; 2023 </p>
        </div>
    </footer>
    
</body>
</html>