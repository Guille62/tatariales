 $(document).ready(function() {
    
    $("#rut").Rut({
      format_on: 'keyup'
    })
        $("#btn-sec2").click(function(){
            $("#seccion2").show(); 
        });  
       
        $("#btn-secf").click(function(){
            $("#seccion2").hide();  
            $("#seccion3").hide();           
        });   




    $('.enviar-receta').click(function(){
        
        
        var nombre=$('#nombre').val();
        var rut=$('#rut').val();
        var correo=$('#correo').val();
        var receta=$('#receta').val();

        var errores=0;

        $('#nombre').removeClass('error_x');
        $('#rut').removeClass('error_x');
        $('#correo').removeClass('error_x');
        $('#receta').removeClass('error_x');
        $('#defaultCheck1').removeClass('error_x');
        
        if(nombre==""){
            
            $('#nombre').addClass('error_x');
            errores++;
            
        }
        if(rut==""){
            
            $('#rut').addClass('error_x');
            errores++;
            
        }
        if(correo=="" || !validatecorreo(correo)){
            $('#correo').addClass('error_x');
            errores++;
        }
        if(receta=="" || receta.length<2){
            $('#receta').addClass('error_x');
            errores++;
        }
        if(!document.getElementById("defaultCheck1").checked){
            $('#defaultCheck1').addClass('error_x');
            errores++;
        }

        
        if(errores==0){
            
           
            
            guardar(nombre,rut,correo,receta); 
            

        }
    })


    $("#rut").keyup(function(){
      console.log("validando rut:"+validaRut($(this).val()));
      //validaRut($(this).val());
        if( $(this).val() != "" && validaRut($(this).val())) {
             $("#error_x").hide();
            return false;
        }
    });


    $("#nombre,#receta").keyup(function(){
        console.log("escribiendo")
        if( $(this).val() != "" ){
            $("#error_x").hide();
            return false;
        }
     });

     $("#correo").keyup(function(){
            if( $(this).val() != "" && validatecorreo($(this).val())){
                $("#error_x").hide();
                return false;
            }
     });


     $(".share").click(function(event) {
           FB.ui({
    method: 'share',
    display: 'popup',
    href: 'https://www.superpollo.cl/tatariales',
  }, function(response){});   

     });

 });

 
      

 
  

function validaRut(rut){
    //console.log($.Rut.validar(rut));
    return $.Rut.validar(rut);

}


function validatecorreo(correo) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(correo);
}

function guardar(nombre,rut,correo,receta){
    
    
    console.log("Guardando Datos");
    $.ajax({
    data: {"nombre":nombre,"correo":correo,"rut":rut,"receta":receta},
    //Cambiar a type: POST si necesario
    type: "POST",
    // Formato de datos que se espera en la respuesta
    dataType: "json",
    // URL a la que se enviará la solicitud Ajax
    url: "php/insert.php",
})
 .done(function( data, textStatus, jqXHR ) {
     if ( console && console.log ) {
         if(data.success!=false){
            
          
            console.log('Datos guardados');
             $("#seccion3").show();
            document.querySelector('#seccion3').scrollIntoView({ 
              behavior: 'smooth' 
            });


        $('#nombre').val("");
        $('#rut').val("");
        $('#correo').val("");
        $('#receta').val("");
           
        }else{

           // alert(data.data.message);

        }
     }
 })
 .fail(function( jqXHR, textStatus, errorThrown ) {
     if ( console && console.log ) {
        console.log( "La solicitud a fallado: " +  textStatus);
         //alert("Error.");
     }
});
}