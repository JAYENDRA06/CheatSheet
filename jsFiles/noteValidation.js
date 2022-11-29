$(document).ready(function () {

    $('#author').on('author', function () {
        checkauthor();
    });
    $('#title').on('title', function () {
        checktitle();
    });
    $('#content').on('content', function () {
        checkcontent();
    });

    $('#submitbtn').click(function () {


        if (!checkauthor() && !checktitle() && !checkcontent()) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else if (!checkauthor() || !checktitle() || !checkcontent()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            $("#message").html("");
            
            var form = $('#myform')[0];
            var data = new FormData(form);

            console.log(data);
            
            $.ajax({
                type: "POST",
                url: "insertNotes.php",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                async: false,

                success: function (data) {
                    $('#message').html(data);
                },
                
            });
        }
    });
});


function checkauthor() {
    var pattern = /^[A-Za-z ]+$/;
    var user = $('#author').val();
    var validuser = pattern.test(user);
    if ($('#author').val().length < 4) {
        $('#author_err').html('author length is too short');
        return false;
    } else if (!validuser) {
        $('#author_err').html('author should be a-z ,A-Z only');
        return false;
    } else {
        $('#author_err').html('');
        return true;
    }
}

function checktitle() {
    if ($('#title').val().length < 4) {
        $('#title_err').html('title length is too short');
        return false;
    } else {
        $('#title_err').html('');
        return true;
    }
}

function checkcontent() {
    if ($('#content').val().length < 4) {
        $('#content_err').html('content length is too short');
        return false;
    } else {
        $('#content_err').html('');
        return true;
    }
}
