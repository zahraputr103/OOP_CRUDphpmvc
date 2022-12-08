<?php

class siswa_model  {
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new database;
    }


    public function getAllSiswa (){
        $this->db->query(' SELECT * FROM ' . $this->table );
        return $this->db->resultSet();
    }

    public function getSiswaById($id_siswa)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id_siswa=:id_siswa ' );
        $this->db->bind('id_siswa', $id_siswa);
        return $this->db->single();
    }

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa VALUE
                    ('', :nama, :kelas, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id_siswa)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_siswa=:id_siswa " ;
        $this->db->query($query);
        $this->db->bind('id_siswa', $id_siswa);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSiswa($id_siswa)
    {
        $query = "UPDATE siswa SET 
        nama = :nama,
        kelas = :kelas,
        jurusan = :jurusan
        WHERE id_siswa = :id_siswa";

        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':jurusan', $data['jurusan']);
        $this->db->bind(':id_siswa', $data['id_siswa']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    

   

}
