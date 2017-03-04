/**
 * Created by Yousra-Pc on 21/12/2016.
 */
/*** header *****/
/* changer la couleur en click */
$(document).ready(function() {
    $(".resume-header").click(function () {
       $(this).css('background','white');
        $('.resume-header>li>a>div').css('color', 'lightgrey');
        $('.resume-header>li>a>div').attr('color', 'lightgrey');

    })
    $(".portfolio-header").click(function () {
        $(this).css('background','white');
        $('.portfolio-header>li>a>div').css('color', 'lightgrey');
    })
    $(".contact-header").click(function () {
        $(this).css('background','white');
        $('.contact-header>li>a>div').css('color', 'lightgrey');
    })
});


/**** page de cv *****/
/* masquer le contenu de la 1ére partie */
$(document).ready(function() {
    $("#minus1-id").click(function () {
        var $div1 = $('#cont1-id')
        if ($div1.is(':visible')) {
            $div1.slideUp("fast");
            $(this).find('i').toggleClass('fa-minus fa-plus')
        } else {
            $div1.slideDown("fast");
            $(this).find('i').toggleClass('fa-plus fa-minus')

        }
    })
});

/* masquer le contenu de la 2éme partie */
$(document).ready(function() {
    $("#minus2-id").click(function () {
        var $div1 = $('#cont2-id')
        if ($div1.is(':visible')) {
            $div1.slideUp("fast");
            $(this).find('i').toggleClass('fa-minus fa-plus')
        } else {
            $div1.slideDown("fast");
            $(this).find('i').toggleClass('fa-plus fa-minus')
        }
    })});
/* masquer le contenu de la 3éme partie */
$(document).ready(function() {
    $("#minus3-id").click(function () {
        var $div1 = $('#cont3-id')
        if ($div1.is(':visible')) {
            $div1.slideUp("fast");
            $(this).find('i').toggleClass('fa-minus fa-plus')
        } else {
            $div1.slideDown("fast");
            $(this).find('i').toggleClass('fa-plus fa-minus')

            $("html, body").animate({ scrollTop: $(document).height() }, 1000);

        }

    })});



/****** page portfolio *****/


/* ******filtrer les resultats du portfolio**** */
/*
var $btns = $('.filter').click(function() {
    if (this.id == 'all') {
        $('#portfoliolist > div > div').fadeIn(450);
    } else {
        var $el = $('.' + this.id).fadeIn(450);
        $('#portfoliolist > div > div').not($el).hide();
    }
    //$btns.removeClass('active');
    //$(this).addClass('active');
});*/
/* ******* masquer et afficher la loupe ***** */
$(document).ready(function() {
    $('.portfolio-wrapper').hover(function() {
        $(this).find('.magnifying-glass-icon').css('opacity', '10');
    }, function() {
        // on mouseout, reset the background colour
        $(this).find('.magnifying-glass-icon').css('opacity', '0');
    });
});
/* *******Afficher le div de la grande photo ****** */
/*$(document).ready(function() {

    $('.over-image').click(function() {
        var chemin = $(this).find('a').find('img').attr('src');
        $('#z-photo').find('p').find('img').attr('src',chemin);
        $('#g-photo').slideToggle("slow");
        $('.row').css('display','block');

    });

});*/
/*$(document).ready(function() {
    $('.portfolio').click(function() {
        var chemin = $(this).find('a').find('img').attr('src');
        $('#z-photo').find('p').find('img').attr('src',chemin);
        $idPopupSelectionne = '#' + this.id;
        $idPopupSelectionne = $idPopupSelectionne + "-pop";
        alert($idPopupSelectionne);
        $($idPopupSelectionne).slideToggle();
        //$('#'.$this.id).show();
        //$('.row').css('display','block');
       // $('.g-photo').slideToggle("slow");
    });

});*/
$(document).ready(function() {
    $('.portfolio').click(function() {
        $idPopupSelectionne = '#' + this.id;
        $idPopupSelectionne = $idPopupSelectionne + "-pop";
        // alert($idPopupSelectionne);
        $($idPopupSelectionne).slideToggle();
        //$('#'.$this.id).show();
        //$('.row').css('display','block');
        // $('.g-photo').slideToggle("slow");
    });

});

$(document).ready(function() {
    // effet fondu en sortie de la page entière par un clique sur un bouton
    $('.fermer').click(function() {
        $('.g-photo').css('display','none');
    });
});



$('#all').click(function () {
    $('.photo, .graphic, .web').fadeIn(200);
});

$('#photo').click(function () {
    $('.photo').fadeIn(200);
    $('.graphic, .web').fadeOut(200);
});

$('#graphic').click(function () {
    $('.graphic').fadeIn(200);
    $('.photo, .web').fadeOut(200);
});
$('#web').click(function () {
    $('.web').fadeIn(200);
    $('.photo, .graphic').fadeOut(200);
});

/***** centrer l'element dans la page *** */
jQuery.fn.center = function () {
    this.css("position","absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
            $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
            $(window).scrollLeft()) + "px");
    return this;
}


(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', '**-******-*', 'auto');
ga('send', 'pageview');


/*
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-92786190-1', 'auto');
ga('send', 'pageview');*/















/*$().center();*/

/*
$(".over-image").click(function() {
    var answerid = $(this).attr('portfolio_id');
    alert(this.id);
    console.log(answerid);
});*/
