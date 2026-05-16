<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>

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

        <h2>Cadastro de Categorias</h2>

        <p>
            Preencha os campos abaixo para adicionar
            uma nova categoria no sistema.
        </p>

    </div>

    <!-- FORM -->
    <form id="categoriaForm">

        <div class="form-group">

            <label for="nome">Nome da Categoria</label>

            <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Digite a categoria"
                required
            >

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

            <button type="submit" class="btn-save">
                Finalizar Cadastro
            </button>

            <a href="categoria.php" class="btn-cancel">
                Cancelar
            </a>

        </div>

    </form>

</section>

<!-- TABELA -->
<section class="card-form">

    <div class="form-header">
        <h2>Lista de Categorias</h2>
    </div>

    <table width="100%" border="1" cellpadding="10">

        <thead>

            <tr>

                <th>#</th>
                <th>Categoria</th>
                <th>Status</th>
                <th>Ações</th>

            </tr>

        </thead>

        <tbody id="tabelaCategorias"></tbody>

    </table>

</section>

</main>

</div>

<?php include 'rodape.php'; ?>

<script>

    // ARRAY LOCALSTORAGE
    let categorias = JSON.parse(
        localStorage.getItem("categorias")
    ) || [];

    // CONTROLE DE EDIÇÃO
    let editando = null;

    // SALVAR
    function salvarLocalStorage(){

        localStorage.setItem(
            "categorias",
            JSON.stringify(categorias)
        );
    }

    // RENDERIZAR TABELA
    function renderizarTabela(){

        const tabela =
            document.getElementById("tabelaCategorias");

        tabela.innerHTML = "";

        categorias.forEach((categoria, index) => {

            tabela.innerHTML += `

                <tr>

                    <td>${index + 1}</td>

                    <td>${categoria.nome}</td>

                    <td>
                        ${categoria.status == 1
                            ? "Ativo"
                            : "Inativo"}
                    </td>

                    <td>

                        <button
                            onclick="editarCategoria(${index})"
                        >
                            <i class="fa fa-pen"></i>
                        </button>

                        <button
                            onclick="excluirCategoria(${index})"
                        >
                            <i class="fa fa-trash"></i>
                        </button>

                    </td>

                </tr>
            `;
        });
    }

    // FORM SUBMIT
    document
    .getElementById("categoriaForm")
    .addEventListener("submit", function(e){

        e.preventDefault();

        const nome =
            document.getElementById("nome").value;

        const status =
            document.getElementById("nivel").value;

        // EDITAR
        if(editando !== null){

            categorias[editando] = {
                nome,
                status
            };

            editando = null;

        } else {

            // CADASTRAR
            categorias.push({
                nome,
                status
            });
        }

        salvarLocalStorage();

        renderizarTabela();

        limparFormulario();
    });

    // EDITAR
    function editarCategoria(index){

        document.getElementById("nome").value =
            categorias[index].nome;

        document.getElementById("nivel").value =
            categorias[index].status;

        editando = index;
    }

    // EXCLUIR
    function excluirCategoria(index){

        let confirmar = confirm(
            "Deseja excluir esta categoria?"
        );

        if(confirmar){

            categorias.splice(index, 1);

            salvarLocalStorage();

            renderizarTabela();
        }
    }

    // LIMPAR FORM
    function limparFormulario(){

        document
        .getElementById("categoriaForm")
        .reset();

        editando = null;
    }

    // INICIAR
    renderizarTabela();

</script>

</body>
</html>
