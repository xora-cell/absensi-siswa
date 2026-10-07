<?php 
    class KelasModels {
        private $table = 'tb_kelas';
        private $db_connect;

        function __construct() {
            $this->db_connect = new Database;
        }

        public function getKelasData() {
            $query = "SELECT tb_kelas.id, tb_kelas.nama_kelas FROM tb_kelas";
            
            $this->db_connect->query($query);
            return $this->db_connect->resultAll();
        }

        public function getKelasID($id) {
            $query = "SELECT * FROM $this->table WHERE id = :id";
            $this->db_connect->query($query);
            return $this->db_connect->resultOne();
        }

        public function addKelasData($inputnama_kelas) {
            $kelas = $inputnama_kelas;

            $query = "INSERT INTO $this->table (nama_kelas) 
            VALUES (:nama_kelas)";

            $this->db_connect->query($query);
            $this->db_connect->binding(':nama_kelas', $kelas);
            $this->db_connect->execution();
            
            return $this->db_connect->rowCount(); 
        }

        public function editKelasData($id, $inputnama_kelas) {
            $kelas = $inputnama_kelas;

            $query = "UPDATE $this->table SET nama_kelas = :nama_kelas WHERE id = $id";

            $this->db_connect->query($query);
            $this->db_connect->binding(':nama_kelas', $kelas);
            $this->db_connect->execution();
            
            return $this->db_connect->rowCount(); 
        }

        public function deleteKelasData($id) {
            $query = "DELETE FROM $this->table WHERE id = $id";
            $this->db_connect->query($query);
            $this->db_connect->execution();

            return $this->db_connect->rowCount();
        }
    }

?>