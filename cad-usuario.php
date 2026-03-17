<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">

    <title>Document</title>
</head>
<body>
<main>
    <section class="card-form">
        <div class="from-header">
            <h2><i class="fa-solid fa-user-plus"></i>Novo Usuário</h2>
            <p>Preencha os dados abaixo para registrar um novo acesso.</p>
        </div>

    <from action="processa.php" method="POST">
        <div class="from-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome"  name="nome" placeholder="Ex: Murilo Ribeiro" required>
        </div>

        <div class="from-group">
                <label for="email">E-mail</label>
                <input type="text" id="nome"  name="nome" placeholder="nome@empresa.com" required>
        </div>

        <div class="from-row">
            <div class="from-group flex-1">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
        <div class="from-group flex-1">
                <label for="nivel">Nível</label>
                <select id="nivel" name="nivel">
                    <option value="1">Usuário</option>
                    <option value="2">Administrador</option>
                </select>  
        </div>
        </div>

        <div class="from-actions">
            <button type="submit" class="btn-save">Finalizar Cadastro</button>
            <a href="dashboard.html" class="btn-cancel">Cancelar</a>
        </div>
    </form>
</section>



</main> 
</body>
</html>