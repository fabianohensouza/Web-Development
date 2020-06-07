$(document).ready(() => {
	
	$('#documentacao').on('click', () => {
		$('#pagina').load('documentacao.html')
	})
	
	$('#suporte').on('click', () => {
		
		$.get('suporte.html', data => {
			$('#pagina').html(data)
		})
		
	})
	
	$('#sobrenos').on('click', () => {
		
		$.post('sobrenos.html', data => {
			$('#pagina').html(data)
		})
	})

	//Ajax Method
	$('#competencia').on('change', e => {

		let competencia = $(e.target).val()

		//Ajax Method parameters - Method/URL/Data/Success/Error
		$.ajax({
			type: 'GET',
			url: 'app.php',
			data: `competencia=${competencia}`, //x-www-form-urlencoded - name1=value1&name2=value2&name3=value3
			success: data => { console.log(data)},
			error: error => { console.log(error)}
		})

	})
})