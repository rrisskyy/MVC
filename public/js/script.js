$(function() {
    $('.tambahDataMember').on('click', function(){
        $('#judulModal').html('+ Tambah Member');
        $('.modal-footer button[type=submit]').html('Tambah!');
        $('#Name').val(''),
        $('#Power').val(''),
        $('#Magic').val(''),
        $('#Grimoire').val('')
        
        // $('modal-body form').attr('action', 'http://localhost/phpmvc/public/blackbulls/tambah');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Ubah data Member');
        $('.modal-footer button[type=submit]').html('Ubah!')
        $('.modal-body form.form-signin').attr('action', 'http://localhost/phpmvc/public/blackbulls/ubah');
        const Rank = $(this).data('rank');
        $.ajax({
            url: 'http://localhost/phpmvc/public/blackbulls/getubah',
            data: {Rank: Rank},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                  
                $('#Name').val(data.Name),
                $('#Power').val(data.Power),
                $('#Magic').val(data.Magic),
                $('#Grimoire').val(data.Grimoire)                
                if (data.Position == "Captain") {
                    $('#Captain').attr('checked', true);
                } else if (data.Position == "Vice Captain") {
                    $('#viceCaptain').attr('checked', true);
                } else {
                    $('#member').attr('checked', true);
                }
                $('#Rank').val(data.Rank)
            } 
            
        });
    });

    $('.detail').on('click', function(){
        $('#judulModal').html('Detail Member');
        const Rank = $(this).data('rank');
        $.ajax({
            url: 'http://localhost/phpmvc/public/blackbulls/getubah',
            data: {Rank: Rank},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                  
                $('#Name').val(data.Name),
                $('#Power').val(data.Power),
                $('#Magic').val(data.Magic),
                $('#Grimoire').val(data.Grimoire)                
                if (data.Position == "Captain") {
                    $('#Captain').attr('checked', true);
                } else if (data.Position == "Vice Captain") {
                    $('#viceCaptain').attr('checked', true);
                } else {
                    $('#member').attr('checked', true);
                }
                $('#Rank').val(data.Rank)
            } 
            
        });
    });


});