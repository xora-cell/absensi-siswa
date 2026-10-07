<?php 
    class DashboardModels {
        private $tableSiswa = 'tb_siswa';
        private $tableKelas = 'tb_kelas';
        private $tableAbsensi = 'tb_absensi';
        private $db_connect;

        function __construct() {
            $this->db_connect = new Database();
        }

        public function jumlahAbsensi() {
            $query = "SELECT * FROM $this->tableAbsensi";
            $this->db_connect->query($query);
            $this->db_connect->execution();
            return $this->db_connect->rowCount();
        }
        public function jumlahSiswa() {
            $query = "SELECT * FROM $this->tableSiswa";
            $this->db_connect->query($query);
            $this->db_connect->execution();
            return $this->db_connect->rowCount();
        }
        public function jumlahKelas() {
            $query = "SELECT * FROM $this->tableKelas";
            $this->db_connect->query($query);
            $this->db_connect->execution();
            return $this->db_connect->rowCount();
        }
    }