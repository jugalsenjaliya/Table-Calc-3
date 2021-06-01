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
.skid { margin: auto;width: 50%; }
table { margin: auto; } input,p { text-align:right; } </style>
</head>
<body>
<form method="post">
<table class="skid">
<?php
if(isset($_POST['sub']))
{
//row 1 values
//$type1=$_POST['type1'];
$slength1=$_POST['slength1'];
$sqty1=$_POST['sqty1'];
$sthick1=$_POST['sthick1'];
$sstrip1=$_POST['sstrip1'];

//row 2 values
//$type2=$_POST['type2'];
$slength2=$_POST['slength2'];
$sqty2=$_POST['sqty2'];
$sthick2=$_POST['sthick2'];
$sstrip2=$_POST['sstrip2'];

//row 3 values

$stype3=$_POST['stype3'];
$slength3=$_POST['slength3'];
$sqty3=$_POST['sqty3'];
$sthick3=$_POST['sthick3'];
$sstrip3=$_POST['sstrip3'];

//row 4 values


$stype4=$_POST['stype4'];
$slength4=$_POST['slength4'];
$sqty4=$_POST['sqty4'];
$sthick4=$_POST['sthick4'];
$sstrip4=$_POST['sstrip4'];





//row 1 calculation

if($sqty1==0){
    $ssqft1=0;
}
else{
$ssqft1=($sstrip1*$slength1*2)/930.25+1;
}
if($sqty1==0){
    $sweight1=0;
}
else{
    $sweight1=($slength1*$sthick1*$sstrip1*7.85)/10000+0.75;
}

$hr=45;
$cr=45;
$psb=25;
$gn=8;
$srmcost1=$hr*$sweight1;

if($sqty1==0){
    $sfabcost1=0;
}
else{
$sfabcost1=$psb;
}

$spccost1=$ssqft1*$gn;
$stotalcost1=$srmcost1+$spccost1+$sfabcost1;
$o7=0;
$sunitprice1=$stotalcost1/(1-(25+$o7)/100);


//row 2 calculation

if($sqty2==0){
    $ssqft2=0;
}
else{
$ssqft2=($sstrip2*$slength2*2)/930.25+1;
}
$a=$ssqft2;
if($sqty2==0){
    $sweight2=0;
}
else{
    $sweight2=($slength2*$sthick2*$sstrip2*7.85)/10000+0.75;
}

$a=$ssqft2;
$hr=45;
$cr=45;
$psb=25;
$gn=8;
$srmcost2=$hr*$sweight2;

if($sqty2==0){
    $sfabcost2=0;
}
else{
$sfabcost2=$psb;
}

$spccost2=$ssqft2*$gn;
$stotalcost2=$srmcost2+$spccost2+$sfabcost2;
$o7=0;
$sunitprice2=$stotalcost2/(1-(25+$o7)/100);


//row 3 calculation

if($sqty3==0){
    $ssqft3=0;
}
else{
    if($stype3=="PIPE"){
        $ssqft3=($sstrip3*$slength3)/930.25+1;
    }
    else{
        $ssqft3=($sstrip3*$slength3*2)/930.25+1;
    }
}

$sweight3=($slength3*$sthick3*$sstrip3*7.85)/10000+0.75;
$pipe=65;
$hr=45;
$gn=8;
if($stype3=="PIPE"){
    $srmcost3=$sweight3*$pipe;
}
else{
$srmcost3=$sweight3*$hr;
}
if($sqty3==0){
    $sfabcost3=0;
}
else{
$sfabcost3=$psb;
}
if($stype3=="GI"){
    $spccost3=0;
}
else{
$spccost3=$ssqft3*$gn;
}
$stotalcost3=$srmcost3+$spccost3+$sfabcost3;
$o7=0;
$sunitprice3=$stotalcost3/(1-(25+$o7)/100);

//row 4 calculation

if($sqty4==0){
    $ssqft4=0;
}
else{
    if($stype4=="PIPE"){
        $ssqft4=($sstrip4*$slength4)/930.25+1;
    }
    else{
        $ssqft4=($sstrip4*$slength4*2)/930.25+1;
    }
}
if($sqty4==0){
    $sweight4=0;
}
else{
    $sweight4=($slength4*$sthick4*$sstrip4*7.85)/10000+0.75;
}


$hr=45;
$gn=8;
if($stype4=="PIPE"){
    $srmcost4=$sweight4*$pipe;
}
else{
$srmcost4=$sweight4*$hr;
}
if($sqty4==0){
    $sfabcost4=0;
}
else{
$sfabcost4=$psb;
}
if($stype4=="GI"){
    $spccost4=0;
}
else{
$spccost4=$ssqft4*$gn;
}
$stotalcost4=$srmcost4+$spccost4+$sfabcost4;
$o7=0;
$sunitprice4=$stotalcost4/(1-(25+$o7)/100);

//row 5 calculation

$sframeprice=($sunitprice1*$sqty1)+($sunitprice2*$sqty2)+($sunitprice3*$sqty3)+($sunitprice4*$sqty4);

}
?>

