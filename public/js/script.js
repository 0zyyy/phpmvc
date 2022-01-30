$(function(){
    $('.tambahData').on('click',function(){
        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    })
    $('.modalUbah').on('click',function(){
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/ubah')
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(response){
                $('#nama').val(response.nama);
                $('#nrp').val(response.nrp);
                $('#email').val(response.email);
                $('#jurusan').val(response.jurusan);
                $('#id').val(response.id);
            }
         });
    })
})