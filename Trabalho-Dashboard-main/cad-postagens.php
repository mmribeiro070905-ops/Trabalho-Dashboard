<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Postagens</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
                <ul>
                    <li><a href="dashboard.php"><i class="fas fa-home"></i> Início</a></li>
                    <li><a href="postagens.php"><i class="fas fa-pen"></i> Postagens</a></li>
                </ul> 

                <div class="perfil-usuario">
                    <img src="img/266033.png" alt="Avatar">
                    <span>Murilo Ribeiro</span>
                </div>

        </nav>

    <main>
        <section class="card-form"> 
            <div class="form-header">
                
                <h2>Cadastro de Postagens</h2>
                <p>Preencha os campos abaixo para fazer uma postagem no sistema.</p>
            </div>
            <form action="insere-usuario.php" method="POST">
            <div class="form-group">
                <label for="nome">Titulo</label>
                <input type="text" id="text" placeholder="Produto" required>
            </div>

            <div class="form-group">
                <label for="email">Conteudo</label>
                <input type="text" id="text" name="text" placeholder="Tamanho"required>
            </div>

            <div class="form-row">
                <div class="form-group flex-1">
                    <label for="nivel">Categoria</label>
                    <select id="nivel" name="nivel">
                        <option value="1">Cliente</option>
                        <option value="2">Comprador</option>
                    </select>
                </div>
                <div class="form-group flex-1">
                    <label for="nivel">Status</label>
                    <select id="nivel" name="nivel">
                        <option value="1">Ativo</option>
                        <option value="2">Inativo</option>
                    </select>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">Finalizar Cadastro</button>
                <a href="postagens.php" class="btn-cancel">Cancelar</a>
            </div>
        </form>
        
        </section>
    </main>
    </div>
    <?php include 'rodape.php';?>
</body>
</html>
