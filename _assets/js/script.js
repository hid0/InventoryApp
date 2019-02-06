function functionPass() {
    var x = document.getElementById('pass');
    if (x.type === 'password') {
        x.type = 'text';
        console.log('berhasil');
    } else {
        x.type = 'password';
    }
}

$(document).ready( function() {
    $('.sidenav').sidenav();


    var navTop = $('nav').offset().top;

    $(window).scroll( function() {
        var scrollTop = $(window).scrollTop();

        if(scrollTop > navTop) {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    })

    // $(window).on('scroll', function() {
    //     if($(window).scrollTop()) {
    //         $('nav').addClass('sticky');
    //     } else {
    //         $('nav').removeClass('sticky');
    //     }
    // });


});

function openSearch() {
    document.getElementById('myOverlay').style.display = "block";
}

function closeSearch() {
    document.getElementById('myOverlay').style.display = "none";
}
