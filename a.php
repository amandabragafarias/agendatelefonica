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
        <?php

require_once 'conexao.php';

$nome = $_GET['nome'];
$telefone = $_GET['telefone'];


$sql = "INSERT INTO contato(nome,telefone) VALUES ('$nome', '$telefone')";

if (mysql_query($sql)) {
    $msg = "Contato adicionado com sucesso!";
} else {
    $msg = "Erro ao adicionar contato";
}
//mysql_close($con);
echo $msg;
?>

        </div>


        <div class="excluir">
    <center></br>
         <form action="excluir.php" method="get" id="formulario">
            <center><b>Nome:</b> <p><input type="text" name="nome" size="20" class="todos"/><br/></center>
            <p><input type="submit" value="excluir"/>
        </form>

        </div>
         <div class="buscar">
    <center></br>
         <form action="buscar.php" method="get" id="formulario">
            <center><b>Nome:</b> <p><input type="text" name="nome" size="20" class="todos"/><br/></center>
            <p><input type="submit" value="buscar"/>
        </form>

        </div>
        <div class="atualizar">
         <form action="atualizar.php" method="get" id="formulario">

   <center><b>Nome:</b> <p><input type="text" name="nome" size="20"class="todos" /><br/></center>
  <center> <b>Novo Nome:</b> <p><input type="text" name="novoNome" size="20"class="todos" /><br/></center>
          
          <center>  <b> Novo telefone: </b><p><input type="text" name="telefone"size="20"class="todos"/> </center>

           <center> <input type="submit" value="atualizar"/></center>
        </form>
    </div>

      

    </body>
</html>