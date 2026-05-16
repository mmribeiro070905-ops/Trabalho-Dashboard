<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>

    <link rel="stylesheet" href="dashboard.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<div class="dashboard-container">

<?php include "menu.php"; ?>

<main>

<section class="card-form">

    <div class="form-header">

        <h2>Cadastro de Usuário</h2>

        <p>
            Preencha os campos abaixo para criar
            um novo usuário no sistema.
        </p>

    </div>

    <!-- FORM -->
    <form id="usuarioForm">

        <!-- NOME -->
        <div class="form-group">

            <label for="nome">Nome Completo</label>

            <input
                type="text"
                id="nome"
                placeholder="Nome completo"
                required
            >

        </div>

        <!-- EMAIL -->
        <div class="form-group">

            <label for="email">E-mail</label>

            <input
                type="email"
                id="email"
                placeholder="nome@empresa.com"
                required
            >

        </div>

        <div class="form-row">

            <!-- SENHA -->
            <div class="form-group flex-1">

                <label for="senha">Senha</label>

                <input
                    type="password"
                    id="senha"
                    required
                >

            </div>

            <!-- ACESSO -->
            <div class="form-group flex-1">

                <label for="acesso">Acesso</label>

                <select id="acesso">

                    <option value="1">
                        Usuário
                    </option>

                    <option value="2">
                        Administrador
                    </option>

                </select>

            </div>

            <!-- STATUS -->
            <div class="form-group flex-1">

                <label for="status">Status</label>

                <select id="status">

                    <option value="1">
                        Ativo
                    </option>

                    <option value="2">
                        Inativo
                    </option>

                </select>

            </div>

        </div>

        <!-- BOTÕES -->
        <div class="form-actions">

            <button type="submit" class="btn-save">
                Finalizar Cadastro
            </button>

            <a href="usuarios.php" class="btn-cancel">
                Cancelar
            </a>

        </div>

    </form>

</section>

<!-- TABELA -->
<section class="card-form">

    <div class="form-header">
        <h2>Lista de Usuários</h2>
    </div>

    <table width="100%" border="1" cellpadding="10">

        <thead>

            <tr>

                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Acesso</th>
                <th>Status</th>
                <th>Ações</th>

            </tr>

        </thead>

        <tbody id="tabelaUsuarios"></tbody>

    </table>

</section>

</main>

</div>

<?php include 'rodape.php'; ?>

<script>

    // ARRAY LOCALSTORAGE
    let usuarios = JSON.parse(
        localStorage.getItem("usuarios")
    ) || [];

    // CONTROLE DE EDIÇÃO
    let editando = null;

    // SALVAR
    function salvarLocalStorage(){

        localStorage.setItem(
            "usuarios",
            JSON.stringify(usuarios)
        );
    }

    // RENDERIZAR TABELA
    function renderizarTabela(){

        const tabela =
            document.getElementById("tabelaUsuarios");

        tabela.innerHTML = "";

        usuarios.forEach((usuario, index) => {

            tabela.innerHTML += `

                <tr>

                    <td>${index + 1}</td>

                    <td>${usuario.nome}</td>

                    <td>${usuario.email}</td>

                    <td>
                        ${usuario.acesso == 1
                            ? "Usuário"
                            : "Administrador"}
                    </td>

                    <td>
                        ${usuario.status == 1
                            ? "Ativo"
                            : "Inativo"}
                    </td>

                    <td>

                        <button
                            onclick="editarUsuario(${index})"
                        >
                            <i class="fa fa-pen"></i>
                        </button>

                        <button
                            onclick="excluirUsuario(${index})"
                        >
                            <i class="fa fa-trash"></i>
                        </button>

                    </td>

                </tr>

            `;
        });
    }

    // SUBMIT FORM
    document
    .getElementById("usuarioForm")
    .addEventListener("submit", function(e){

        e.preventDefault();

        const nome =
            document.getElementById("nome").value;

        const email =
            document.getElementById("email").value;

        const senha =
            document.getElementById("senha").value;

        const acesso =
            document.getElementById("acesso").value;

        const status =
            document.getElementById("status").value;

        // EDITAR
        if(editando !== null){

            usuarios[editando] = {

                nome,
                email,
                senha,
                acesso,
                status

            };

            editando = null;

        } else {

            // CADASTRAR
            usuarios.push({

                nome,
                email,
                senha,
                acesso,
                status

            });
        }

        salvarLocalStorage();

        renderizarTabela();

        limparFormulario();
    });

    // EDITAR
    function editarUsuario(index){

        document.getElementById("nome").value =
            usuarios[index].nome;

        document.getElementById("email").value =
            usuarios[index].email;

        document.getElementById("senha").value =
            usuarios[index].senha;

        document.getElementById("acesso").value =
            usuarios[index].acesso;

        document.getElementById("status").value =
            usuarios[index].status;

        editando = index;
    }

    // EXCLUIR
    function excluirUsuario(index){

        let confirmar = confirm(
            "Deseja excluir este usuário?"
        );

        if(confirmar){

            usuarios.splice(index, 1);

            salvarLocalStorage();

            renderizarTabela();
        }
    }

    // LIMPAR FORM
    function limparFormulario(){

        document
        .getElementById("usuarioForm")
        .reset();

        editando = null;
    }

    // INICIAR
    renderizarTabela();

</script>

</body>
</html>
