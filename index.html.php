<?php 

	/*
	realidade aumentada
	elementos graficos em um video (live)

		-precisa de camera
		-objeto 3D / imagens / videos
		-interpretador - mapear a realidade
		-google AEcode (2018) -Celular pixel
		-apple ARKIT (2016) -iphone

			-AR marker- web/app qualquer celular
			-ar merkerless -sem marcadores -ARCode
			-geolacation - atraves do GPS

			Casa aberta ()

			-Instagramavel - WEB AR -
				-a-frame - camera/objeto 3D
				-ar.js -marcador
				-leve / roda via browser
				-uso de marcadores
				-wikitude/

			-Robotica
				-android
				-emulador / web cam

		-wifi - conecta senac
		-awardspace.com

		sequelado.dx.am 

		*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Realidade Aumentada - Espaço Instagramável Casa Aberta 2019</title>

	<meta charset="utf-8">

	<!-- colocamos o framework que sera responsavel por inserir os objetos na cena -->

	<script src="https://aframe.io/releases/0.6.0/aframe.min.js"></script>

	<!-- colocamos o framework ar.js que sera responsavel por reconhecer o marcador onde o objeto sera inserido -->

	<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>

</head>
<body style="margin: 0; overflow: hidden;">
	<!-- tag não padrao do HTML onde nossa cena de RA sera adiconada (todos os itens vao dentro dela) -->
	<a-scene embedded arjs>
		<!-- cria e posiciona um cubo sobre o marcador -->
		<a-box position="0 0 0 " material="opacity:0.5"> </a-box>

		<!-- chama do codigo do marcador HIRO marcador padrao do AR.js -->
		<a-marker-camera preset="hiro"> </a-marker-camera>
	</a-scene>

</body>
</html>