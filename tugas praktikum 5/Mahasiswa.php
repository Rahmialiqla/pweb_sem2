<?php

class Mahasiswa {
    private $nama;
    private $nilai;
    private $nim;
    private $matkul;

    public function __construct($nama, $nilai, $nim, $matkul) {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->nim = $nim;
        $this->matkul = $matkul;
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

    public function getMatkul() {
        return $this->matkul;
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
