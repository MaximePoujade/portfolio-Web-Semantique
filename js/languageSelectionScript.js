$(".languageSelector > a").on('click', function (event) {
    event.preventDefault();

    var newLang = event.target.getAttribute('id');
    var url = window.location.pathname;
    var fileName = url.substring(url.lastIndexOf('/')+1)

    $.ajax({
        url: fileName,
        type: 'POST',
        dataType: 'HTML',
        data: {
            lang: event.target.getAttribute('id'),
        },
        success: function (data) {
            $('body').html(data)
        }
    })

    window.history.replaceState('page2', 'Title', '/portfolio web semantique/'+fileName)

    document.cookie = "lang=" + newLang
    location.reload()
});