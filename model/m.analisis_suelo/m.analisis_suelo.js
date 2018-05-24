         //ESTE CÓDIGO CARGA LAS CARACTERISTICAS DE ALGUN CULTIVO SELECCIONADO [INICIO]{           
         $(document).ready(function(){  
          $('#nombre_cultivo').change(function(){  
               var id_cultivo = $(this).val();  
               $.ajax({  
                    url:"../../control/analisis_suelo/carga_cultivos_id.php",  
                    method:"POST",  
                    data:{id_cultivo:id_cultivo},  
                    success:function(data){  
                    $('#show_product').html(data);  
                    }  
               });  
          });  
     }); 
        //[FIN] }

    // ESTE CÓDIGO ME PERMITE SELECCIONAR DEPARTAMENTO>MUNICIPIO>FINCA {
    $(document).ready(function(){
     $('.selec_control').change(function(){
      if($(this).val() != '')
      {
       var selec_control = $(this).attr("id");
       var query = $(this).val();
       var result = '';
       if(selec_control == "Departamento")
       {
        result = 'Municipio';
       }
       else
       {
        result = 'Finca';
       }
       $.ajax({
        url:"../../control/analisis_suelo/select_dep_muni_finc.php",
        method:"POST",
        data:{selec_control:selec_control, query:query},
        success:function(data){
         $('#'+result).html(data);
        }
       })
      }
     });
    });

    // ESTE CÓDIGO ME PERMITE SELECCIONAR DEPARTAMENTO>MUNICIPIO>FINCA }