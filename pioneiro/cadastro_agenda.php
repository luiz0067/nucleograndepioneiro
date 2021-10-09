<?php
include('cabecalho.php');
	
?>
<head>
	<script type="text/javascript" src="./js/functions.js"></script>
</head>

<?php	
	$row=null;
	$result=null;
	if (isset($_GET["id"])){
		$sql	= "SELECT id,titulo,data_evento,horario,local_evento FROM agenda where (id=0".$_GET["id"].")";
		$result=mysql_query($sql,$link);
		$row = mysql_fetch_assoc($result);
		//echo $sql;
	}
	
	$agenda=0;
	if (isset($_GET["agenda"])){
		$agenda=$_GET["agenda"];	
	}
	else if (isset($_POST["agenda"])){
		$agenda=$_POST["agenda"];
	}
?>

<?php
	if ($_POST) {	
	
	
	
	
		if ($_POST ['acao']=='alterar'){
			//delete_file($folder . $imagem_antiga);
			$sql = "update agenda set titulo='".$_POST["titulo"]."',horario='".$_POST["horario"]."',local_evento='".$_POST["local_evento"]."',data_evento='".$_POST["data_evento"]."' where (id=".$_POST["id"].");";
			//echo $sql;
			mysql_query($sql, $link);
		}
		
		
		
		
		
		else if( $_POST['acao']=='inserir'){ 
			$sql = "insert into agenda (titulo,data_evento,local_evento,horario) values ('".$_POST["titulo"]."','".$_POST["data_evento"]."','".$_POST["local_evento"]."','".$_POST["horario"]."');";
			//echo $sql;
			mysql_query($sql, $link);
				
				
				

		}
		
		
		else if ($_POST['acao']=='excluir'){
			//delete_file($folder . $imagem_antiga);
			$sql = 'delete FROM agenda where id='.$_POST["id"];
			//echo $sql;
			mysql_query($sql, $link);
		}	
			$redirect = "upload.php?success";
	
	
	
	}
	
	
	
	
?>
<div id="individual_cadastro">
	<div id="nome_cadastro">CADASTRO - EVENTO</div>
		<div id="input_cadastro">
			<form method="post" enctype="multipart/form-data_evento" name="form1" id="form1">
				<table >
					<tr>
						<td><input name="id" type="HIDDEN" value="<?php echo $row["id"]?>"></td>
					</tr>
					<tr>
						<td>TÍTULO:</td>
						<td><input name="titulo" size="70" type="text" value="<?php echo $row["titulo"]?>"></td>
					</tr>
					<tr>
						<td>LOCAL:</td>
						<td><input name="local_evento" size="70" type="text" value="<?php echo $row["local_evento"]?>"></td>
					</tr>
					<tr>
						<td>DATA DO EVENTO:</td>
						<td><input name="data_evento" size="70" type="text" value="<?php echo $row["data_evento"]?>"></td>
					</tr>
					<tr>
						<td>HORARIO DO EVENTO:</td>
						<td><input name="horario" size="70" type="text" value="<?php echo $row["horario"]?>"></td>
					</tr>
				</table>
				<div style="margin-left:145px; margin-top:20px;">			
					<input type="submit" name="acao" value="inserir">
					
					<input type="submit" name="acao" value="alterar">
					
					
					<input type="submit" name="acao" value="excluir">
					
					<input type="button" value="limpar" onclick="self.location.href='?pg=cadastro_agenda'">	
				</div>
			</form>
		</div>
		
		
		
		
		
		
		<div id="relatorio_input">
			<table cellpadding= "4" cellspacing = "0" border= "1" width="1004">
				<tr bgcolor="#CCCCCC" height="40" >
					<td>EDITAR</td>
					<td>N°</td>
					<td>TÍTULO</td>
					<td>LOCAL</td>
					<td>DATA DO EVENTO</td>
					<td>HORARIO</td>
				</tr>
				<?php
					if ($result!=null){
						mysql_free_result($result);
					}
					$sql    = 'SELECT id,titulo,data_evento,horario,local_evento FROM agenda;';
					$result = mysql_query($sql, $link);
					if (!$result) {
						echo "Erro do banco de dados, não foi possivel consultar o banco de dados\n";
						echo 'Erro MySQL: ' . mysql_error();
						exit;
					}
					while ($row = mysql_fetch_assoc($result)){
				?>
					<tr>
						<td><a href="principal.php?pg=cadastro_agenda&id=<?php echo $row['id'];?>" VALUE="EDITAR" NAME="EDITAR">
						<div style="color:#000000;" VALUE="EDITAR" NAME="EDITAR"><img src="./imagens/editar.gif" width="21" height="21" VALUE="EDITAR" NAME="EDITAR" border="0" />
						
						</div>
						<a/></td>
						<td><?php echo $row['id'];?>&nbsp </td>
						<td><?php echo $row['titulo'];?>&nbsp </td>
						<td><?php echo $row['local_evento'] ;?></td>
						<td><?php echo $row['data_evento'] ;?></td>
						<td><?php echo $row['horario'] ;?></td>
					</tr>
					<?php
					}
					mysql_free_result($result);
					?>
			</table>
		</div>
	</div>
<?php
	include('rodape.php');
?>
