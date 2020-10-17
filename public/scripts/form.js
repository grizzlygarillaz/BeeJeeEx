$(document).ready(function (event) {
    $('form').submit(function () {
        let json
        event.preventDefault
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            cache: false,
            success: function (result) {
                json = JSON.parse(result)
                if (json.url)
                {
                    window.location.href = json.url
                }
                else
                {
                    alert(json.status + '\n\n' + json.message)
                    window.location.href = '/'
                }
            }
        })
    })

    $('#addTask').on('click', function () {
        $('#taskModal').modal('toggle')
    })


})