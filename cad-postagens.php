<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Postagens</title>

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

        <h2>Cadastro de Postagens</h2>

        <p>
            Preencha os campos abaixo para fazer
            uma postagem no sistema.
        </p>

    </div>

    <!-- FORM -->
    <form id="postagensForm">

        <!-- TÍTULO -->
        <div class="form-group">

            <label for="titulo">Título</label>

            <input
                type="text"
                id="titulo"
                placeholder="Digite o título"
                required
            >

        </div>

        <!-- CONTEÚDO -->
        <div class="form-group">

            <label for="conteudo">Conteúdo</label>

            <textarea
                id="conteudo"
                placeholder="Digite o conteúdo"
                rows="5"
                required
            ></textarea>

        </div>

        <div class="form-row">

            <!-- CATEGORIA -->
            <div class="form-group flex-1">

                <label for="categoria">Categoria</label>

                <select id="categoria">

                    <option value="Cliente">
                        Cliente
                    </option>

                    <option value="Comprador">
                        Comprador
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

            <a href="postagens.php" class="btn-cancel">
                Cancelar
            </a>

        </div>

    </form>

</section>

<!-- TABELA -->
<section class="card-form">

    <div class="form-header">
        <h2>Lista de Postagens</h2>
    </div>

    <table width="100%" border="1" cellpadding="10">

        <thead>

            <tr>

                <th>#</th>
                <th>Título</th>
                <th>Conteúdo</th>
                <th>Categoria</th>
                <th>Status</th>
                <th>Ações</th>

            </tr>

        </thead>

        <tbody id="tabelaPostagens"></tbody>

    </table>

</section>

</main>

</div>

<?php include 'rodape.php'; ?>

<script>

    // ARRAY LOCALSTORAGE
    let postagens = JSON.parse(
        localStorage.getItem("postagens")
    ) || [];

    // CONTROLE DE EDIÇÃO
    let editando = null;

    // SALVAR
    function salvarLocalStorage(){

        localStorage.setItem(
            "postagens",
            JSON.stringify(postagens)
        );
    }

    // RENDERIZAR TABELA
    function renderizarTabela(){

        const tabela =
            document.getElementById("tabelaPostagens");

        tabela.innerHTML = "";

        postagens.forEach((postagem, index) => {

            tabela.innerHTML += `

                <tr>

                    <td>${index + 1}</td>

                    <td>${postagem.titulo}</td>

                    <td>${postagem.conteudo}</td>

                    <td>${postagem.categoria}</td>

                    <td>
                        ${postagem.status == 1
                            ? "Ativo"
                            : "Inativo"}
                    </td>

                    <td>

                        <button
                            onclick="editarPostagem(${index})"
                        >
                            <i class="fa fa-pen"></i>
                        </button>

                        <button
                            onclick="excluirPostagem(${index})"
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
    .getElementById("postagensForm")
    .addEventListener("submit", function(e){

        e.preventDefault();

        const titulo =
            document.getElementById("titulo").value;

        const conteudo =
            document.getElementById("conteudo").value;

        const categoria =
            document.getElementById("categoria").value;

        const status =
            document.getElementById("status").value;

        // EDITAR
        if(editando !== null){

            postagens[editando] = {

                titulo,
                conteudo,
                categoria,
                status

            };

            editando = null;

        } else {

            // CADASTRAR
            postagens.push({

                titulo,
                conteudo,
                categoria,
                status

            });
        }

        salvarLocalStorage();

        renderizarTabela();

        limparFormulario();
    });

    // EDITAR
    function editarPostagem(index){

        document.getElementById("titulo").value =
            postagens[index].titulo;

        document.getElementById("conteudo").value =
            postagens[index].conteudo;

        document.getElementById("categoria").value =
            postagens[index].categoria;

        document.getElementById("status").value =
            postagens[index].status;

        editando = index;
    }

    // EXCLUIR
    function excluirPostagem(index){

        let confirmar = confirm(
            "Deseja excluir esta postagem?"
        );

        if(confirmar){

            postagens.splice(index, 1);

            salvarLocalStorage();

            renderizarTabela();
        }
    }

    // LIMPAR FORM
    function limparFormulario(){

        document
        .getElementById("postagensForm")
        .reset();

        editando = null;
    }

    // INICIAR
    renderizarTabela();

</script>

</body>
</html>
