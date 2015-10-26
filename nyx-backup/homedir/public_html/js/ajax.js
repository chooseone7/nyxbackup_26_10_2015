$(function(){
	$('#buscador_nyx').submit(function(e){
	e.preventDefault();
	
})
$('#submit_buscar').click(function(){
	var envio= $('#buscar_nyx').val();
	$('.mostrar-descripcion-buscar-producto2').html('<h2><img src="img/gif/loading.gif"></h2>');
	$.ajax({
		type:'POST',
		url:'sql/buscador.php',//sql/buscador.php ?op=contactanos
		data:('buscar_nyx='+ envio),
		success:function(resp){
			if(resp!=""){
			$('.mostrar-descripcion-buscar-producto2').html(resp)
			}
			}
		  })
		}/*,function(){
			var x=$('[href]');
			x.attr('href','?op=buscador');
			alert("entro a callback");
		 }
		*/)
});

	//location.assign("http://localhost:8080/disenio_limpio3/index.php?op=contactanos"); */
	
