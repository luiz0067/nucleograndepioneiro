
<div class="galeria_video" >
	<div class="titulo_galeria_video" >
		<div class="letra30calibra" style="margin-top:20px">
			Agenda
		</div>
		<div class="letra12MyriadPro" style="text-align:right; margin-bottom:10px; ">
			<<   |   <   |   1   2   3   |   >   |   >>
		</div>
	</div>
	<div class="conteiner_noticias">	
			<?php
		
			$i=1;
			$sql    = 'SELECT id,titulo,data_evento,horario,local_evento FROM agenda  order by id desc;';
			$result = mysql_query($sql, $link);
			if (!$result) {
				echo "Erro do banco de dados, não foi possivel consultar o banco de dados\n";
				echo 'Erro MySQL: ' . mysql_error();
				exit;
			}
			while ($row = mysql_fetch_assoc($result)){
			$i++;
			if($i==2){
		?>
		
		<div class="bloco_agenda" style="background: #82b950;">
			<div class="titulo_ agenda">
			::  <?php echo $row['titulo'];?>
			</div>
			<div class="data_evento">
				Data: <?php echo $row['data_evento'] ;?>
			</div>
			<div class="data_evento">
				Local: <?php echo $row['local_evento'] ;?>
			</div>
			<div class="data_evento">
				   Horario: <?php echo $row['horario'] ;?>
			</div>
			<div class="mais_recente">
				Atenção ao Evento mais Recente.
			</div>
		</div>
		
		<?php
			}
			else if ($i!=1){
		?>
		
		
		<div class="bloco_agenda" >
			<div class="titulo_agenda2">
			:: <?php echo $row['titulo'];?>
			</div>
			<div class="data_evento2">
				Data: <?php echo $row['data_evento'] ;?>
			</div>
			<div class="data_evento2">
				Local: <?php echo $row['local_evento'] ;?>
			</div>
			<div class="data_evento2">
				   Horario:<?php echo $row['horario'] ;?>
			</div>
		</div>
		
		<?php
			}
			}
			
		?>
		
	</div>
	<div class="clear" ></div> 
		<div class="letra12MyriadPro" style="text-align:right; margin-top:10px; ">
				<<   |   <   |   1   2   3   |   >   |   >>
		</div>
</div>