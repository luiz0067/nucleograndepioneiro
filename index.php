<?php
include('./adm/conecta.php');
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<script type="text/javascript" src="js/jquery_005.js"></script>	
<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
<script>
 function trocardecor (elemento,cor){
 elemento.style.color=cor;}
</script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />

<script type="text/javascript" src="./js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="./js/jquery.cycle.all.2.72.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="js/jquery_002.js"></script>
<script type="text/javascript" src="js/drupal.js"></script>
<script type="text/javascript" src="js/pt-br_6548bb28ddc4b7053abed75dcff1fd48.js"></script>
<script type="text/javascript" src="js/poormanscron.js"></script>
<script type="text/javascript" src="js/jquery_006.js"></script>
<script type="text/javascript" src="js/jquery_004.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery_003.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript">

<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, { "basePath": "/", "cron": { "basePath": "/poormanscron", "runNext": 1354902835 } });
//--><!]]>
</script>
	<script type="text/javascript" src="js/jquery_005.js"></script>	
</head>


<body class="cron-check-processed">

	<div id="topo"> 
		<div id="topomeio">
			<div id="cabecalho">
				<div id="logo" >
					<a href="?pg=home">
						<div id="logo_imagem">
								<img src="./imagens/logo.png" alt="Núcleo Grande Pioneiro"  
								title="Núcleo Grande Pioneiro" name="Núcleo Grande Pioneiro" 
								border="0" width="204" height="125" />
						</div>
					</a>
				</div>
				<div id="conteudo_topo"  >
					<a href="?pg=home">
						<div id="links_topo" class="letra12"> 
						Home
						</div>
					</a>
					<a href="?pg=contato">
						<div id="links_topo2" class="letra12"> 
						 Contato
						</div>
					</a>
					<div id="menu_topo" class="letra14">
						<a href="?pg=informacao" onmouseover="trocardecor(this,'#000000')" onmouseout="trocardecor(this,'#FFFFFF')">
							<div id="menu_I" class="letra14">
								 Informações do Núcleo 
							</div>   
						</a>
						<a href="?pg=servico">
							<div id="menu_S" class="letra14">
								  Serviços  
							</div>   
						</a>
						<a href="?pg=galeria_noticia">
							<div id="menu_S" class="letra14">
								  Notícias  
							</div>   
						</a>
						<a href="?pg=integrantes">
							<div id="menu_S" class="letra14">
								  Integrantes do Grupo  
							</div>   
						</a>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div id="banner1">
		<div id="bannerimagem">
			<div class="clear" style=" height:3px;"></div> 
				<div id="banner_tudo">			
					<div id="header">
						<div class="wrap">
							<div id="secundary-menu">
								<ul>
									<li class="grey" id="menus_banner_1"><a href="#" class="texto_menus" rel="grey">Agenda</a><span></span></li>
									<li class="blue" id="menus_banner_2"><a href="#" class="texto_menus" rel="blue"> Videos </a><span></span></li>
									<li class="green" id="menus_banner_3"><a href="#" class="texto_menus" rel="green">Fotos</a><span></span></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="menu-top">
					<div id="menus_baixo_1" style="z-index: 1500;" class="menu-top grey">
						<div >
							<ul>
								<li class="banner_quadrado_padrao">
									<div class="topo_banner_quadrado">
										<div class="topo_banner_texto">
											Agenda
										</div>
										<div class="topo_banner_ver">
											<a href="?pg=agenda">Ver Agenda Completa</a>
										</div>
									</div>
									<div class="topo_banner_conteudo">
										<div class="topo_banner_titulo_agenda">
											Embreve 	<!--	  Escrever o titulo do ultimo evento
												pode ter 2 linhas o titulo.-->
										</div>
										<div class="topo_banner_conteudos" style="margin-top:16px;">
											 	<!-- Data: 00/00/2012-->
										</div>
										<div class="topo_banner_conteudos">
											<!--  Local: studio midiamix-->
										</div>
										<div class="topo_banner_conteudos">
										<!--Horario: 12:30 h.-->
										</div>
									</div>
								</li>
							</ul>
						</div>	
					</div>
					<div id="menus_baixo_2" style="z-index: 1300;" class="menu-top blue">
						<div >
							<ul>
							<li class="banner_quadrado_padrao">
									<div class="topo_banner_quadrado">
										<div class="topo_banner_texto">
											Vídeo
										</div>
										<div class="topo_banner_ver">
											<a href="?pg=galeria_video">Ver Galeria de Vídeo Completa</a>
										</div>
									</div>
									<div class="topo_banner_conteudo">
										<div class="topo_banner_titulo_agenda">
											 Embreve	<!--	  Escrever o titulo do ultimo evento
												pode ter 2 linhas o titulo.-->
										</div>
										<div class="topo_banner_conteudos" style="margin-top:16px;">
											 	<!-- Data: 00/00/2012-->
										<div class="topo_banner_conteudos">
											<!--  Local: studio midiamix-->
										</div>
										<div class="topo_banner_conteudos">
										<!--  Local: studio midiamix-->
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div id="menus_baixo_3" style="z-index: 1000; position:absolute;" class="menu-top green">	
						<div  >
							<ul>
								<li class="banner_quadrado_padrao">
									<div class="topo_banner_quadrado">
										<div class="topo_banner_texto">
											Fotos
										</div>
										<div class="topo_banner_ver">
											<a href="?pg=galeria_foto">Ver Galeria de Fotos Completa</a>
										</div>
									</div>
									<div class="topo_banner_conteudo">
										<div class="topo_banner_titulo_agenda">
											Liquida Pioneiro 2012
										<div class="topo_banner_conteudos" style="margin-top:16px;">
											Galeria de Fotos Data 2012
										</div>
										<div class="topo_banner_conteudos">
											<!--  Local: studio midiamix-->
										</div>
										<div class="topo_banner_conteudos">
										<!--Horario: 12:30 h.-->
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
					<div id="slider-home">
						<div class="wrap">
							<div style="width: 977px; " id="banner">
								<div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0;" class="first odd">
									<div class="slide">
										<img src="imagens/centroculturalpioneira.jpg" width="977" height="259" alt="Educação">
									</div>    
								</div>
								<div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 977px; height: 258px;" class="even">
									<div class="slide">
										<img src="imagens/foto_nucleo.png" width="977" height="259" alt="Turismo ">
									</div>   
								</div>
								<div style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 977px; height: 258px;" class="even">
									<div class="slide">
										<img src="imagens/imagem2.jpg" width="977" height="259" alt="fdsfbdf ">
									</div>   
								</div>
							</div>
							<div id="banner-nav"></div>
							
						</div>
					</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$(".column-300:eq(1)").css("margin-left", "30px");
					});
				</script>
					
		</div>
	</div>
		
		<div class="clear" ></div> 
		</div>
	<div id="tudo" >
		<div class ="meio">
			<?php 
				$pg=$_GET["pg"];
				if($pg=="home")
					include('home.php');
				else if($pg=="galeria_video")
					include('galeria_video.php');
				else if($pg=="video")
					include('video.php');
				else if($pg=="galeria_foto")
					include('galeria_foto.php');
				else if($pg=="foto")
					include('foto.php');
				else if($pg=="foto1")
					include('foto1.php');
				else if($pg=="foto2")
					include('foto2.php');
				else if($pg=="foto3")
					include('foto3.php');
				else if($pg=="foto4")
					include('foto4.php');
				else if($pg=="foto5")
					include('foto5.php');
				else if($pg=="galeria_noticia")
					include('galeria_noticia.php');
				else if($pg=="noticia")
					include('noticia.php');
				else if($pg=="noticia3")
					include('noticia3.php');
				else if($pg=="noticia1")
					include('noticia1.php');
				else if($pg=="noticia2")
					include('noticia2.php');
				else if($pg=="servico")
					include('servico.php');				
				else if($pg=="integrantes")
					include('integrantes.php');
				else if($pg=="integrantes1")
					include('integrantes1.php');
				else if($pg=="agenda")
					include('agenda.php');
				else if($pg=="informacao")
					include('informacao.php');
				else if($pg=="contato")
					include('contato.php');
				else
					include('home.php');
			?>
		</div>
	</div>
	<div class="clear"  ></div>
		<div id="baixo">
			<div class="clear" style="height:10px;" ></div>
			<div id="parceiros">
				<div id="parceiros_logos">
					<a href="https://servicos.spc.org.br/spc/controleacesso/autenticacao/entry.action" target="_blank">
						<div class="parceiro_logo">
							<img src="./imagens/parceiros/spc.png" alt="Parceiros" width="118" height="80" border="0" />
						</div>
					</a>
					<a href="http://empreendedor.com.br/" target="_blank">
						<div class="parceiro_logo">
							<img src="./imagens/parceiros/empreendedor.png" alt="Parceiros" width="118" height="80" border="0" />
						</div>
					</a>
					<a href="http://www.toledo.pr.gov.br/" target="_blank">
						<div class="parceiro_logo">
							<img src="./imagens/parceiros/toledo.png" alt="Notícia" width="118" height="80" border="0" />
						</div>
					</a>	
					<a href="http://www.receita.fazenda.gov.br/" target="_blank">
						<div class="parceiro_logo">
							<img src="./imagens/parceiros/federal.png" alt="Notícia" width="118" height="80" border="0" />
						</div>
					</a>
					<a href="http://www.acit.org.br/" target="_blank">
						<div class="parceiro_logo">
							<img src="./imagens/parceiros/acit.png" alt="Notícia" width="118" height="80" border="0" />
						</div>
					</a>
					<a href="http://www.sebrae.com.br/" target="_blank">
						<div class="parceiro_logo">
							<img src="./imagens/parceiros/sebrae.png" alt="Notícia" width="118" height="80" border="0" />
						</div>
					</a>
				</div>
				<div class="clear"  ></div>
			</div>
		</div>
	
	<div class="clear"  ></div>
	<div id="rodape">
		<div id="rodape_meio">
			<div id="div_branca">
			</div>
			<div id="rodape_conteudo">
				<div id="rodape_imagens">
					<a href="http://www.flickr.com/" target="_blank">
						<div class="imagen_rodape">
							<img src="./imagens/fikler.png" alt="Rede Social" width="41" height="41" border="0" />
						</div>
					</a>
					<a href="https://www.facebook.com/pages/N%C3%BAcleo-grande-Pioneiro/458988457495847?ref=hl" target="_blank">
						<div class="imagen_rodape">
							<img src="./imagens/face.png" alt="Rede Social" width="41" height="41" border="0" />
						</div>
					</a>
					<a href="http://www.youtube.com/channel/UCZUpCQ4my4KxpyAbmT3YdTQ?ytsession=hyGTlywS7dPOTRxp36G61iRFikLlR0GGGgfjXcMcaTLUxA1Am3bzuje6yoiFuXT_kaPJcJ0Cg2GdPwS0ZYZzFYdAqK3PYSeLO_raetBsDZLMnmhe11Q_DzfxZ4-EeFhOHzXvJwvcH82r7sW3gwBkDazQTX4EFJR7h_z_I00O7tisXsM2mwtpcGRSntHPye9cyQwJ3jNWX7m5RVFb59-iMrehGnsRMa1P2KvaiIP7RypiT_zborOFw-rC4ihrufztNNGiyKoe2akdQe451rTOZzkkCPpKCTUvn3h4pxSTA58" target="_blank">
						<div class="imagen_rodape">
							<img src="./imagens/youtube.png" alt="Rede Social" width="41" height="41" border="0" />
						</div>
					</a>
					<a href="http://www.skipebrasil.com.br/sb/ target="_blank">
					<div class="imagen_rodape">
						<img src="./imagens/skipe.png" alt="Rede Social" width="41" height="41" border="0" />
					</div>
					</a>
					<div class="clear"  ></div>
				</div>
				<div id="contanto_rodape">
					<a href="?pg=contato">
						<div class="dados_contato_ropade" >
						Contato com o Núcleo
						</div>
					</a>
					<a href="?pg=contato">
						<div class="dados_contato_ropade" >
						Fones: (45) 9972 8122  Falar com Adaildo
						</div>
					</a>
					<a href="?pg=contato">
						<div class="dados_contato_ropade" >
						e-mail: adaildocassimiro@uol.com.br
						</div>
					</a>
					<div class="clear"  ></div>
				</div>
				<div id="dados_desenvolvedor">
					<div id="conteudo_desenvolvedor">
						<div class="letra_desenvolvedor" style="margin-top:10px;">
							©copyright
						</div>
						<div class="letra_desenvolvedor"style="margin-bottom:18px;">
							Todos os Direitos Reservados.
						</div>
					</div>
					<div id="imagem_desenvolvedor">
						<a href="http://www.studiomidiamix.com.br/" target="_blank">
						<img src="./imagens/logomix.png" alt="logomix" width="117" height="42" border="0" />
						</a>
					</div>
				</div>
				<div class="clear"  ></div>
			</div>
			
		</div>
		
	</div>

</body>
<?php
include('./adm/rodape.php');
	
?>