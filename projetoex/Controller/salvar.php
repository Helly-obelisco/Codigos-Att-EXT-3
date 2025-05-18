<?php

include_once "conexao.php";

$codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$serve = filter_input(INPUT_GET, "serve", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($codigo > 0){
                $sql = "UPDATE produtos SET prod_nome = '$nome' , prod_serve = '$serve' where prod_id = $codigo;";


        }else{
                $sql = "INSERT INTO produtos values(null, '$nome', '$serve');";

        }

$inserir = mysqli_query($link, $sql);
if ($inserir){
echo " <script>
        alert('Salvo com sucesso');
        window.location.href='../index.php';

        </script>
";
       
}else {
    echo"
    <script>
        alert('Erro ao salvar');
        window.location.href='../index.php';
        </script>";
}
mysqli_close($link);

?>