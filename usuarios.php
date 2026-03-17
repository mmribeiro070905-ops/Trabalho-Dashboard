<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="header-content">
        <h2> Gestão de Usuários</h2>
        <p>Visualize e gerecie as permissões dos usuários do sistema.</p>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>E-Mail</td>
                    <td>Acesso</td>
                    <td>Status</td>
                    <td><button class="btn-icon"> <i  class="fa-solid fa-pen"> </i> </button></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Murilo Ribeiro</td>
                    <td>murilo@gmail.com</td>
                    <td>Administrador</td>
                    <td>Ativo</td>
                    <td><button class="btn-icon"> <i  class="fa-solid fa-pen"> </i> </button></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Cadu</td>
                    <td>cadu@gmail.com</td>
                    <td>Usuário</td>
                    <td>Inativo</td>
                    <td><button class="btn-icon"> <i  class="fa-solid fa-pen"> </i> </button></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>luiz Matheus</td>
                    <td>lm@gmail.com</td>
                    <td>Moderador</td>
                    <td>Inativo</td>
                    <td><button class="btn-icon"> <i  class="fa-solid fa-pen"> </i> </button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>