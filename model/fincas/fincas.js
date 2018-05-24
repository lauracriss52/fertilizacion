 //ESTE CÓDIGO ARREGA NUEVA FINCA
             $(document).ready(function(){  
            $('#btn_agregar_finca').click(function(){  
           var Nombre_finc = $('#Nombre_finc').val();  
           var Descripcion_finc = $('#Descripcion_finc').val();  
           var Departamento_finc = $('#Departamento_finc').val();  
           var Municipio_finc = $('#Municipio_finc').val();  
           var Vereda_finc = $('#Vereda_finc').val();  
           var Latitud_finc = $('#Latitud_finc').val();  
           var Longitud_finc = $('#Longitud_finc').val();  
           var Viaacc_finc = $('#Viaacc_finc').val();  
           var Intgamilia_finc = $('#Intgamilia_finc').val();  
           var Jovenes1518 = $('#Jovenes1518').val();  
  
           if(Nombre_finc == '' || Descripcion_finc == ''|| Departamento_finc == ''|| Municipio_finc == ''|| Latitud_finc == ''|| Longitud_finc == ''|| Viaacc_finc == ''|| Intgamilia_finc == ''|| Jovenes1518 == '')  
           {  
                $('#msg_error_finca').html("Todos los campos son obligatorios");  
           }  
           else  
           {  
                $('#msg_error_finca').html('');  
                $.ajax({  
                     url:"../../control/fincas/insertar_finca.php",  
                     method:"POST",  
                     data:{Nombre_finc:Nombre_finc,Descripcion_finc:Descripcion_finc,Departamento_finc:Departamento_finc,Municipio_finc:Municipio_finc,Vereda_finc:Vereda_finc,Latitud_finc:Latitud_finc,Longitud_finc:Longitud_finc,Viaacc_finc:Viaacc_finc,Intgamilia_finc:Intgamilia_finc,Jovenes1518:Jovenes1518},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#msg_exito_finca').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#msg_exito_finca').fadeOut("Slow");  
                          }, 8000);  
                     }  
                });  
           }  
      });  
 }); 
       //ESTE CÓDIGO ARREGA NUEVA FINCA => ¡FIN!
          
             
          
      
        //ESTE CODIGO CARGA LAS FINCAS EN EL MODAL ¡INICIO!
 $(document).ready(function(){  
      $(document).on('click', '.select_edit_finca', function(){  
           var finca_id = $(this).attr("id");  
           if(finca_id != '')  
           {  
                $.ajax({  
                     url:"../../control/fincas/select_edit_finca.php",  
                     method:"POST",  
                     data:{finca_id:finca_id},  
                     success:function(data){  
                          $('#finca_detalle').html(data);  
                          $('#mostrando_fincas').modal('open');  
                     }  
                });  
           }            
      });  
 });  
//ESTE CODIGO CARGA LAS FINCAS EN EL MODAL ¡FIN!
 
          
       //Este códgio EDITA las fincas ¡INICIO!        
 $(document).ready(function(){  
	$(document).on('click', '#actualiza_finca', function(){
            var id_finca = $('#id_finca').val();  
           var Nombre_finca = $('#Nombre_finca').val();  
           var Descripcion_finca = $('#Descripcion_finca').val();  
           var Departamento_finca = $('#Departamento_finca').val();  
           var Municipio_finca = $('#Municipio_finca').val();  
           var Vereda_finca = $('#Vereda_finca').val();  
           var Latitud_finca = $('#Latitud_finca').val();  
           var Longitud_finca = $('#Longitud_finca').val();  
           var Viaacc_finca = $('#Viaacc_finca').val();  
           var Intgamilia_finca = $('#Intgamilia_finca').val();  
           var Jovenes1518_finca = $('#Jovenes1518_finca').val();  
        
           if(id_finca =='' || Nombre_finca == '' || Descripcion_finca == ''|| Municipio_finca == ''|| Vereda_finca == ''|| Latitud_finca == ''|| Longitud_finca == ''|| Viaacc_finca == ''|| Intgamilia_finca == ''|| Jovenes1518_finca == '')  
           {  
                $('#error_actua_finca').html("No puedes dejar ningún campo vacío");  
           }  
           else  
           {  
                $('#error_actua_finca').html('');   
                $.ajax({  
                     url:"../../control/fincas/editar_finca.php",  
                     method:"POST",  
                     data:{id_finca:id_finca,Nombre_finca:Nombre_finca, Descripcion_finca:Descripcion_finca, Departamento_finca:Departamento_finca,Municipio_finca:Municipio_finca,Vereda_finca:Vereda_finca,Latitud_finca:Latitud_finca,Longitud_finca:Longitud_finca,Viaacc_finca:Viaacc_finca,Intgamilia_finca:Intgamilia_finca,Jovenes1518_finca:Jovenes1518_finca},  
                     success:function(data){   
                          $('#exito_actua_finca').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#exito_actua_finca').fadeOut("Slow");  
                          },4000);  
                     }  
                });  
           }
	}); 
      
 }); 
 //Este códgio EDITA las fincas ¡FIN!     
          
          
     //ELIMINAR UNA FINCA ¡INICIO!
	$(document).on('click', '.eliminar_finca', function(){
		var del_finca = $(this).attr("id");
		if(confirm("Estás seguro que quieres eliminar esta?"))
		{
			$.ajax({
				url:"../../control/fincas/elimina_finca.php",
				method:"POST",
				data:{del_finca:del_finca},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
    //ELIMINAR UNA FINCA ¡FIN!