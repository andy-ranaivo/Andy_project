// JavaScript Document
/* 
Site : Gestion Émetteur Radio;
Title : Global javascript;
Type : Javascript;
Author :Andy Ranaivo 
Date: Septembre 2015
*/

// fonction d'initialisation slider home actu selon la resolution
/*function initial_width() {
    if (( new_initial_width <= 768 ) {
        $('body').addClass('width768');
    }
}*/
// fonction egalisation hauteur 
/*var sameHeight = 0;*/
function equalHeight(_elem) {
    $(_elem).each(function() {
        var heightDd = $(this).height();
        $(this).prev('dt').height(heightDd);
    });
}

//hauteur dd par rapport au contenu (repetAnnonce)
function heightRepetAnnonce(_elem) {
    var _heightSelect = $('dd.repetAnnonce select').outerHeight(true);
    var _heightSeparator = $('dd.repetAnnonce .separator').outerHeight(true);
    var _heightInput = $('dd.repetAnnonce input.dateTime').outerHeight(true);
    var _heightUl = $('dd.repetAnnonce ul').height();
    var _totalHeight = _heightSelect + _heightSeparator + _heightInput +_heightUl;

    $(_elem).height(_totalHeight);
}

$(function(){
	var hoverSlide;
    var mUserAgent = navigator.userAgent;

    //hauteur dd par rapport au contenu (msgTxt)
    var heightP = $('dd.msgTxt p').innerHeight();
    $('dd.msgTxt').height(heightP);

    //appel fonction equalisation hauteur
    equalHeight('dd');

    
    // resize window
    $(window).resize(function() {
        var _widthWindow = document.width;
        var heightP = $('dd.msgTxt p').innerHeight();

        $('dd.msgTxt').height(heightP);
        
        //console.log(_heightSelect + '||' + _heightInput + '||' + _heightSeparator + '||' + _heightUl );
        //console.log(_totalHeight);
        heightRepetAnnonce('dd.repetAnnonce');

        if ((_widthWindow) < 768 ) {
            /*$('dd.repetAnnonce').height(heightDd); */
        } else {};
    });


    function removeListTime() {
        $('.momentList li a').each(function(){
            /*var heightLi = $(this).parent('li').height();*/
           
            var currentLi = $(this).parent('li'); 

            $(this).click(function(){
                $(currentLi).remove();
                heightRepetAnnonce('dd.repetAnnonce');
                equalHeight('dd');
                return false;
            });
            
        });
    }
    removeListTime();

/*var myarray = new Array();
        myarray.push($("#drop").val());
        alert(myarray);
}*/

    // recuperation des valeurs sur les champs date et temps
    $('a.btnAjouter').click(function(){
        var valueInputArray = new Array();
        var valueDate = $('#dateTime').val();
        
        valueInputArray.push(valueDate);
        
        //alert(valueInput);
        //(jQuery.inArray(jQuery("input:first"), ar))
        if ( valueDate != '' || ($.inArray($('#dateTime'), valueInputArray)) === 1 ) {

            $('.momentList').append('<li>' + valueInputArray + '<a href="#">Supprimers</a></li>');

            removeListTime();
            heightRepetAnnonce('dd.repetAnnonce');
            equalHeight('dd');
        };

       
        return false;
    });


     // affichage sous menu sur menu left
     if ($('.subMenu ').length > 0) {
        $('.menuList').DropdownMenu ();
     };


    //placeHolder pour IE seulement
    if ($('.identificationBlock').length > 0) {
        if (mUserAgent.match('MSIE')) {
            $('input').placeholder();
        }
    };

    if ($('.blockAccess').length > 0) {
        $('.deconnectBtn').hover(function(){
        	clearTimeout(hoverSlide);
        	$('.deconnectBlk').slideDown();
        },
        function () {
			hoverSlide = setTimeout(function(){
				$('.deconnectBlk').slideUp();
			}, 500);
        });
        $('.deconnectBlk').hover(function(){
        	clearTimeout(hoverSlide);
        }, function(){
        	hoverSlide = setTimeout(function(){
				$('.deconnectBlk').slideUp();
			}, 500);
        });
    };
    
    if ($('form').length > 0) {
        //$('input, select').uniform();
        $('input[type="file"]').uniform({
            filenameClass: 'fileName',
            fileButtonClass: 'fileBtn',
            fileButtonHtml: 'Joindre',
            fileDefaultHtml: 'Veuillez selectionner un fichier'
        });
    };
   
    if ($('.advancedSearchBlock ').length > 0) {
        $('.advancedSearch a').click(function(){
            if ($('.advancedSearchBlock').is(':visible')) {
                $('.advancedSearchBlock').slideUp(250);
            } else {
                $('.advancedSearchBlock').slideDown(500);
            };
            return false;
        });
    }; 
   
});
