$(function () {
    $('#addCommentForm').bind('submit', function () {
        $('.error').remove();
        $.ajax({
            type: 'post',
            url: "submit.php",
            dataType: 'json',
            data: $(this).serialize(),
            success: function (msg) { //Данные отправлены успешно
                if (msg.success) {

                    $(msg.html).hide().insertAfter('#addCommentContainer').slideDown("slow");

                    $('#addCommentForm')[0].reset();
                } else {
                    $.each(msg.errors, function (k, v) {
                        $('label[for=' + k + ']').append('<span class="error">' + v + '</span>');
                    });
                }
            }
        });
        return false;
    });
});
