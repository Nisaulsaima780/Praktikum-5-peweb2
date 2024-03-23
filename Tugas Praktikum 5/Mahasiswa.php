<?php

class Mahasiswa {
    private $nama;
    private $nilai;
    private $nim;

    public function __construct($nama, $nilai,$nim) {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function getNim() {
        return $this->nim;
    }

    public function hasilLulus() {
        return $this->nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
    }

    public function predikat() {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } else {
            return 'D';
        }
    }
}
