function ajaxpanel(divcargar, url, nameform){
      var srt = $("#"+nameform).serialize();

                    $.ajax({
                        type:  'POST',
                        url:   url,
                        data:  srt
                    }).done(function(msg) {
                        $("#"+divcargar).html(msg).SlideUp(300).delay(3000).hide(1000);
     
                    }).fail(function (jqXHR, textStatus, errorThrown){
                        $("#"+divcargar).html("The following error occured: "+ textStatus +" "+ errorThrown);
                    });
            }

function ajaxpanelform(divcargar, url, nameform){
      var srt = $("#"+nameform).serialize();
                    $.ajax({
                        type:  'POST',
                        url:   url,
                        data:  srt
                    }).done(function(msg) {
                        $("#"+divcargar).html(msg);
                    }).fail(function (jqXHR, textStatus, errorThrown){
                        $("#"+divcargar).html("The following error occured: "+ textStatus +" "+ errorThrown);
                    });
            }

function ajaxpanellink(divcargar, url, accion){
			if(accion=="")accion="mostrar";
                    $.ajax({
                        type:  'POST',
                        url:   url,
						data: { accionpanel: accion}
                    }).done(function(msg) {
                        $("#"+divcargar).html(msg);
                    }).fail(function (jqXHR, textStatus, errorThrown){
                        $("#"+divcargar).html("The following error occured: "+ textStatus +" "+ errorThrown);
                    });
            }

function selectsalto(divcargar, url, dato, accion){
  if(accion=="")accion="mostrar";
                       $.ajax({
                        type:  'POST',
                        url:   url,
             data: { datos: dato, acciontipo: accion}
                    }).done(function(msg) {
                        $("#"+divcargar).html(msg);
                    }).fail(function (jqXHR, textStatus, errorThrown){
                        $("#"+divcargar).html("The following error occured: "+ textStatus +" "+ errorThrown);
                    });

                
            }

   
            
            function selectsaltos(divcargar, url, dato, accion){
            if(accion=="")accion="mostrar";
                    $.ajax({
                        type:  'POST',
                        url:   url,
             data: { datos: dato, acciontipo: accion}
                    }).done(function(msg) {
                        $("#"+divcargar).html(msg);
                    }).fail(function (jqXHR, textStatus, errorThrown){
                        $("#"+divcargar).html("The following error occured: "+ textStatus +" "+ errorThrown);
                    });
            }

