<html>
 <head> 
 <style> 
 table, td, th 
 {
border: 1px solid black; 
width: 5%;
text-align: center; 
background-color: DarkGray; 
}
td{
    width:10px;
}
.acess { margin: auto;width: 50%; }
input,p { text-align:right; } </style>
</head>
<body>
<form method="post">
<table class="acess">
<?php
if(isset($_POST['sub']))
{
//row 1 values
$aqty1=$_POST['aqty1'];
$aunitprice1=$_POST['aunitprice1'];

//row 2 values
$aqty2=$_POST['aqty2'];
$aunitprice2=$_POST['aunitprice2'];

//row 3 values
$aqty3=$_POST['aqty3'];
$aunitprice3=$_POST['aunitprice3'];

//row 4 values
$aqty4=$_POST['aqty4'];
$aunitprice4=$_POST['aunitprice4'];





//row 1 calculation


//row 2 calculation



//frame price

$aframeprice=($aunitprice1*$aqty1)+($aunitprice2*$aqty2)+($aunitprice3*$aqty3)+($aunitprice4*$aqty4);

}
?>

<!-- UI part -->
<h1><center> <b>Acessori Calculator</b></center></h1>
<tr>
<th>Items</th>
<th><p style="width: 60px;margin:auto;text-align:center;">Type</p></th>
<th>Length - cms</th>
<th>Qty </th>
<th>Thickness - mm</th>
<th>Strip Width - cm</th>
<th>S Area - Sqft</th>
<th>Weight - Kgs</th>
<th>RM Cost</th>
<th>FAB Cost</th>
<th>Pc cost</th>
<th>Total Cost</th>
<th>Unit Price</th>
<th>Frame Price</th>


</tr>

<!-- UI part row 1 -->
<tr>
<td><b> Row Ties</b></td>
<td></td>
<td></td>
<td><input type="text" name='aqty1' size="4" value="<?php echo isset($_POST['aqty1']) ? $_POST['aqty1'] : ''?>"/></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="text" name='aunitprice1' size="4" value="<?php echo isset($_POST['aunitprice1']) ? $_POST['aunitprice1'] : ''?>"/></td>
<td rowspan = '12'><?php if(isset($aframeprice)) echo"<p>".round($aframeprice,1)."</p>"; ?></td>


</tr>

<!-- UI part row 2-->
<tr>
<td><b> Block Ties</b></td>
<td></td>
<td></td>
<td><input type="text" name='aqty2' size="4" value="<?php echo isset($_POST['aqty2']) ? $_POST['aqty2'] : ''?>"/></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

<td></td>
<td></td>
<td></td>
<td><input type="text" name='aunitprice2' size="4" value="<?php echo isset($_POST['aunitprice2']) ? $_POST['aunitprice2'] : ''?>"/></td>

<!-- UI part row 3-->
</tr>
<tr>
<td><b> Column Guard</b></td>
<td></td>
<td></td>
<td><input type="text" name='aqty3' size="4" value="<?php echo isset($_POST['aqty3']) ? $_POST['aqty3'] : ''?>"/></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

<td></td>
<td></td>
<td></td>
<td><input type="text" name='aunitprice3' size="4" value="<?php echo isset($_POST['aunitprice3']) ? $_POST['aunitprice3'] : ''?>"/></td>

</tr>
<!-- UI part row 4-->
<tr>
<td><b> Row Guard</b></td>
<td></td>
<td></td>
<td><input type="text" name='aqty4' size="4" value="<?php echo isset($_POST['aqty4']) ? $_POST['aqty4'] : ''?>"/></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

<td></td>
<td></td>
<td></td>
<td><input type="text" name='aunitprice4' size="4" value="<?php echo isset($_POST['aunitprice4']) ? $_POST['aunitprice4'] : ''?>"/></td>

</tr>
<!-- UI part row 4-->
<tr>
<td><b> Wire Mesh</b></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</from>
</body> 
</html>