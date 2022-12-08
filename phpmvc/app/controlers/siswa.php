<?php
class siswa extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('siswa_model')->getAllSiswa();
        $this->view ('templates/header', $data);
        $this->view ('siswa/index', $data);
        $this->view ('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Siswa';
        $data['siswa'] = $this->model('siswa_model')->getSiswaById($id);
        $this->view ('templates/header', $data);
        $this->view ('siswa/detail', $data);
        $this->view ('templates/footer');
    }

    public function tambah()
    {
        if ( $this->model('siswa_model')->tambahDataSiswa($_POST) > 0 ) {
            flasher::setFlash('berhasil ', ' ditambahkan', 'success');
            header ('location: ' . ARARA . '/siswa');
            exit;
        } else {
            flasher::setFlash('gagal ', ' ditambahkan', 'danger');
            header ('location: ' . ARARA . '/siswa');
            exit;
        }
    }

    public function hapus($id_siswa)
    {
        if ( $this->model('siswa_model')->hapusDataSiswa($id_siswa) > 0 ) {
            flasher::setFlash('berhasil ', ' dihapus', 'success');
            header ('location: ' . ARARA . '/siswa');
            exit;
        } else {
            flasher::setFlash('gagal ', ' dihapus', 'danger');
            header ('location: ' . ARARA . '/siswa');
            exit;
        }
    }
    
    public function getubah()
    {
        echo json_encode($this->model('siswa_model')->getSiswaById($_POST['id_siswa']));
    }

    public function ubah()
    {
        if ( $this->model('siswa_model')->ubahDataSiswa($id_siswa) > 0 ) {
            flasher::setFlash('berhasil ', ' diubah', 'success');
            header ('location: ' . ARARA . '/siswa');
            exit;
        } else {
            flasher::setFlash('gagal ', ' diubah', 'danger');
            header ('location: ' . ARARA . '/siswa');
            exit;
        }
    }

}