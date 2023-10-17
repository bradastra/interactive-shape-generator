jQuery(document).ready(function($) {
    $('#isg_form').on('submit', function(e) {
        e.preventDefault();
        var shape = $(this).find('select[name="shape"]').val();
        
        $('#isg_shape_display').html(''); // Clear previous shape

        if(shape == 'circle') {
            $('#isg_shape_display').append('<div class="isg_circle"></div>');
        } else if(shape == 'square') {
            $('#isg_shape_display').append('<div class="isg_square"></div>');
        } else if(shape == 'triangle') {
            $('#isg_shape_display').append('<div class="isg_triangle"></div>');
        }
    });
});
