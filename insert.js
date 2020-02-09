// saat document web ready loading

$(document).ready(function(){
    //saat tombol simpan diclick
    $("#tombol-simpan").click(function(){

        //menyimpan value input variabel data dari ID from-user

        var data = $('#form-berita').serialize();

        //alert (data);
        //plugin ajax

        $.ajax({
            type: 'post',
            data: data,
            url: "insert.php",
            success: function() {
                $('#hasil').load("tampil.php");
            }
        });
    });

    $('#hasil').load("tampil.php");
});
