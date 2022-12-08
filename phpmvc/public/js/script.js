$(function () {
  $('.tombolData').on('click', function () {
    $('#forModalLabel').html('Tambah Data siswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });
  $('.tampilUbahSiswa').on('click', function () {
    $('#forModalLabel').html('Ubah Data Siswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah');
    
    const id_siswa = $(this).data("id_siswa");
    

    //jalankan ajax
    $.ajax({
      url: 'http://localhost/phpmvc/public/siswa/getubah',
      data: {id_siswa : id_siswa},
      method: 'post',
      dataType: 'json',
      success: function (data){
            $('#nama').val(data.nama);
            $('#kelas').val(data.kelas);
            $('#jurusan').val(data.jurusan);
            $('#id_siswa').val(data.id_siswa);
      }
    });
  });
});