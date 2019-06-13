<html>
<head>
	<title>Teste de Google Search</title>
</head>
<body>

	<button onclick="getSearchResults()">Encontrar Resultados</button>


	<script 
	src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">  
	</script>
	<script>
		function getSearchResults() {

			$.ajax({
				url: 'https://www.googleapis.com/customsearch/',
				type:'GET',
				dataType : 'json',
				beforeSend:function(){
					console.log('Efetuando Busca... ')
				}
			})
			.done(function(data, statusText, resObject) {
   				var jsonData = resObject.responseJSON
   				console.log('Dados Encontrados: \n')
				console.log(jsonData)
			})
			.fail(function(e, textStatus, msg){
				console.log('Erro: '+msg + '\n'+e+'\n'+textStatus)
				alert("Erro!")
			})
		}

	</script>

</body>
</html>
