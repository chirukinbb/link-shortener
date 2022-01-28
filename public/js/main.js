(function ($) {
    'use strict'

    $('button').on('click', function (e) {
        e.preventDefault()

        $.post(
            $(this).closest('form').attr('action'),
            {
                url: $('input[name=url]').val(),
                _token: $('input[name=_token]').val()
            },
            function (res) {
                $('.link').removeClass('d-none')
                $('.link').find('p').text(res)

                $('input[name=url]').val('')
            }
        )
    })
}) (jQuery)
