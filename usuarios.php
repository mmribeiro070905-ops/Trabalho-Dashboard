<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="usuarios.php">Usuários</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                </ul> 

                <div class="perfil-usuario">
                    <img src="https://cdn-icons-png.flaticon.com/512/266/266033.png" alt="Avatar">
                    <span>Murilo Ribeiro</span>
                </div>

            </nav>
        <main>
        <div class="header-content">
            <h2>Gestão de Usuários</h2>
            <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Acesso</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Murilo Ribeiro</td>
                        <td>Murilo@gmail.com</td>
                        <td>Administrador</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Cadu pinto</td>
                        <td>cadu@gmail.com</td>
                        <td>Editor</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Matheus bola</td>
                        <td>matheus@gmail.com</td>
                        <td>Usuário</td>
                        <td><span class="badge inativo">Inativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></button></td>
                    </tr>
                </tbody>
                <tfoot>
             <tr><td colspan="6" align="right"><a href="cad-usuario.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Usuário</a>
        </td>
    </tr>
</tfoot>
            </table>
        </div>
    </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>
