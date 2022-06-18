$('#passwordregister').keyup(function(e) {
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{6,}).*", "g");
    if (false == enoughRegex.test($(this).val())) {
    $('#passstrength').removeClass('rojo');
    $('#passstrength').removeClass('naranja');
    $('#passstrength').removeClass('verde');
    $('#passstrength').addClass('seguridad');
    $('#passstrength').html('¡Contraseña debíl!');
 } else if (strongRegex.test($(this).val())) {
    $('#passstrength').removeClass('naranja');
    $('#passstrength').addClass('verde');
     $('#passstrength').html(' ¡Perfecto la contraseña es fuerte!');
 } else if (mediumRegex.test($(this).val())) {
    $('#passstrength').removeClass('rojo');
    $('#passstrength').addClass('naranja');
     $('#passstrength').html('¡La contraseña en media!');
 } else {
    $('#passstrength').removeClass('seguridad');
    $('#passstrength').addClass('rojo');
         $('#passstrength').html('¡La contraseña aún es debil!');
 }
 return true;
});

$('.buttonpass').click(function(){
   $('#passwordregister').each(function(){
      if(this.value.length < 8){
         $('#passstrength').html('Necesita minimo 8 caracteres.');
      }else if(this.value.length > 16){
         $('#passstrength').html('Solo un maximo de 16 caracteres');
      }
      else if(this.value.length <= 0){
         $('#passstrength').html('Rellena todos los campos');
      }else{
         document.getElementById('formpass').submit();
      }
   })
})