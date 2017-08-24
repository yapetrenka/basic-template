var $document = $(document);

$(function(){
    'use strict';

    $('.js-phoneMask').mask("+7 (999) 999-99-99");
	
	$('.js-openDialog').MyCMSDialog();
	
	$document.on('click', '.js-openDialogAjax', function(){
        var $this = $(this),
            title = $this.data('title'),
            cssClass = $this.data('cssclass'),
            hrefID = $this.attr('href').split('#'),
            url = '/templates/popup/'+hrefID[1]+'.tpl.php';
        $.ajax({
            url: url,
            success: function(data){
                MyCMSDialog.closeAll();
                MyCMSDialog.open({
                    'title': title,
                    'cssClass': cssClass,
                    'content': data,
                    'open': function(){
                        $('.js-phoneMask').mask("+7 (999)-999-99-99");
                    }
                });
            }
        });
        return false;
    });

    $document.on('click', '.js-closeDialog', function(){
        MyCMSDialog.closeAll();
        return false;
    });

    svg4everybody();

});