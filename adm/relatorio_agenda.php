	<link rel="stylesheet" type="text/css" href="./css/estilocrm.css" />
<?php	

error_reporting(0);
	ini_set(“display_errors”, 0 );
	include('cabecalho.php');
	$row=null;
	$result=null;
	if (isset($_GET["id_categoria_agenda"])){
		$sql	= "SELECT id,id_categoria_agenda,imagem,conteudo FROM agenda where (id_categoria_agenda=0".$_GET["id_categoria_agenda"].")";
		$result=mysql_query($sql,$link);
		$row = mysql_fetch_assoc($result);
		//echo $sql;
	}
	$categoria_agenda=0;
	if (isset($_GET["categoria_agenda"])){
		$categoria_agenda=$_GET["categoria_agenda"];	
	}
	else if (isset($_POST["categoria_agenda"])){
		$categoria_agenda=$_POST["categoria_agenda"];
	}
?>
<script>
	function idJump(element){
		var acc="relatorio_agenda.php?id_categoria_agenda=";
		var id_categoria_agenda=element.options[element.selectedIndex].value
		acc=acc+id_categoria_agenda;
		self.location.href=acc;
	}
	function WinOpen(pagina,janela,opcoes){
		window.open(pagina,janela,opcoes);
	}
</script>

<form method="post">
		<?php
			if ($_POST['acao']=='excluir'){
				$sql = 'delete FROM agenda where id='.$_POST["id"];
				//echo $sql;
				mysql_query($sql, $link);
			}
			else if ($_POST ['acao']=='alterar'){
				$sql = "update agenda set imagem='".$imagem."', conteudo='".$_POST["conteudo"]."' where (id=".$_POST["id"].");";
				//echo $sql;
				mysql_query($sql, $link);
			}
			else if( $_POST['acao']=='inserir'){
				$sql = "insert into agenda (id,id_categoria_agenda,conteudo) values ('".$_POST["id_categoria_agenda"]."','".$_POST["conteudo"]."','".$imagem."');";
				//echo $sql;
				mysql_query($sql, $link);
			}
			if( $_POST['acao']=='buscar por codigo'){
					$sql    = "select id,id_categoria_agenda,conteudo FROM agenda  where (id=".$_POST["id"].") order by id asc";
					//echo $sql;
					mysql_query($sql, $link);
				}
				else if( $_POST['acao']=='Buscar'){
					$sql    = "select id,id_categoria_agenda,conteudo,imagem FROM agenda where(agenda like '%".$_POST["conteudo"]."%') order by conteudo asc";
					//echo $sql;
					mysql_query($sql, $link);
				}
				else
					$total=$_POST["total"];				
				if($_POST["mover"]=="primeiro"){
					$limite=" limit 0 , ".$_POST["registros"];
					$pagina=1;
				}
		
		?>
	<div id="input_cadastro">
		<table WIDTH="690" >
				
			<tr>
				<td>
				Evento:
					<select name="id_categoria_agenda" onchange="idJump(this)" <?php echo $row["id_categoria_agenda"]?>>
						<option >
						Escolha uma categoria
						</option>
						<?php
						$row_categoria_agenda=null;
						$result_categoria_agenda=null;		
						$sql_categoria_agenda    = 'SELECT id,data_evento,titulo FROM categoria_agenda order by titulo asc;';
						$result_categoria_agenda = mysql_query($sql_categoria_agenda, $link);
						if (!$result_categoria_agenda) {
							echo "Erro do banco de dados, não foi possivel consultar o banco de dados\n";
							echo 'Erro MySQL: ' . mysql_error();
							exit;
						}
						while ($row_categoria_agenda = mysql_fetch_assoc($result_categoria_agenda)){
							$selected="";
							if ($result!=null){
								if($row["id_categoria_agenda"]==$row_categoria_agenda['id'])
									$selected="selected";
							}
							
						?>
							<option value="<?php echo $row_categoria_agenda['id'];?>" <?php echo $selected?>>              
								<?php echo $row_categoria_agenda['titulo'];?>
							</option>
						<?php
							}
							mysql_free_result($result_categoria_agenda);
						?>
					</select>
				</td>
			</tr>
		</table>
	</div>
	<div id="relatorio_input">
		<table cellpadding= "4" cellspacing = "0" border= "1" width="1004">
			<tr bgcolor="#CCCCCC" height="40" >
				<td>Ação</td>
				<td >Conteudo</td>
				<td >Imagem</td>
			</tr>
		<?php
	

			$result = mysql_query($sql, $link);
			if ($result!=null)
			while ($row = mysql_fetch_assoc($result)){
	
		?>
				<tr>
					<td>
						<a href="javascript:WinOpen('altera_agenda.php?id=<?php echo $row['id'];?>','Popup','width=500,height=450,top=100,left=250');">
						<div style="color:#000000;"><img src="./imagens/editar.gif" width="21" height="21" border="0" /></div>
						</a>
					</td>
					<td><?php echo $row['conteudo'];?>&nbsp </td>
					<td>
						<a href="../agenda/<?php echo $row['imagem'];?>"><?php echo $row['imagem'];?><a/><br>
						<img width="160px" height="109px" src="../agenda/g_<?php echo $row['imagem'];?>">
					</td>
				</tr>
			<?php
				}
			if ($result!=null){
				mysql_free_result($result);
			}
			?>
		</table>
	</div>
</form>
<?php
	include('rodape.php');
?>
