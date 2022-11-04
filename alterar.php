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
        <form name="cliente" method="POST" action="alterar_2.php">

            <fieldset id="a">
                <legend><b>Consulta de computador: </b></legend>
                <p>Id computador: <input name="txtid" type="text" size="20" maxlength="5" placeholder="Id do Computador" /></p>
            </fieldset>

            <br>

            <fieldset id="b">
                <legend><b>Opções: </b></legend>
                <input name="btnEnviar" type="submit" value="Consultar" > &nbsp;&nbsp;
                <input name="btnlimpar" type="reset" value="Limpar" > &nbsp;&nbsp;
            </fieldset>
            <br>
            <center>
            <button><a href="menuComputador.html">Voltar</a></button>
            
        </form>
    </body>
</html>