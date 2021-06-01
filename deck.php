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
.deck { margin: auto;width: 50%; }
table { margin: auto; } input,p { text-align:right; } </style>
</head>
<body>
<form method="post">
<table class="deck">
<?php
if(isset($_POST['sub']))
{
//row 1 values
$dtype1=$_POST['dtype1'];
$dlength1=$_POST['dlength1'];
$dqty1=$_POST['dqty1'];
$dthick1=$_POST['dthick1'];
$dstrip1=$_POST['dstrip1'];

//row 2 values
$dtype2=$_POST['dtype2'];
$dlength2=$_POST['dlength2'];
$dqty2=$_POST['dqty2'];
$dthick2=$_POST['dthick2'];
$dstrip2=$_POST['dstrip2'];

//row 3 values

$dtype3=$_POST['dtype3'];
$dlength3=$_POST['dlength3'];
$dqty3=$_POST['dqty3'];
$dthick3=$_POST['dthick3'];
$dstrip3=$_POST['dstrip3'];

//row 4 values

$dtotalcost4=$_POST['dtotalcost4'];




//row 1 calculation

$dsqft1=($dlength1*$dstrip1*2)/930.25;
$a=$dsqft1;
$dweight1=($dlength1*$dthick1*$dstrip1*7.85)/10000;
$GI=77;
$hr=55;
$gn=8;
$panels=25;
if($dtype1=="GI"){
    $drmcost1=$dweight1*$GI;
}
else{
$drmcost1=$dweight1*$hr;
}
if($dqty1==0){
    $dfabcost1=0;
}
else{
$dfabcost1=$panels;
}
if($dtype1=="GI"){
    $dpccost1=0;
}
else{
$dpccost1=$dsqft1*$gn;
}
$dtotalcost1=$drmcost1+$dpccost1+$dfabcost1;
$do7=0;
$dunitprice1=$dtotalcost1/(1-(25+$do7)/100);


//row 2 calculation

$dsqft2=($dlength2*$dstrip2*2)/930.25;
$a=$dsqft2;
$dweight2=($dlength2*$dthick2*$dstrip2*7.85)/10000;
$GI=77;
$hr=55;
$gn=8;
$panels=25;
if($dtype2=="GI"){
    $drmcost2=$dweight2*$GI;
}
else{
$drmcost2=$dweight2*$hr;
}
if($dqty2==0){
    $dfabcost2=0;
}
else{
$dfabcost2=$panels;
}
if($dtype2=="GI"){
    $dpccost2=0;
}
else{
$dpccost2=$dsqft2*$gn;
}
$dtotalcost2=$drmcost2+$dpccost2+$dfabcost2;
$do7=0;
$dunitprice2=$dtotalcost2/(1-(25+$do7)/100);

//row 3 calculation

$dsqft3=($dlength3*$dstrip3*2)/930.25;
$a=$dsqft3;
$dweight3=($dlength3*$dthick3*$dstrip3*7.85)/10000;
$GI=77;
$hr=55;
$gn=8;
$panels=25;
if($dtype3=="GI"){
    $drmcost3=$dweight3*$GI;
}
else{
$drmcost3=$dweight3*$hr;
}
if($dqty3==0){
    $dfabcost3=0;
}
else{
$dfabcost3=$panels;
}
if($dtype3=="GI"){
    $dpccost3=0;
}
else{
$dpccost3=$dsqft3*$gn;
}
$dtotalcost3=$drmcost3+$dpccost3+$dfabcost3;
$do7=0;
$dunitprice3=$dtotalcost3/(1-(25+$do7)/100);

//row 4 calculation

$dunitprice4=$dtotalcost4/(1-(25+$do7)/100);

//row 5 calculation

$dframeprice=($dunitprice1*$dqty1)+($dunitprice2*$dqty2)+($dunitprice3*$dqty3);

}
?>

<!-- UI part -->
<h1><center> <b>Deck Panels Calculator</b></center></h1>
<tr>
<th><p style="width: 60px;margin:auto;text-align:center;">Items</p></th>
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
<td><b> DECK PANEL 1</b></td>
<td><input type="text" name='dtype1' size="4" value="<?php echo isset($_POST['dtype1']) ? $_POST['dtype1'] : ''?>"/></td>
<td><input type="text" name='dlength1' size="4" value="<?php echo isset($_POST['dlength1']) ? $_POST['dlength1'] : ''?>"/></td>
<td><input type="text" name='dqty1' size="4" value="<?php echo isset($_POST['dqty1']) ? $_POST['dqty1'] : ''?>"/></td>
<td><input type="text" name='dthick1' size="4" value="<?php echo isset($_POST['dthick1']) ? $_POST['dthick1'] : ''?>"/></td>
<td><input type="text" name='dstrip1' size="4" value="<?php echo isset($_POST['dstrip1']) ? $_POST['dstrip1'] : ''?>"/></td>
<td><?php if(isset($dsqft1)) echo"<p>".round($dsqft1,1)."</p>"; ?></td>
<td><?php if(isset($dweight1)) echo"<p>".round($dweight1,1)."</p>"; ?></td>
<td><?php if(isset($drmcost1)) echo"<p>".round($drmcost1,1)."</p>"; ?></td>

