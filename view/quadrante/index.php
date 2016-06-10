<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="css/bootstrap.css" rel="stylesheet">
	<title></title>
</head>
<body>

<?php
error_reporting(0);
?>
<?php


require_once "../../model/quadranteModel.php";
require_once "../../model/coordenadorModel.php";
require_once "../../model/grupoModel.php";


						$obj = new quadranteModel();
						$objg = new grupoModel();
						$objc = new coordenadorModel();
					
						$linha = $objc->numero();


			

?>
			<table align="center" border="1"  width="100%"  >
				<tr border="1" bordercolor="#000000" align="center"> 
					<td>
						<font  id="font_coord" size="+6"><b>CURSISTAS <?php print $linha["numero_rejoc"] ?>º REJOC</b></font>
					</td>    
				</tr>
			</table>
			
	
			
			       
				<?php 
					
					


						for($i=0; $i<36; $i++){
							$qtd = $obj->qtd($i);
							$linhaQtd = mysqli_fetch_array($qtd);
							$equipeArray = $obj->equipeQuadrante($i);
							$pessoaArray = $obj->todosEquipe($i);
							
						 foreach($equipeArray as $linhaE){ 

				?>

							<table align="center" border="1" width="100%"   >
								<tr border="1" bordercolor="#000000" align="center"> 
									<td>
										<font size="+3"><b><?php print $linhaE["nome_equipe"] ?></b></font>
									</td>    
								</tr>
							</table> 

			<table class="quadrante_font">
						<?php }
						 	$x=0;

									 foreach($pessoaArray as $linha){
									 			
							if( $x !=0 && ($x % 3)==0 )
									{
										echo '<tr>';
									}
									else{
											if($x==0)
											{
												echo '<tr>';
											}
										}

						 ?>
			 
						 		
										<td>                                    
										   
										   <table width="275" border="1" bordercolor="#000000">

												  <tr>

													<td width="228"><b><?php print $linha["nome_pessoa"]; ?></b></td>
													<td width="31" align="center"><b><?php print $linha["dia_nasc"]; ?>/<?php print $linha["mes_nasc"]; ?></b></td>
												  </tr>

												  <tr>

													<td colspan="2"><?php print $linha["endereco"]; ?></td>

												  </tr>

												  <tr>

													<td colspan="2"> <?php print $linha["bairro"]; ?> - <?php print $linha["nome_cidade"]; ?> / <?php print $linha["uf"]; ?></td>
												  </tr>

												  <tr>

													<td colspan="2"><b>CEP: </b><?php print $linha["cep"]; ?></td>

												  </tr>

												  <tr>

													<td colspan="2"><b>Fone: </b><?php print $linha["fone"]; ?></td>

												  </tr>

												  <tr>

													<td colspan="2"><b>E-mail: </b><?php print $linha["email"]; ?></td>

												  </tr> 

										   </table>                                 
									  </td>   
								                      
					<?php 
								$x++;
									
									if(($x!=0) && ($x%3)==0)
									{
										echo '</tr>';
									}							
									if(($x>= ($linhaQtd['qtd_pessoa'])-1)&&((x%3)!=0) )
									{
										echo '</tr>';
									}

							
						}
					}

					 ?>
							
		   </table>
		  
			
  


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  
		  <table align="center" border="1" width="100%"   >

						<tr border="1" bordercolor="#000000" align="center"> 
							<td>
								<font size="+3"><b>Grupos e Horários</b></font>
							</td>    
						</tr>
		  </table>
					
			
					<table border="1"  bordercolor="#000000" width='100%' class="fixo"  >		
							
						<tr>
							<td align="center" width='33%' >
								Nome do Grupo
							</td>
							<td align="center" width='33%'>
								Local
							</td>
							<td align="center" width='33%'>
								Dia da Semana e Horário
							</td>
						</tr>
					</table>
			<?php 
						$grupoArray = $objg->listaTodos();
									 foreach($grupoArray as $linha){


			 ?>
			 <table border="1"  bordercolor="#000000" width='100%' class="fixo"  >		

						<tr>
							<td align="center" width='33%'>
								<?php print $linha["nome_grupo"]; ?>
							</td>
							<td align="center" width='33%'>
								<?php print $linha["endereco_grupo"]; ?>
							</td>
							<td align="center" width='33%'>
								<?php print $linha["dia"]; ?> - <?php print $linha["horario"]; ?>
							</td>
						</tr>
					
					</table>

				<?php 
					}	
						$linha = $objc->numero();
												 
				?>
  
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  		
  			<table align="center" border="1" width="100%"   >
				<tr border="" bordercolor="#000000" align="center"> 
					<td>
						<font size="+3"><b>Coordenadores do <?php print $linha["numero_rejoc"]; ?>º REJOC</b></font>
					</td>    
				</tr>
			</table>


			<?php	



								$coordenadorArray = $objc->listaTodos();
											
											 foreach($coordenadorArray as $linha){	

						?>
												<table align='center' border='1px' width='800px' height='2px' >
													
														<tr align='center'>
															<td id='tabela_coord' >
																<font size="+2" >    <?php print $linha["nome_coordenador"]; ?>
																</font> 
															</td>

														</tr>
													
												</table>
					
						
						<?php 			
							}	
											 
						?>
			

			
</body>
</html>


			
			
			
 
   