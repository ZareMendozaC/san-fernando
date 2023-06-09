<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>San Fernando | Gracias</title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<script type="text/javascript">
		console.log("entro");
		var getUrlParameter = function (sParam) {
			var sPageURL = decodeURIComponent(window.location.search.substring(1)), 
				sURLVariables = sPageURL.split('&'), 
				sParameterName, i;

			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : sParameterName[1];
				}
			}
		};
		$( document ).ready(function() {
			var tipo = getUrlParameter('tipo');
			if(tipo == "consulta")
			{
				$('#consulta').css('display','block');
				var question = getUrlParameter('question');
				var answer = getUrlParameter('answer');
				$('#question').text(question.replaceAll('+', ' '));
				$('#answer').text(answer.replaceAll('+', ' '));
			}
			else{
				$('#caso').css('display','block');
				var id = getUrlParameter('id');
				$('#ticket').html(id);
				console.log(id);
				console.log($('#ticket').text());
			}
			
		});
		
	</script>

<style>

	#consulta {
		padding-left: 250px;
		text-align: left;
		font-size: 20px;
		padding-right: 70px;
	}
    .h2-text {
		color: #024384;
		font-size: 23px;
	}
	.respuestas{
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    flex-direction: column;
		height: 80vh;
	}
    
</style>
<section class="respuestas">
<!--
	<img src="https://san-fernando.com.pe/images/creantis/header.jpg" alt="">-->
	<div id="caso" style="display:none">
		<h2 class="h2-text">Gracias por escribirnos. <br> Se ha generado el número de solicitud <span id="ticket"></span>.<br> En breve te contactaremos.</h2>
	</div>
	<div id="consulta" style="display:none">
		<h2 class="h2-text" id="question"></h2>
		<span class="h2-text" id="answer"></span>
	</div>
	<br>
	<!--<img src="https://san-fernando.com.pe/images/creantis/footer.jpg" alt="" style="padding-top: 230px;">
</center>-->
</section>
</body>
</html>