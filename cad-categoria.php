<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
<?php include "menu.php"; ?>

    <main>
        <section class="card-form"> 
            <div class="form-header">
                
                <h2>Cadastro de Categorias</h2>
                <p>Preencha os campos abaixo para adicionar uma nova categoria no sistema.</p>
            </div>
            <form action="insere-categoria.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Nome comleto" required>
            </div>
            
            <div class="form-row">
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
                <a href="categoria.php" class="btn-cancel">Cancelar</a>
            </div>
        </form>
        
        </section>
    </main>
    </div>
    <?php include 'rodape.php';?>
</body>
</html>
