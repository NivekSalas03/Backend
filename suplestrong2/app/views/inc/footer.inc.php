    <script src="<?php echo RUTA_URL; ?>/public/js/jquery.min.js"></script>
    <script src="<?php echo RUTA_URL; ?>/public/js/bootstrap.min.js"></script>
    <script src="<?php echo RUTA_URL; ?>/public/js/custom.js"></script>
        <script>
    $(function(){
        
        
        $('#csv').on('click', function(){   
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL ;?>/productos/toCsv",
                dataType:'json',
                success: function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
        $('#xml').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/productos/toXml",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
         $('#json').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/productos/toJson",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
         
         
        $('#pdf').on('click', function(){
           
         $.ajax({
             type:'GET',
            url:"<?php echo RUTA_URL;?>/productos/toPdf",
            dataType:'json',
               success:function(respuesta){
                if(respuesta.hecho){
                      alert('Archivo creado con exito');
                   }
              },
             error:function(e){
                    console.log(e.responseText);
                }
               });
            });         
        });
</script>