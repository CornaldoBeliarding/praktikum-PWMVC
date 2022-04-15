$(function() {

    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Tambah Data Mahasiswa dan Matakuliah');
        $('.modal-footer button[type=submit]').html('Tambah Data Matakuliah');
        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/php-mvc-main/public/matakuliah/gettambah',
            data: {id : id},
            method: 'post',
            dataType : 'json',
            success: function(data) {
                $('#matakuliah').val(data.kode_mk);
            }


        });
        
    });
});