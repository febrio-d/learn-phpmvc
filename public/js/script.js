$(function() {
    $('.addButton').on('click', function() {
        $('#formModalLabel').html('Add New Student');
            $('#inputId').val('');
            $('#inputName').val('');
            $('#inputCid').val('');
            $('#inputEmail').val('');
            $('#inputMajor').val('');
    });
    $('.editModal').on('click', function() {
        $('#formModalLabel').html('Edit Student');
        $('.modal-body form').attr('action', 'http://localhost/learn-phpmvc/public/students/edit')

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/learn-phpmvc/public/students/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#inputId').val(data.id);
                $('#inputName').val(data.name);
                $('#inputCid').val(data.cid);
                $('#inputEmail').val(data.email);
                $('#inputMajor').val(data.major);
            }
        })
    });
});