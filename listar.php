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
        
    <font face="Century Gothic" size="6"></font><h2>Relação de computadores cadastrados.</h2></center>
    <br>
    <font size="4">

    <?php 
    
    include_once 'computador.php';
    $p = new computador();
    $pro_bd=$p->listar();
    ?>

    <b> Marca &nbsp;&nbsp;&nbsp;&nbsp; Modelo &nbsp;&nbsp;&nbsp;&nbsp; Placa-Mãe &nbsp;&nbsp;&nbsp;&nbsp; Memória RAM &nbsp;&nbsp;&nbsp;&nbsp; HD &nbsp;&nbsp;&nbsp;&nbsp; Marca do HD &nbsp;&nbsp;&nbsp;&nbsp; Velocidade do Processador &nbsp;&nbsp;&nbsp;&nbsp;</b>

    <?php
    foreach($pro_bd as $pro_mostrar) {

    ?>

    <br><br>

    <b> <?php echo $pro_mostrar[0]; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $pro_mostrar[1]; ?>     &nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo $pro_mostrar[2]; ?>

    <?php 
    }
    echo "<br><br><button><a href = 'menuComputador.html'>Voltar</a></button>";?>
    </body>
</html>