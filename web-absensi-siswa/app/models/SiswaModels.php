<?php 
    class SiswaModels {
        private $table = 'tb_siswa';
        private $db_connect;

        function __construct() {
            $this->db_connect = new Database;
        }

        // menampilkan seluruh data
        public function getSiswaData() {
            $query = "SELECT tb_siswa.id, tb_siswa.NISN, tb_siswa.Nama, tb_siswa.Kelas FROM tb_siswa INNER JOIN tb_kelas ON 
            tb_siswa.id_kelas = tb_kelas.id";

            $this->db_connect->query($query);
            return $this->db_connect->resultAll();
        }

        // menampilkan data sesuai ID
        public function getSiswaID($id) {
            $query = "SELECT * FROM $this->table WHERE id = $id";
            $this->db_connect->query($query);
            return $this->db_connect->resultOne();
        }

        // menambah data 
        public function addSiswaData($inputNISN, $inputNama, $inputKelas) {
            $nis = $inputNISN;
            $nama = $inputNama;
            $kelas = $inputKelas;

            $query = "INSERT INTO $this->table (NISN, Nama, Kelas) VALUES 
            (:NISN, :Nama, :Kelas)";

            $this->db_connect->query($query);
            $this->db_connect->binding(':NISN', $nis);
            $this->db_connect->binding(':Nama', $nama);
            $this->db_connect->binding(':Kelas', $kelas);
            $this->db_connect->execution();
            
            return $this->db_connect->rowCount(); 
        }

        // merubah data
        // public function editSiswaData($id, $inputNISN, $inputNama, $inputKelas) {
        //     $nis = $inputNISN;
        //     $nama = $inputNama;
        //     $kelas = $inputKelas;

        //     $query = "UPDATE $this->table SET NISN = :NISN, Nama = :Nama, Kelas = :Kelas WHERE id = $id";
            
        //     $this->db_connect->query($query);
        //     $this->db_connect->binding(':NISN', $nis);
        //     $this->db_connect->binding(':Nama', $nama);
        //     $this->db_connect->binding(':Kelas', $kelas);
        //     $this->db_connect->execution();
            
        //     return $this->db_connect->rowCount(); 
        // }

        // // menghapus data
        // public function deleteSiswaData($id) {
        //     $query = "DELETE FROM $this->table WHERE id = $id";
        //     $this->db_connect->query($query);
        //     $this->db_connect->execution();

        //     return $this->db_connect->rowCount();
        // }
    }

?>