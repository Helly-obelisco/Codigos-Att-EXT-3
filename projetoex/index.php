<?php

    include_once "Controller/conexao.php";




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetoex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col topo">
                <h2>Gerenciamento de serviços</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="Imagens/ilustra.png" alt="imagem"class="container-fluid">

            </div>
            <div class="col-8">
                <form method="get" action="Controller/salvar.php">,
                   <div class="mt-3 form-floating">
                    <input type="number" class="form-control desabilitado" id="codigo" name="codigo" readonly value="<?php echo filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_SPECIAL_CHARS);?>">
                    <label for="codigo" class="form-label">Codigo</label>
                   </div>
                   <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="nome" name="nome" 
                   value="<?php echo filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);?>" >
                    <label for="nome" class="form-label">Nome do serviço</label>
                   </div>
                   <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="serve" name="serve"
                  value="<?php echo filter_input(INPUT_GET, "serve", FILTER_SANITIZE_SPECIAL_CHARS);?>" >
                    <label for="serve" class="form-label">Status</label>
                   </div>
                   <div class="mt-3 form-floating">
                    <div class="row"> 
                        <div class="col">
                                <a href="index.php">
                            <button type="button" class="btn btn-outline-warning form-control botaoNovo"> Novo
                                </button>
                                </a>



                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-success botaoSalvar"> Salvar
                                </button>

                        </div>
                    </div>
                   </div>
                    
                </form>


            </div>

        </div>

    </div>
    <div class="container mt-3">
         <div class="row">
            <div class="col">
                <H2> Serviços Cadastrados </H2>
            </div>
         </div>
         <div class="row">
            <div class="col">
                <table class="table table-group-divider table-hover">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nome do serviço</th>
                            <th>Status</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "Select * from produtos";
                        $pesquisar = mysqli_query($link, $sql);
                        while ($linha = $pesquisar->fetch_assoc()){
                            echo "
                                    <tr>
                                        <td>".$linha['prod_id']."</td>
                                        <td>".$linha['prod_nome']."</td>
                                        <td>".$linha['prod_serve']."</td>
                                        <td>
                                        <a href='?
                                        codigo=".$linha['prod_id']."&
                                        nome=".$linha['prod_nome']."&
                                        serve=".$linha['prod_serve']."'>
                                            <img src='Imagens/editar.png' Class='imgTabela'>
                                        </td>
                                        <td>
                                        <a href='Controller/excluir.php?codigo=".$linha['prod_id']."'>
                                            <img src='Imagens/delete.png' Class='imgTabela'>
                                        </td>
                                    </tr>";
                            
                        }
                        


                        ?>
                    
                    </tbody>
                </table>
            </div>
         </div>

    </div>

        <div class="container mt-4">
            <div class=" text-whinte text-center p-3 cabe"
    <h2>Feito Por Helly Fabio Tavares Franco</h2>
    <p>Atividade feita para o projeto de extensão.</p>
    
        </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
