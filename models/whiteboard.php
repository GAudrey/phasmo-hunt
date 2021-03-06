<?php

require_once 'models/model.php';

class Whiteboard extends Model{

    private $obj1;
    private $obj2;
    private $obj3;
    private $firstn;
    private $lastn;
    private $resp;

    function __construct($obj1, $obj2, $obj3, $firstn, $lastn, $resp){
        $this->obj1 = $this->getObjByID($obj1);
        $this->obj2 = $this->getObjByID($obj2);
        $this->obj3 = $this->getObjByID($obj3);
        $this->firstn = $firstn;
        $this->lastn = $lastn;
        $this->resp = $resp;
    }

    public function getObj1(){
        return $this->obj1;
    }

    public function getObj2(){
        return $this->obj2;
    }

    public function getObj3(){
        return $this->obj3;
    }

    public function getFirstn(){
        return $this->firstn;
    }

    public function getLastn(){
        return $this->lastn;
    }

    public function getResp(){
        return $this->resp;
    }

    public function getObjByID($idObj){
        $sql = "SELECT objective FROM t_objectives WHERE id_objective=?";
        $objective = $this->executeRequest($sql, array($idObj));
        return $objective->fetch();
    }

}

?>
