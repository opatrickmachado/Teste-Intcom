<html>
    <head>
        <title>Estoque Intcom Solutions.</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="menuComputador.css">
    </head>
    <body>
        <header>
            <img height="19%" src="https://media-exp1.licdn.com/dms/image/C4D0BAQE3m1nmoKj_Qg/company-logo_200_200/0/1519906412661?e=1675900800&v=beta&t=dv_xOeEWFv0xnnRw6tdTJyjH4QE0Z5HHeNNWqUzfJaM">
            <h1>Bem vindo, Intcom Solutions.</h1>
            <h2>O que você deseja fazer hoje?</h2>
        </header>
    <br>
        <form name="cliente" method="POST" action="">

            <fieldset id="a">
                <legend><b>Consulta de computadores: </b></legend>
                <p>Marca Computador: <input name="txtmarca" type="text" size="20" maxlength="40" placeholder="Marca do Computador" /></p>
                <p>Modelo Computador: <input name="txtmodelo" type="text" size="20" maxlength="40" placeholder="Modelo do Computador" /></p>
                <p>Placa-Mãe: <input name="txtplacamae" type="text" size="20" maxlength="40" placeholder="Placa-Mãe" /></p>
                <p>Memória RAM: <input name="txtmemoriaram" type="text" size="20" maxlength="40" placeholder="Memória RAM" /></p>
                <p>HD: <input name="txthd" type="text" size="20" maxlength="40" placeholder="HD" /></p>
                <p>Marca do HD: <input name="txtmarcahd" type="text" size="20" maxlength="40" placeholder="Marca do HD" /></p>
                <p>Velocidade do Processador: <input name="txtvelocidadeprocessador" type="text" size="20" maxlength="40" placeholder="Velocidade do Processador" /></p>
            </fieldset>

            <br>

            <fieldset id="b">
                <legend><b>Opções: </b></legend>
                <input name="btnEnviar" type="submit" value="Consultar" > &nbsp;&nbsp;
                <input name="btnlimpar" type="reset" value="Limpar" > &nbsp;&nbsp;
            </fieldset>

            <?php 

            extract($_POST, EXTR_OVERWRITE);
                if(isset($btnEnviar)) {
                    include_once 'computador.php';
                    $p = new computador();
                    $p->setNome($txtnome.'%');
                    $pro_bd = $p->consultar();
                    echo "<h3>Resultados encontrados:</h3><hr>";
                    foreach($pro_bd as $pro_mostrar) {
                        ?> <br>
                        <b> <?php echo "ID: ". $pro_mostrar[0]?></b>
                        <b> <?php echo "Nome: ". $pro_mostrar[1]?></b>
                        <b> <?php echo "Estoque: ". $pro_mostrar[2]?></b>
                        <br>
                        <?php
                    }
            }
            ?>

            <br>
            <center>
            <button><a href="menuComputador.html">Voltar</a></button>
            
        </form>
    </body>
</html>