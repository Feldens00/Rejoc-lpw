
<?php


require_once "../../model/quadranteModel.php";



?>
			<table align="center" border="1"  width="100%"  >
				<tr border="1" bordercolor="#000000" align="center"> 
					<td>
						<font size="+6"><b>CURSISTAS 128º REJOC</b></font>
					</td>    
				</tr>
			</table>
			
			 
			
			<table class="quadrante_font">        
				<?php 
					
					$obj = new quadranteModel();
					


						for($i=0; $i<36; $i++){

							$equipeArray = $obj->equipeQuadrante($i);
							$pessoaArray = $obj->listaTodos($i);

						 foreach($equipeArray as $linhaE){ 
				?>

							<table align="center" border="1" width="100%"   >
								<tr border="1" bordercolor="#000000" align="center"> 
									<td>
										<font size="+3"><b><?php print $linhaE["nome_equipe"] ?></b></font>
									</td>    
								</tr>
							</table> 

						<?php }
									 foreach($pessoaArray as $linha){


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
					<?php	}
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
					
			<table border="1"  bordercolor="#000000">		
					
				<tr>
					<td align="center">
						Nome do Grupos
					</td>
					<td align="center">
						Local
					</td>
					<td align="center">
						Horário
					</td>
				</tr>
						
			
			</table>
			
				
  
  
  
  
  
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  
  
			<table align="center" border="1" width="100%"   >
				<tr border="" bordercolor="#000000" align="center"> 
					<td>
						<font size="+3"><b>Coordenadores do 128º REJOC</b></font>
					</td>    
				</tr>
			</table>
							
					
					<table align="center" border="3px">
						<td>
							<font size="+3" align="center">Ana Paula e Paulo  - Viviane e Edinei - Rodrigo e Barbara <br>
							Jonas e Lisiane  - Isadora e Lazie Roberta e Patric  - Elizeu e Leticia - Elisandra e Ivan <br> 
							Alexandre e Janete - Raquel e Peterson
							Adriana - Sabrina – Ivete  - Andressa <br> – Bilquide - Enilda  - Ethiene - José Carlos - Giba

							</font> 
						</td>
					</table>
			
				
				
			
			
			
 
   