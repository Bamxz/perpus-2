<?php
include_once("Database.php");

class Pemberitahuan{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function all(){
        $sql = "SELECT * FROM pemberitahuan WHERE status = 'aktif'";

        return $this->db->connect()->query($sql)->fetch_all(MYSQLI_ASSOC);
    }


    public function find($id){
        $sql = "SELECT * FROM pemberitahuan WHERE id='$id'";

        return $this->db->connect()->query($sql)->fetch_assoc();
    }

    public function create($data){
        $isi = $data["isi"];
        $status = $data["status"];

        $sql = "INSERT INTO pemberitahuan (isi, status) VALUES ('$isi','$status')";

        if($this->db->connect()->query($sql) === TRUE) {
            return "Berhasil menambah data pembertitahuan";
        }

        return "Gagal menambah data pemberitahuan";
    }

    public function update($id, $data){
        $isi = $data["isi"];
        $status = $data["status"];

        $sql = "UPDATE pemberitahuan SET isi ='$isi', status = '$status' WHERE id = '$id'";

        if($this->db->connect()-query($sql) === TRUE) {
            return "Berhasil update data pemberitahuan";
        }
        return "Gagal update data pemberitahuan";
    }

    public function delete($id){
        $sql = "DELETE FROM pemberitahuan WHERE id = '$id'";

        if($this->db->connect()->query($sql) === TRUE) {
            return "Berhasil hapus data pemberitahuan";
        }

        return "Gagal hapus data pemberitahuan";
    }
}