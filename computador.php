<?php 

include_once 'acesso.php';

//ATRIBUTOS
class computador {
    private $id;
    private $marca;
    private $modelo;
    private $placamae;
    private $memoriaram
    private $hd;
    private $marcahd;
    private $velocidadeprocessador;


//GETTES E SETTER
    public function getId() {
        return $this->id;
    }
    public function setId($iid) {
        $this->id = $iid;
    }

    public function getMarca() {
        return $this->marca;
    }
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($Modelo) {
        $this->modelo = $modelo;
    }

    public function getPlacaMae() {
        return $this->placamae;
    }
    public function setPlacaMae($placamae) {
        $this->placamae = $placamae;
    }

    public function getMemoriaRam() {
        return $this->memoiaram;
    }
    public function setMemoriaRam($memoriaram) {
        $this->memoriaram = $memoriaram;
    }

    public function getHD() {
        return $this->hd;
    }
    public function setHD($hd) {
        $this->hd = $hd;
    }

    public function getMarcaHD() {
        return $this->nome;
    }
    public function setMarcaHD($marcahd) {
        $this->marcahd = $marcahd;

    }
    public function setVelocidadeProcessador($velocidadeprocessador) {
        $this->VelocidadeProcessador = $velocidadeprocessador;
    }


    function salvar() {
        try {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into computador values (NULL,?,?)");
            @$sql-> bindParam(1,$this->getMarca(), PDO::PARAM_STR);
            @$sql-> bindParam(2,$this->getModelo(), PDO::PARAM_STR);
            @$sql-> bindParam(3,$this->getPlacaMae(), PDO::PARAM_STR);
            @$sql-> bindParam(4,$this->getMemoriaRam(), PDO::PARAM_STR);
            @$sql-> bindParam(5,$this->getHD(), PDO::PARAM_STR);
            @$sql-> bindParam(6,$this->getMarcaHD(), PDO::PARAM_STR);
            @$sql-> bindParam(7,$this->getVelocidadeProcessador(), PDO::PARAM_STR);

            if($sql->execute() == 1) {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc) {
            echo"Erro ao salvar registro.".$exc->getMessage();
        }
    }

    function alterar() {
        try {

            $this->conn= new Conectar();
            $sql = $this->conn->prepare("select * from computador where id = ?");
            @$sql -> bindParam(1, $this->getId(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn=null;

        }catch(PDOException $exc) {
            echo "Erro ao alterar".$exc->getMessage();
        }
    }

    function alterar2() {
        try {

            $this->conn= new Conectar();
            $sql = $this->conn->prepare("UPDATE computador SET nome = ?, estoque = ? WHERE id = ?");
            
            @$sql-> bindParam(1,$this->getMarca(), PDO::PARAM_STR);
            @$sql-> bindParam(2,$this->getModelo(), PDO::PARAM_STR);
            @$sql-> bindParam(3,$this->getPlacaMae(), PDO::PARAM_STR);
            @$sql-> bindParam(4,$this->getMemoriaRam(), PDO::PARAM_STR);
            @$sql-> bindParam(5,$this->getHD(), PDO::PARAM_STR);
            @$sql-> bindParam(6,$this->getMarcaHD(), PDO::PARAM_STR);
            @$sql-> bindParam(7,$this->getVelocidadeProcessador(), PDO::PARAM_STR);

            if($sql->execute() == 1) {
                return "Registro alterado com sucesso!";
            }

            $this->conn=null;

        }catch(PDOException $exc) {
            echo "Erro ao salvar o registro.".$exc->getMessage();
        }
    }

    function consultar() {
        try {

            $this->conn= new Conectar();
            $sql = $this->conn->prepare("select * from computador where nome like ?");
            @$sql-> bindParam(1,$this->getMarca(), PDO::PARAM_STR);
            @$sql-> bindParam(2,$this->getModelo(), PDO::PARAM_STR);
            @$sql-> bindParam(3,$this->getPlacaMae(), PDO::PARAM_STR);
            @$sql-> bindParam(4,$this->getMemoriaRam(), PDO::PARAM_STR);
            @$sql-> bindParam(5,$this->getHD(), PDO::PARAM_STR);
            @$sql-> bindParam(6,$this->getMarcaHD(), PDO::PARAM_STR);
            @$sql-> bindParam(7,$this->getVelocidadeProcessador(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn=null;

        }catch(PDOException $exc) {
            echo "Erro ao consultar".$exc->getMessage();
        }
    }

    function excluir() {
        try {

            $this->conn= new Conectar();
            $sql = $this->conn->prepare("delete from computador where id = ?");
            @$sql-> bindParam(1,$this->getMarca(), PDO::PARAM_STR);
            @$sql-> bindParam(2,$this->getModelo(), PDO::PARAM_STR);
            @$sql-> bindParam(3,$this->getPlacaMae(), PDO::PARAM_STR);
            @$sql-> bindParam(4,$this->getMemoriaRam(), PDO::PARAM_STR);
            @$sql-> bindParam(5,$this->getHD(), PDO::PARAM_STR);
            @$sql-> bindParam(6,$this->getMarcaHD(), PDO::PARAM_STR);
            @$sql-> bindParam(7,$this->getVelocidadeProcessador(), PDO::PARAM_STR);
            
            if($sql->execute() == 1) {
                return "Excluido com sucesso!";
            }
            else {
                return "Erro na exclusão.";
            }

            $this->conn=null;

        }catch(PDOException $exc) {
            echo "Erro ao excluir".$exc->getMessage();
        }
    }

    function listar() {

        try {
            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from computador order by id");
            $sql->execute();

            return $sql->fetchAll();
            $this->conn=null;
        }catch (PDOException $exc) {
            echo "Erro ao executar consulta.".$exc->getMessage();
        }
    }

}
?>