<!-- UI part -->
<h1><center> <b>SKIDS/PSB Calculator</b></center></h1>
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
<td><b>SKID 1</b></td>
<td></td>
<td><input type="text" name='slength1' size="4" value="<?php echo isset($_POST['slength1']) ? $_POST['slength1'] : ''?>"/></td>
<td><input type="text" name='sqty1' size="4" value="<?php echo isset($_POST['sqty1']) ? $_POST['sqty1'] : ''?>"/></td>
<td><input type="text" name='sthick1' size="4" value="<?php echo isset($_POST['sthick1']) ? $_POST['sthick1'] : ''?>"/></td>
<td><input type="text" name='sstrip1' size="4" value="<?php echo isset($_POST['sstrip1']) ? $_POST['sstrip1'] : ''?>"/></td>
<td><?php if(isset($ssqft1)) echo"<p>".round($ssqft1,1)."</p>"; ?></td>
<td><?php if(isset($sweight1)) echo"<p>".round($sweight1,1)."</p>"; ?></td>
<td><?php if(isset($srmcost1)) echo"<p>".round($srmcost1,1)."</p>"; ?></td>

<td><?php if(isset($sfabcost1)) echo"<p>".round($sfabcost1,1)."</p>"; ?></td>
<td><?php if(isset($spccost1))echo"<p>".round($spccost1,1)."</p>"; ?></td>
<td><?php if(isset($stotalcost1))echo"<p>".round($stotalcost1,1)."</p>"; ?></td>
<td><?php if(isset($sunitprice1))echo"<p>".round($sunitprice1,1)."</p>"; ?></td>
<td rowspan = '12'><?php if(isset($sframeprice)) echo"<p>".round($sframeprice,1)."</p>"; ?></td>

</tr>

<!-- UI part row 2-->

<tr>
<td><b>SKID 2</b></td>
<td></td>
<td><input type="text" name='slength2' size="4" value="<?php echo isset($_POST['slength2']) ? $_POST['slength2'] : ''?>"/></td>
<td><input type="text" name='sqty2' size="4" value="<?php echo isset($_POST['sqty2']) ? $_POST['sqty2'] : ''?>"/></td>
<td><input type="text" name='sthick2' size="4" value="<?php echo isset($_POST['sthick2']) ? $_POST['sthick2'] : ''?>"/></td>
<td><input type="text" name='sstrip2' size="4" value="<?php echo isset($_POST['sstrip2']) ? $_POST['sstrip2'] : ''?>"/></td>
<td><?php if(isset($ssqft2)) echo"<p>".round($ssqft2,1)."</p>"; ?></td>
<td><?php if(isset($sweight2)) echo"<p>".round($sweight2,1)."</p>"; ?></td>
<td><?php if(isset($srmcost2)) echo"<p>".round($srmcost2,1)."</p>"; ?></td>
<td><?php if(isset($sfabcost2)) echo"<p>".round($sfabcost2,1)."</p>"; ?></td>
<td><?php if(isset($spccost2)) echo"<p>".round($spccost2,1)."</p>"; ?></td>
<td><?php if(isset($stotalcost2)) echo"<p>".round($stotalcost2,1)."</p>"; ?></td>
<td><?php if(isset($sunitprice2)) echo"<p>".round($sunitprice2,1)."</p>"; ?></td>

