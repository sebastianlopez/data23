

/*Cambio de precio del plan*/
function changePlan(opc) {
    if (opc == 1) {
        $('.price1').html('$32.000');
        $('.price2').html('$48.000');
    }
    else {
        $('.price1').html('$40.000');
        $('.price2').html('$60.000');
    }
}

/*Caracteres disponibles MODAL-PRUEBAGRATIS*/
function countChars(obj) {
    var maxlength = $('#company').attr('maxlength');
    //console.log(maxlength);
    var maxlengthint = parseInt(maxlength);
    var strLength = obj.value.length;
    var charRemain = (maxlengthint - strLength);

    if (charRemain < 0) {
        $("#charNum").html('Has excedido el número de caracteres disponibles');
    } else {
        $("#charNum").html(charRemain + ' caracteres disponibles');
    }
}

/*Sidebar Home*/
function openNav() {
    var w = getSize();
    if (w > 900)
        $('#mySidenav').css('width', '25%');
    if (w <= 900)
        $('#mySidenav').css('width', '35%');
    if (w <= 800)
        $('#mySidenav').css('width', '75%');
    if (w <= 560)
        $('#mySidenav').css('width', '100%');
    if (w <= 400)
        $('#mySidenav').css('width', '100%');
    $('.overlay').fadeIn();
    $('.overlay').addClass('d-block');
    $('.overlay').removeClass('d-none');
}

function closeNav() {
    $('#mySidenav').css('width', '0');
    $('.overlay').fadeOut();
    $('.overlay').addClass('d-none');
    $('.overlay').removeClass('d-block');
}

function getSize() {
    return window.innerWidth;
}

// ------------------------------------------------
//  MagnificPopup
// ------------------------------------------------
$('.popup-gallery-images').each(function () {
    $(this).magnificPopup({
        type: 'image',
        fixedContentPos: false,
        removalDelay: 300,
        mainClass: 'mfp-with-fade',
        tClose: '',
        image: {
            cursor: '',
            titleSrc: function (item) {
                return item.el.attr('title');
            }
        },
        delegate: 'a',
        gallery: {
            enabled: true,
            tPrev: '',
            tNext: ''
        }
    });
});
