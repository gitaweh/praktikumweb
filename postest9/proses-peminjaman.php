<?php

class Perpustakaan {

  private $nama;
  private $nis;
  private $judul;

  public function __construct($nama, $nis, $judul) {
    $this->nama = $nama;
    $this->nis = $nis;
    $this->judul = $judul;
  }

  public function getNama() {
    return $this->nama;
  }

  public function setNama($nama) {
    $this->nama = $nama;
  }

  public function getNis() {
    return $this->nis;
  }

  public function setNis($nis) {
    $this->nis = $nis;
  }

  public function getJudul() {
    return $this->judul;
  }

  public function setJudul($judul) {
    $this->judul = $judul;
  }

  public function pinjamBuku() {
    // Proses peminjaman buku
    // ...
  }

  public function kembalikanBuku() {
    // Proses pengembalian buku
    // ...
  }
}

class Member extends Perpustakaan {

  public function __construct($nama, $nis) {
    parent::__construct($nama, $nis, null);
  }

  public function getJudul() {
    // Jika judul buku belum ada, maka judul buku adalah null
    return $this->judul ?? null;
  }
}

$perpustakaan = new Perpustakaan("Adam", "10527292", "Buku 1");

// Cetak nama member
echo $perpustakaan->getNama();

// Cetak NIS member
echo $perpustakaan->getNis();

// Cetak judul buku yang dipinjam
echo $perpustakaan->getJudul();

// Pinjam buku
$perpustakaan->pinjamBuku("Buku 2");

// Cetak judul buku yang dipinjam
echo $perpustakaan->getJudul();

// Kembalikan buku
$perpustakaan->kembalikanBuku();

// Cetak judul buku yang dipinjam
echo $perpustakaan->getJudul();

$member = new Member("Jahe", "10521872");

// Cetak nama member
echo $member->getNama();

// Cetak NIM member
echo $member->getNis();

// Cetak judul buku yang dipinjam
echo $member->getJudul();
