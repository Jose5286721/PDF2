<?php

require_once __DIR__ . '/vendor/autoload.php';
$estilo1 = file_get_contents('style.css');
$mpdf = new \Mpdf\Mpdf([
    'format' => 'Letter-P',
    'margin_left' => 0,
    'margin_right' => 0,
    'margin_top' => 0,
    'margin_bottom' => 0,
    'margin_header' => 0,
    'margin_footer' => 0,
]);
$html = '
<div style="width:40%; margin-left:8%; height:10%;">
<div style="width:100%; height:1%;" />
<div style="width:50%; height:10%;  font-family:Montserrat; ">
	<h1>INVOICE</h1>
</div>
</div>
<div style=" font-family:Montserrat; width:56%; height:4%; background-color:#F4E013; float:left;"></div>
<div style="width:9.99%; height:4%;  font-family:Montserrat; background-color:#F4E013; float:right;"></div>
<div style="width:30%; float:right; position:absolute; top:9.6%; font-family:Montserrat;  left:57%; text-align:center; height:7%; font-size:80px; background-color:white;">
	INVOICE
</div>
<div style="width:84%; margin-left:8%; height:11%;">
	<div style="width:49%; float:left; height:8%; margin-top:3%;font-size:15px; font-family:Montserrat; ">
		<div style="font-size:20px; font-family:Montserrat; "><strong>Invoice to:</strong></div>
		<div style="font-size:17px; margin-top:1%; font-family:Montserrat; "><strong>Dwayne Clark</strong></div>
		24 Dummy Street Area,<br/>
		Location, Lorem Ipsum,<br/>
		570xx59x
	</div>
	<div style="width:35%; float:right; height:9%; margin-top:4%;">
		<table style="width:100%;  font-size:17px;">
		<tr>
			<th style="text-align:left;">Invoice#</th>
			<td style="text-align:right;">52148</td>
		</tr>
		<tr>
			<th style="text-align:left;">Date</th>
			<td style="text-align:right;">01/02/2010</td>
		</tr>
	</table>
	</div>
</div>
<div style="border:1px solid black; width:84%; margin-left:8%; margin-top:3%;">
	<table class="TablaContenido">
		<thead><tr>
			<td>SL.</td>
			<td>Item Description</td>
			<td>Price</td>
			<td>Qty</td>
			<td>Total</td>
		</tr>
		</thead>
		<tr>
			<td>1</td>
			<td>Lorem Impsum Dolor</td>
			<td>$50.00</td>
			<td>1</td>
			<td>$50.00</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Pellentesque id neque llgula</td>
			<td>$20.00</td>
			<td>3</td>
			<td>$60.00</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Interdum et malesuada fames</td>
			<td>$10.00</td>
			<td>2</td>
			<td>$20.00</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Vivamus volupat faucibus</td>
			<td>$90.00</td>
			<td>1</td>
			<td>$90.00</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</div>
<div style="width:92%; margin-left:8%; height:20%; font-family:Montserrat;  margin-top:1%;">
<div style="width:40%; float:right; height:9%; font-family:Montserrat; ">
<table class="tablaTotales">
	<tr>
		<th>Sub Total:</th>
		<th>$220.00</th>
	</tr>
	<tr>
		<th>Tax:</th>
		<th>0.00%</th>
	</tr>
</table>
<div style="background-color:#F4E013;">
<table class="tablaTotal">
<tr>
	<th>Total:</th>
	<th>&nbsp;&nbsp;&nbsp;&nbsp;$220.00</th>
</tr>
</table>
</div>
</div>

<div style="float:left; width:49%;  font-family:Montserrat; margin-top:1%;"><strong>Thank for your bussiness</strong></div>

<div style="width:49%; float:left; height:4%; margin-top:2%; font-family:Montserrat;  font-size:10px;">
<div style="font-size:14px; font-family:Montserrat; "><strong>Terms & Conditions</strong></div>
Lorem ipsum dolor sit amet, consectetur adipiscing<br/>
elit. Fusce dignissim pretium consectetur
</div>

<div style="width:49%; float:left; height:9%; font-family:Montserrat;   margin-top:2%;">
<strong>Payment Info:</strong><br/>
<div style="width:60%; font-family:Montserrat; ">
	<table class="tablaPayment">
		<tr>
			<th>Account #:</th>
			<td>1234 5678 9012</td>
		</tr>
		<tr>
			<th>A/C Name:</th>
			<td>Lorem Ipsum</td>
		</tr>
		<tr>
			<th>Bank Details</th>
			<td>Add your bank details</td>
		</tr>
	</table>
</div> 
</div>
</div>

' ;
$mpdf->WriteHTML($estilo1,1);
$mpdf->WriteHTML($html,2);
$htmlFooter='
<div style="width:100%; height:5%; font-family:Montserrat; background-color:#F4E013; float:left;"></div>
<div style="border-top:3px solid #F4E013; float:left; width:70%; height:7%;">
	<div style="margin-left:13%; margin-top:3%; width:70%; height:5%; background-color:#F4E013;">
		Phone # &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Website
	</div>
</div>
<div style="margin-left:3%; float:left; width:18%; font-family:Montserrat;  text-align:center; border-top:3px solid gray;">Autorised Sign</div>
<div style="margin-left:3%; float:left; font-family:Montserrat;  width:6%; border-top:3px solid #F4E013; height:5%;"></div>
';
$mpdf->setHTMLFooter($htmlFooter,2);
$mpdf->Output();