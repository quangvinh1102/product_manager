<?php 
class m_nav extends DB{

    public function getNav(){
        $sql = "SELECT * FROM nav";
        return $this->get_list($sql);
    }

    public function addNav($name) {
        $sql = "INSERT INTO `nav` VALUES (null,'$name')";
        return $this->query($sql);
    }

    public function updateNav($id, $name) {
        $sql = "UPDATE `nav` SET `id`='$id',`name`='$name' WHERE id = $id";
        return $this->query($sql);
    }

    public function deleteNav($id)
    {
        $sql = "DELETE FROM `nav` WHERE id = $id";

        return $this->query($sql);
    }

    public function getNavBy($id) {
        $sql = "SELECT * FROM `nav` WHERE id = $id";
        return $this->get_row($sql);
    }

}