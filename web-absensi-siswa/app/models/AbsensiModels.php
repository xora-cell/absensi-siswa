<?php
    class AbsensiModels {
        private $table = 'tb_absensi';
        private $db_connect;

        function __construct() {
            $this->db_connect = new Database;
        }

        // menampilkan seluruh data
        public function getAbsensiData() {
            $query = "SELECT tb_absensi.id, tb_absensi.siswa_id, tb_absensi.tanggal, tb_absensi.status, tb_absensi.id_kelas FROM tb_absensi INNER JOIN tb_kelas ON tb_kelas.kelas_id = tb_kelas.id";

            $this->db_connect->query($query);
            return $this->db_connect->resultAll();
        }

        //  menampilkan seluruh data
        public function getAbsensiID($id) {
            $query = "SELECT * FROM $this->table WHERE id = $id";
            $this->db_connect->query($query);
            return $this->db_connect->resultOne();
        }

        // menambah data 
        public function addKelasData($inputSiswa_id, $inputKelas, $inputTanggal, $inputStatus) {
            $siswa_id = $inputSiswa_id;
            $kelas = $inputKelas;
            $tanggal = $inputTanggal;
            $status = $inputStatus;

            $query = "INSERT INTO $this->table (siswa_id, kelas, tanggal, status) VALUES 
            (:siswa_id, :kelas, :tanggal, :status)";

            $this->db_connect->query($query);
            $this->db_connect->binding(':siswa_id', $siswa_id);
            $this->db_connect->binding(':kelas', $kelas);
            $this->db_connect->binding(':tanggal', $tanggal);
            $this->db_connect->binding(':status', $status);
            $this->db_connect->execution();
            
            return $this->db_connect->rowCount(); 
        }

        // merubah data
        public function editAbsensiData($id, $inputSiswa_id, $inputKelas, $inputTanggal, $inputStatus) {
            $siswa_id = $inputSiswa_id;
            $kelas = $inputKelas;
            $tanggal = $inputTanggal;
            $status = $inputStatus;

            $query = "UPDATE $this->table SET siswa_id = :siswa_id, kelas = :kelas, 
            tanggal = :tanggal, status = :status WHERE id = $id";
            
            $this->db_connect->query($query);
            $this->db_connect->binding(':siswa_id', $siswa_id);
            $this->db_connect->binding(':kelas', $kelas);
            $this->db_connect->binding(':tanggal', $tanggal);
            $this->db_connect->binding(':status', $status);
            $this->db_connect->execution();
            
            return $this->db_connect->rowCount(); 
        }

        // menghapus data
        public function deleteAbsensiData($id) {
            $query = "DELETE FROM $this->table WHERE id = $id";
            $this->db_connect->query($query);
            $this->db_connect->execution();

            return $this->db_connect->rowCount();
        }
    }

