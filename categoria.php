<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Categorias</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Início</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Usuários</a></li>
                <li><a href="https://arsenaldirect.arsenal.com/Football-Shirts-and-Kit/c/kit"><i class="fas fa-box"></i> Produtos</a></li>
            </ul>

            <div class="perfil-usuario">
                <img src="img/266033.png" alt="Avatar">
                <span>Murilo Ribeiro</span>
            </div>

        </nav>
        <main>
            <div class="header-content">
                <div class="header-title">
                    <h2>Gestão de Categorias</h2>
                    <p>Visualize e gerencie as permissões dos categoria do sistema.</p>
                </div>

                <tr><td colspan="6" align="right"><a href="cad-categoria.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Categoria</a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Categoria</th>
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
                            <td class="acoes">
                            <button class="btn-icon">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <button class="btn-icon">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </td> 
                            </tr>
                        <tr>
                            <td>02</td>
                            <td>Cadu</td>
                            <td>Cadu@gmail.com</td>
                            <td>Comprador</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td class="acoes">
                            <button class="btn-icon">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <button class="btn-icon">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </td> 
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Matheus</td>
                            <td>Matheus@gmail.com</td>
                            <td>Comprador</td>
                            <td><span class="badge inativo">Inativo</span></td>
                            <td class="acoes">
                            <button class="btn-icon">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <button class="btn-icon">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </td> 
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" align="right">Informações de quantidade de registros...</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>

</html>
