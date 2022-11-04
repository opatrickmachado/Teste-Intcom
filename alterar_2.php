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

            <fieldset id="a">
                <legend><b>Ateração de computadores: </b></legend>

            <br>

            <?php 
                $txtid=$_POST["txtid"];
                    include_once 'computador.php';
                    $p = new computador();
                    $p->setId($txtid);
                    $pro_bd=$p->alterar();
            ?>

            <br><form name="cliente2" method="POST" action="">
                <?php
                    foreach($pro_bd as $pro_mostrar) {
                ?>

                <input type="hidden" name="txtid" size="5" value='<?php echo $pro_mostrar[0]?>'>
                <b><?php echo "Marca: " ;?></b>
                <input type="text" name="txtmarca" size="25" value='<?php echo $pro_mostrar[1]?>'>

                <br><br>
                <b><?php echo "Modelo: " ;?></b>
                <input type="text" name="txtmodelo" size="25" value='<?php echo $pro_mostrar[2]?>'>

                <b><?php echo "Placa-Mãe: " ;?></b>
                <input type="text" name="txtplacamae" size="10" value='<?php echo $pro_mostrar[3]?>'>

                <b><?php echo "Memória RAM: " ;?></b>
                <input type="text" name="txtmemoriaram" size="25" value='<?php echo $pro_mostrar[4]?>'>

                <b><?php echo "HD: " ;?></b>
                <input type="text" name="txthd" size="25" value='<?php echo $pro_mostrar[5]?>'>

                <b><?php echo "Marca HD: " ;?></b>
                <input type="text" name="txtmarcahd" size="25" value='<?php echo $pro_mostrar[6]?>'>

                <b><?php echo "Velocidade do Processador: " ;?></b>
                <input type="text" name="txtvelocidadeprocessador" size="25" value='<?php echo $pro_mostrar[7]?>'>
                <br><br>
                <input name="btnalterar" type="submit" value="Alterar">

                <?php 
                    } 
                ?>
            </form>
            </fieldset>

            <?php
            
            extract($_POST, EXTR_OVERWRITE);
                if(isset($btnalterar)) {
                    include_once 'computador.php';
                    $pro = new computador();
                    $pro->setMarca($txtmarca);
                    $pro->setModelo($txtmodelo);
                    $pro->setPlacaMae($txtplacamae);
                    $pro->setMemoriaRam($txtmemoriaram);
                    $pro->setHD($txthd);
                    $pro->setMarcaHD($txtmarcahd);
                    $pro->setVelocidadeProcessador($txtvelocidadeprocessador);
                    $pro_bd=$pro->alterar2();
                    echo "<br><br><h3>",$pro->alterar2() , "</h3>";
                    header("location:alterar.php");
            }

            ?>

            <br>
            <center>
            <button><a href="menuComputador.html">Voltar</a></button>
    </body>
</html>