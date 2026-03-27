<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Arsenal News</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Início</a></li>
                <li><a href="https://www.arsenal.com/news"><i class="fas fa-newspaper"></i> Notícias</a></li>
                <li><a href="https://www.arsenal.com/fixtures"><i class="fas fa-gamepad"></i> Jogos</a></li>
                <li><a href="https://www.arsenal.com/men/players"><i class="fas fa-users"></i> Elenco</a></li>
                <li><a href="usuarios.php"><i class="fas fa-user"></i> Usuários</a></li>
                <li><a href="postagens.php"><i class="fas fa-pen"></i> Postagens</a></li>
                <li><a href="categoria.php"><i class="fas fa-list"></i> Categorias</a></li>
                
            </ul>


            <div class="perfil-usuario">
                <img src="img/266033.png" alt="Avatar">
                <span>Murilo Ribeiro</span>
            </div>
        </nav>

        <main>
            <section class="container-cards">

                <article class="card">
                    <img src="img/Arsenal1.jpg" alt="Classico">
                    <h2>Arsenal vence clássico em Londres!</h2>
                    <p>O Arsenal conquistou uma vitória importante no clássico, mantendo a boa fase na temporada.</p>
                    <a href="https://www.espn.com.br/futebol/premier-league/artigo/_/id/16374812/arsenal-vence-classico-quente-chelsea-mantem-gordura-manchester-city-premier-league" class="btn">Ler mais</a>
                </article>

                <article class="card">
                    <img src="img/Arsenal2.jpg" alt="Coletiva">
                    <h2>Treinador comenta sobre desempenho do time</h2>
                    <p>O técnico falou sobre a evolução da equipe e os próximos desafios na Premiar League e Champions League.</p>
                    <a href="https://www.goal.com/br/listas/video-veja-a-expressao-facial-de-mikel-arteta-assista-ao-momento-extremamente-constrangedor-em-que-o-tecnico-do-arsenal-e-informado-sobre-o-discurso-furioso-de-fabian-hurzeler-sobre-criar-suas-proprias-regras/blt28fb0cf66ebc797b" class="btn">Ler mais</a>
                </article>

                <article class="card">
                    <img src="img/Arsenal3.jpg" alt="Destaque">
                    <h2>Jogador destaque da partida se destaca</h2>
                    <p>Jurriën Timber se destaca na partida contra o Chelsea e recebe elogios do Técnico Arteta.</p>
                    <a href="https://www.sofascore.com/pt/football/player/jurrien-timber/958959" class="btn">Ler mais</a>
                </article>

            </section>
        </main>

    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>