<td><?php if(isset($dfabcost1)) echo"<p>".round($dfabcost1,1)."</p>"; ?></td>
<td><?php if(isset($dpccost1))echo"<p>".round($dpccost1,1)."</p>"; ?></td>
<td><?php if(isset($dtotalcost1))echo"<p>".round($dtotalcost1,1)."</p>"; ?></td>
<td><?php if(isset($dunitprice1))echo"<p>".round($dunitprice1,1)."</p>"; ?></td>
<td rowspan = '12'><?php if(isset($dframeprice)) echo"<p>".round($dframeprice,1)."</p>"; ?></td>

</tr>

<!-- UI part row 2-->

<tr>
<td><b>DECK PANEL 2</b></td>
<td><input type="text" name='dtype2' size="4" value="<?php echo isset($_POST['dtype2']) ? $_POST['dtype2'] : ''?>"/></td>
<td><input type="text" name='dlength2' size="4" value="<?php echo isset($_POST['dlength2']) ? $_POST['dlength2'] : ''?>"/></td>
<td><input type="text" name='dqty2' size="4" value="<?php echo isset($_POST['dqty2']) ? $_POST['dqty2'] : ''?>"/></td>
<td><input type="text" name='dthick2' size="4" value="<?php echo isset($_POST['dthick2']) ? $_POST['dthick2'] : ''?>"/></td>
<td><input type="text" name='dstrip2' size="4" value="<?php echo isset($_POST['dstrip2']) ? $_POST['dstrip2'] : ''?>"/></td>
<td><?php if(isset($dsqft2)) echo"<p>".round($dsqft2,1)."</p>"; ?></td>
<td><?php if(isset($dweight2)) echo"<p>".round($dweight2,1)."</p>"; ?></td>
<td><?php if(isset($drmcost2)) echo"<p>".round($drmcost2,1)."</p>"; ?></td>
<td><?php if(isset($dfabcost2)) echo"<p>".round($dfabcost2,1)."</p>"; ?></td>
<td><?php if(isset($dpccost2)) echo"<p>".round($dpccost2,1)."</p>"; ?></td>
<td><?php if(isset($dtotalcost2)) echo"<p>".round($dtotalcost2,1)."</p>"; ?></td>
<td><?php if(isset($dunitprice2)) echo"<p>".round($dunitprice2,1)."</p>"; ?></td>

</tr>

<!-- UI part row 3 -->
<tr>
<td><b>DECK PANEL 3</b></td>
<td><input type="text" name='dtype3' size="4" value="<?php echo isset($_POST['dtype3']) ? $_POST['dtype3'] : ''?>"/></td>
<td><input type="text" name='dlength3' size="4" value="<?php echo isset($_POST['dlength3']) ? $_POST['dlength3'] : ''?>"/></td>
<td><input type="text" name='dqty3' size="4" value="<?php echo isset($_POST['dqty3']) ? $_POST['dqty3'] : ''?>"/></td>
<td><input type="text" name='dthick3' size="4" value="<?php echo isset($_POST['dthick3']) ? $_POST['dthick3'] : ''?>"/></td>
<td><input type="text" name='dstrip3' size="4" value="<?php echo isset($_POST['dstrip3']) ? $_POST['dstrip3'] : ''?>"/></td>
<td><?php if(isset($dsqft3)) echo"<p>".round($dsqft3,1)."</p>"; ?></td>
<td><?php if(isset($dweight3)) echo"<p>".round($dweight3,1)."</p>"; ?></td>
<td><?php if(isset($drmcost3))echo"<p>".round($drmcost3,1)."</p>"; ?></td>
<td><?php if(isset($dfabcost3)) echo"<p>".round($dfabcost3,1)."</p>"; ?></td>
<td><?php if(isset($dpccost3)) echo"<p>".round($dpccost3,1)."</p>"; ?></td>
<td><?php if(isset($dtotalcost3))echo"<p>".round($dtotalcost3,1)."</p>"; ?></td>
<td><?php if(isset($dunitprice3)) echo"<p>".round($dunitprice3,1)."</p>"; ?></td>

</tr>

<!-- UI part row 4 -->

<tr>
<td><b>PANEL BOLTS</b></td>
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
<td><input type="text" name='dtotalcost4' size="4" value="<?php echo isset($_POST['dtotalcost4']) ? $_POST['dtotalcost4'] : ''?>"/></td>
<td><?php if(isset($dunitprice4)) echo"<p>".round($dunitprice4,1)."</p>"; ?></td>

</tr>

</table>
</from>
</body> 
</html>