</tr>

<!-- UI part row 3 -->
<tr>
<td><b>PSB-1</b></td>
<td><input type="text" name='stype3' size="4" value="<?php echo isset($_POST['stype3']) ? $_POST['stype3'] : ''?>"/></td>
<td><input type="text" name='slength3' size="4" value="<?php echo isset($_POST['slength3']) ? $_POST['slength3'] : ''?>"/></td>
<td><input type="text" name='sqty3' size="4" value="<?php echo isset($_POST['sqty3']) ? $_POST['sqty3'] : ''?>"/></td>
<td><input type="text" name='sthick3' size="4" value="<?php echo isset($_POST['sthick3']) ? $_POST['sthick3'] : ''?>"/></td>
<td><input type="text" name='sstrip3' size="4" value="<?php echo isset($_POST['sstrip3']) ? $_POST['sstrip3'] : ''?>"/></td>
<td><?php if(isset($ssqft3)) echo"<p>".round($ssqft3,1)."</p>"; ?></td>
<td><?php if(isset($sweight3)) echo"<p>".round($sweight3,1)."</p>"; ?></td>
<td><?php if(isset($srmcost3))echo"<p>".round($srmcost3,1)."</p>"; ?></td>
<td><?php if(isset($sfabcost3)) echo"<p>".round($sfabcost3,1)."</p>"; ?></td>
<td><?php if(isset($spccost3)) echo"<p>".round($spccost3,1)."</p>"; ?></td>
<td><?php if(isset($stotalcost3))echo"<p>".round($stotalcost3,1)."</p>"; ?></td>
<td><?php if(isset($sunitprice3)) echo"<p>".round($sunitprice3,1)."</p>"; ?></td>

</tr>

<!-- UI part row 4 -->

<tr>
<td><b>PSB-2</b></td>
<td><input type="text" name='stype4' size="4" value="<?php echo isset($_POST['stype4']) ? $_POST['stype4'] : ''?>"/></td>
<td><input type="text" name='slength4' size="4" value="<?php echo isset($_POST['slength4']) ? $_POST['slength4'] : ''?>"/></td>
<td><input type="text" name='sqty4' size="4" value="<?php echo isset($_POST['sqty4']) ? $_POST['sqty4'] : ''?>"/></td>
<td><input type="text" name='sthick4' size="4" value="<?php echo isset($_POST['sthick4']) ? $_POST['sthick4'] : ''?>"/></td>
<td><input type="text" name='sstrip4' size="4" value="<?php echo isset($_POST['sstrip4']) ? $_POST['sstrip4'] : ''?>"/></td>
<td><?php if(isset($ssqft4)) echo"<p>".round($ssqft4,1)."</p>"; ?></td>
<td><?php if(isset($sweight4)) echo"<p>".round($sweight4,1)."</p>"; ?></td>
<td><?php if(isset($srmcost4))echo"<p>".round($srmcost4,1)."</p>"; ?></td>
<td><?php if(isset($sfabcost4)) echo"<p>".round($sfabcost4,1)."</p>"; ?></td>
<td><?php if(isset($spccost4)) echo"<p>".round($spccost4,1)."</p>"; ?></td>
<td><?php if(isset($stotalcost4))echo"<p>".round($stotalcost4,1)."</p>"; ?></td>
<td><?php if(isset($sunitprice4)) echo"<p>".round($sunitprice4,1)."</p>"; ?></td>

</tr>

</table>
</from>
</body> 
</html>