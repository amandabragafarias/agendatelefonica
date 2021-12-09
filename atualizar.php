<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./css/style.css" type="text/css">
    </head>
    <body>

<div class="Inserir">
    <center></br>
       

        </div>
        <div class="inserir2">
    <center></br>
        <img src="./css/img/icon.png" width="60" height="80">
        <form action="inserir.php" method="get" id="formulario">
            <center><b>Nome:</b> <p><input type="text" name="nome" size="20" class="todos"/><br/></center>
           <b> Telefone: </b><p><input type="text" name="telefone"size="20"class="todos"/><br/>
            <p><input type="submit" value="salvar"/>
        </form>

        </div>


        <div class="excluir">
    <center></br>
        <img src="./css/img/vv.png" width="65" height="80">
         <form action="excluir.php" method="get" id="formulario">
            <center><b>Nome:</b> <p><input type="text" name="nome" size="20" class="todos"/><br/></center>
            <p><input type="submit" value="excluir"/>
        </form>

        </div>
         <div class="buscar">
    <center></br>
        <img src="./css/img/hh.png" width="60" height="80">
         <form action="buscar.php" method="get" id="formulario">
            <center><b>Nome:</b> <p><input type="text" name="nome" size="20" class="todos"/><br/></center>
            <p><input type="submit" value="buscar"/>
        </form>

        </div>
        <div class="atualizar">

            <center><img src="./css/img/fss.png" width="60" height="80"></center>
            <?php
require_once 'conexao.php';

$nome = $_GET['nome'];
$novoNome = $_GET['novoNome'];
$telefone = $_GET['telefone'];


$sql = "update Contato set Nome='$novoNome', Telefone='$telefone' where Nome='$nome'";
mysql_query($sql);

if (mysql_query($sql)) {
    $msg = "atualizado com sucesso!";
} else {
    $msg = "Erro ao atualizar!";
}
//mysql_close($con);
echo $msg;
?>


    </div>

      

    </body>
</html>