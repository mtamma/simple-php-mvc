$(function () {
    $('.showAddModal').on('click', function () {
        $('#modalTitle').html('Add Student Data');
        $('.modal-footer button[type=submit]').html('Add Data');
        $('.modal-content form').attr('action', 'http://localhost/simple-php-mvc/public/student/add');
        $('#name').val('');
        $('#email').val('');
        $('#address').val('');
    });
    $('.showEditModal').on('click', function () {
        $('#modalTitle').html('Edit Student Data');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-content form').attr('action', 'http://localhost/simple-php-mvc/public/student/edit');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/simple-php-mvc/public/student/getedit',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (result) {
                $('#name').val(result.name);
                $('#email').val(result.email);
                $('#address').val(result.address);
                $('#id').val(result.id);
            }
        })
    });
});