
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
        <?php
require_once 'conexao.php';

$nome = $_GET['nome'];

$sql = "delete from contato where nome='$nome'";
mysql_query($sql);
?>
        <img src="./css/img/vv.png" width="65" height="80">
         
        
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
         <form action="atualizar.php" method="get" id="formulario">


   <center><b>Nome:</b> <p><input type="text" name="nome" size="20"class="todos" /><br/></center>
  <center> <b>Novo Nome:</b> <p><input type="text" name="novoNome" size="20"class="todos" /><br/></center>
          
          <center>  <b> Novo telefone: </b><p><input type="text" name="telefone"size="20"class="todos"/> </center>

           <center> <input type="submit" value="atualizar"/></center>
        </form>
    </div>

      

    </body>
</html>