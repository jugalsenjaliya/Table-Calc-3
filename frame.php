<html>
 <head> 
 <style> 
 table, td, th 
 {
border: 1px solid black; 
/* width: 5%; */
text-align: center; 
background-color: DarkGray; 
}
/* td{
    width:10px;
} */

.frame { margin: auto;width: 50%; }
input,p { text-align:center; } </style>
</head>
<body>
<form method="post">
<table class="frame">
<?php
if(isset($_POST['sub']))
{
//row 1 values
$flength1=$_POST['flength1'];
$fqty1=$_POST['fqty1'];
$fthick1=$_POST['fthick1'];
$fstrip1=$_POST['fstrip1'];

//row 2 values

$flength2=$_POST['flength2'];
$fqty2=$_POST['fqty2'];
$fthick2=$_POST['fthick2'];
$fstrip2=$_POST['fstrip2'];

//row 3 values

$flength3=$_POST['flength3'];
$fqty3=$_POST['fqty3'];
$fthick3=$_POST['fthick3'];
$fstrip3=$_POST['fstrip3'];

//row 4 values

$flength4=$_POST['flength4'];
$fqty4=$_POST['fqty4'];
$fthick4=$_POST['fthick4'];
$fstrip4=$_POST['fstrip4'];

//row 5 values

$flength5=$_POST['flength5'];
$fqty5=$_POST['fqty5'];
$fthick5=$_POST['fthick5'];
$fstrip5=$_POST['fstrip5'];

//row 6 values

$flength6=$_POST['flength6'];
$fqty6=$_POST['fqty6'];
$fthick6=$_POST['fthick6'];
$fstrip6=$_POST['fstrip6'];

//row 7 values


$fqty7=$_POST['fqty7'];
$ftotalcost7=$_POST['ftotalcost7'];

//row 8 values

$fqty8=$_POST['fqty8'];


//row 9 values

$funitprice9=$_POST['funitprice9'];

//row 10 values

$funitprice10=$_POST['funitprice10'];



//row 1 calculation

$fsqft1=($flength1*$fstrip1*2)/930.25;
$a=$fsqft1;
$uprightrm=72;
$fabricationupright=20;
$pcupright=12;
$fweight1=($flength1*$fthick1*$fstrip1*7.85)/10000;
$frmcost1=$uprightrm*$fweight1;
$ffabcost1=($flength1*$fabricationupright)/100;
$fpccost1=$a*$pcupright;
$ftotalcost1=$frmcost1+$fpccost1+$ffabcost1;
$o7=0;
$funitprice1=$ftotalcost1/(1-(25+$o7)/100);


//row 2 calculation

$fsqft2=($flength2*$fstrip2*2)/930.25;
$fabricationupright=20;
$pcupright=12;
$bracing=64;
$fbracing=10;
$gn=8;
$fweight2=($flength2*$fthick2*$fstrip2*7.85)/10000;
$frmcost2=$fweight2*$bracing;
$ffabcost2=0;
if($fqty2==0){
    $ffabcost2=0;
}
else{
$ffabcost2=$fbracing;
}
$fpccost2=$fsqft2*$gn;
$ftotalcost2=$frmcost2+$fpccost2+$ffabcost2;
$o77=0;
$funitprice2=$ftotalcost2/(1-(25+$o77)/100);

//row 3 calculation

$fsqft3=($flength3*$fstrip3*2)/930.25;
$fweight3=($flength3*$fthick3*$fstrip3*7.85)/10000;
$frmcost3=$fweight3*$bracing;
$ffabcost3=0;

if($fqty3==0){
    $ffabcost3=0;
}
else{
$ffabcost3=$fbracing;
}
$fpccost3=$fsqft3*$gn;
$ftotalcost3=$frmcost3+$ffabcost3+$fpccost3;
$funitprice3=$ftotalcost3/(1-(25+$o77)/100);


//row 4 calculation
$fsqft4=($flength4*$fstrip4*2)/930.25;
$fweight4=($flength4*$fthick4*$fstrip4*7.85)/10000;
$frmcost4=$fweight4*$bracing;
$ffabcost4=0;

if($fqty4==0){
    $ffabcost4=0;
}
else{
$ffabcost4=$fbracing;
}
$fpccost4=$fsqft4*$gn;
$ftotalcost4=$frmcost4+$ffabcost4+$fpccost4;
$funitprice4=$ftotalcost4/(1-(25+$o77)/100);

//row 5 calculation

$fsqft5=($flength5*$fstrip5*2)/930.25;
$fweight5=($flength5*$fthick5*$fstrip5*7.85)/10000;
$frmcost5=$fweight5*$bracing;
$ffabcost5=0;

if($fqty5==0){
    $ffabcost5=0;
}
else{
$ffabcost5=$fbracing;
}
$fpccost5=$fsqft5*$gn;
$ftotalcost5=$frmcost5+$ffabcost5+$fpccost5;
$funitprice5=$ftotalcost5/(1-(25+$o77)/100);


//row 6 calculation

$fsqft6=($flength6*$fstrip6*2)/930.25;
$fweight6=($flength6*$fthick6*$fstrip6*7.85)/10000;
$frmcost6=$fweight6*$bracing;
$ffabcost6=0;

if($fqty6==0){
    $ffabcost6=0;
}
else{
 $ffabcost6=$fbracing;
}
$fpccost6=$fsqft6*$gn;
$ftotalcost6=$frmcost6+$ffabcost6+$fpccost6;
$funitprice6=$ftotalcost6/(1-(25+$o77)/100);


//row 7 calculation

$funitprice7=$ftotalcost7/(1-(25+$o77)/100);

//row 8 calculation (No Calculation)

$funitprice8=5;

//row 9 calculation
$fqty9=0;
if($fqty1==0){
    $fqty9=0;
}
else{
$fqty9=$fqty2+$fqty3+2+($fqty4+$fqty7)*2;
}


//row 10 calculation
$fqty10=$fqty1*2;

//row 11 Calculation

$fframeprice=($funitprice1*$fqty1)+($funitprice2*$fqty2)+($funitprice3*$fqty3)+($funitprice4*$fqty4)+($funitprice5*$fqty5)+($funitprice6*$fqty6)+($funitprice7*$fqty7)+($funitprice8*$fqty8)+($funitprice9*$fqty9)+($funitprice10*$fqty10);


}
?>

<!-- UI part -->
<h1><center> <b>HDR Frame Calculator</b></center></h1>
<tr>
<th>Items</th>
<th><p style="width: 45px;margin:auto;text-align:center;">Type</p></th>
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
<td><b> Upright</b></td>
<td>UP1</td>
<td><input type="text" name='flength1' size="4" value="<?php echo isset($_POST['flength1']) ? $_POST['flength1'] : ''?>"/></td>
<td><input type="text" name='fqty1' size="4" value="<?php echo isset($_POST['fqty1']) ? $_POST['fqty1'] : ''?>"/></td>
<td><input type="text" name='fthick1' size="4" value="<?php echo isset($_POST['fthick1']) ? $_POST['fthick1'] : ''?>"/></td>
<td><input type="text" name='fstrip1' size="4" value="<?php echo isset($_POST['fstrip1']) ? $_POST['fstrip1'] : ''?>"/></td>
<td><?php if(isset($fsqft1)) echo"<p>".round($fsqft1,1)."</p>"; ?></td>
<td><?php if(isset($fweight1)) echo"<p>".round($fweight1,1)."</p>"; ?></td>
<td><?php if(isset($frmcost1)) echo"<p>".round($frmcost1,1)."</p>"; ?></td>
<td><?php if(isset($ffabcost1)) echo"<p>".round($ffabcost1,1)."</p>"; ?></td>
<td><?php if(isset($fpccost1)) echo"<p>".round($fpccost1,1)."</p>"; ?></td>
<td><?php if(isset($ftotalcost1)) echo"<p>".round($ftotalcost1,1)."</p>"; ?></td>
<td><?php if(isset($funitprice1)) echo"<p>".round($funitprice1,1)."</p>"; ?></td>
<td rowspan = '12'><?php if(isset($fframeprice)) echo"<p>".round($fframeprice,1)."</p>"; ?></td>

</tr>

<!-- UI part row 2-->

<tr>
<td><b> HB</b></td>
<td></td>
<td><input type="text" name='flength2' size="4" value="<?php echo isset($_POST['flength2']) ? $_POST['flength2'] : ''?>"/></td>
<td><input type="text" name='fqty2' size="4" value="<?php echo isset($_POST['fqty2']) ? $_POST['fqty2'] : ''?>"/></td>
<td><input type="text" name='fthick2' size="4" value="<?php echo isset($_POST['fthick2']) ? $_POST['fthick2'] : ''?>"/></td>
<td><input type="text" name='fstrip2' size="4" value="<?php echo isset($_POST['fstrip2']) ? $_POST['fstrip2'] : ''?>"/></td>
<td><?php if(isset($fsqft2)) echo"<p>".round($fsqft2,1)."</p>"; ?></td>
<td><?php if(isset($fweight2)) echo"<p>".round($fweight2,1)."</p>"; ?></td>
<td><?php if(isset($frmcost2)) echo"<p>".round($frmcost2,1)."</p>"; ?></td>
<td><?php if(isset($ffabcost2)) echo"<p>".round($ffabcost2,1)."</p>"; ?></td>
<td><?php if(isset($fpccost2)) echo"<p>".round($fpccost2,1)."</p>"; ?></td>
<td><?php if(isset($ftotalcost2)) echo"<p>".round($ftotalcost2,1)."</p>"; ?></td>
<td><?php if(isset($funitprice2)) echo"<p>".round($funitprice2,1)."</p>"; ?></td>

</tr>

<!-- UI part row 3 -->
<tr>
<td><b> CB</b></td>
<td></td>
<td><input type="text" name='flength3' size="4" value="<?php echo isset($_POST['flength3']) ? $_POST['flength3'] : ''?>"/></td>
<td><input type="text" name='fqty3' size="4" value="<?php echo isset($_POST['fqty3']) ? $_POST['fqty3'] : ''?>"/></td>
<td><input type="text" name='fthick3' size="4" value="<?php echo isset($_POST['fthick3']) ? $_POST['fthick3'] : ''?>"/></td>
<td><input type="text" name='fstrip3' size="4" value="<?php echo isset($_POST['fstrip3']) ? $_POST['fstrip3'] : ''?>"/></td>
<td><?php if(isset($fsqft3)) echo"<p>".round($fsqft3,1)."</p>"; ?></td>
<td><?php if(isset($fweight3)) echo"<p>".round($fweight3,1)."</p>"; ?></td>
<td><?php if(isset($frmcost3)) echo"<p>".round($frmcost3,1)."</p>"; ?></td>
<td><?php if(isset($ffabcost3)) echo"<p>".round($ffabcost3,1)."</p>"; ?></td>
<td><?php if(isset($fpccost3)) echo"<p>".round($fpccost3,1)."</p>"; ?></td>
<td><?php if(isset($ftotalcost3)) echo"<p>".round($ftotalcost3,1)."</p>"; ?></td>
<td><?php if(isset($funitprice3)) echo"<p>".round($funitprice3,1)."</p>"; ?></td>

</tr>

<!-- UI part row 4 -->

<tr>
<td><b> STIFFNER 1</b></td>
<td></td>
<td><input type="text" name='flength4' size="4" value="<?php echo isset($_POST['flength4']) ? $_POST['flength4'] : ''?>"/></td>
<td><input type="text" name='fqty4' size="4" value="<?php echo isset($_POST['fqty4']) ? $_POST['fqty4'] : ''?>"/></td>
<td><input type="text" name='fthick4' size="4" value="<?php echo isset($_POST['fthick4']) ? $_POST['fthick4'] : ''?>"/></td>
<td><input type="text" name='fstrip4' size="4" value="<?php echo isset($_POST['fstrip4']) ? $_POST['fstrip4'] : ''?>"/></td>
<td><?php if(isset($fsqft4)) echo"<p>".round($fsqft4,1)."</p>"; ?></td>
<td><?php if(isset($fweight4)) echo"<p>".round($fweight4,1)."</p>"; ?></td>
<td><?php if(isset($frmcost4)) echo"<p>".round($frmcost4,1)."</p>"; ?></td>
<td><?php if(isset($ffabcost4)) echo"<p>".round($ffabcost4,1)."</p>"; ?></td>
<td><?php if(isset($fpccost4)) echo"<p>".round($fpccost4,1)."</p>"; ?></td>
<td><?php if(isset($ftotalcost4)) echo"<p>".round($ftotalcost4,1)."</p>"; ?></td>
<td><?php if(isset($funitprice4)) echo"<p>".round($funitprice4,1)."</p>"; ?></td>

</tr>


<!-- UI part row 5 -->

<tr>
<td><b> STIFFNER 2</b></td>
<td></td>
<td><input type="text" name='flength5' size="4" value="<?php echo isset($_POST['flength5']) ? $_POST['flength5'] : ''?>"/></td>
<td><input type="text" name='fqty5' size="4" value="<?php echo isset($_POST['fqty5']) ? $_POST['fqty5'] : ''?>"/></td>
<td><input type="text" name='fthick5' size="4" value="<?php echo isset($_POST['fthick5']) ? $_POST['fthick5'] : ''?>"/></td>
<td><input type="text" name='fstrip5' size="4" value="<?php echo isset($_POST['fstrip5']) ? $_POST['fstrip5'] : ''?>"/></td>
<td><?php if(isset($fsqft5)) echo"<p>".round($fsqft5,1)."</p>"; ?></td>
<td><?php if(isset($fweight5)) echo"<p>".round($fweight5,1)."</p>"; ?></td>
<td><?php if(isset($frmcost5)) echo"<p>".round($frmcost5,1)."</p>"; ?></td>
<td><?php if(isset($ffabcost5)) echo"<p>".round($ffabcost5,1)."</p>"; ?></td>
<td><?php if(isset($fpccost5)) echo"<p>".round($fpccost5,1)."</p>"; ?></td>
<td><?php if(isset($ftotalcost5)) echo"<p>".round($ftotalcost5,1)."</p>"; ?></td>
<td><?php if(isset($funitprice5)) echo"<p>".round($funitprice5,1)."</p>"; ?></td>

</tr>

<!-- UI part row 6 -->

<tr>
<td><b> STIFFNER 3</b></td>
<td></td>
<td><input type="text" name='flength6' size="4" value="<?php echo isset($_POST['flength6']) ? $_POST['flength6'] : ''?>"/></td>
<td><input type="text" name='fqty6' size="4" value="<?php echo isset($_POST['fqty6']) ? $_POST['fqty6'] : ''?>"/></td>
<td><input type="text" name='fthick6' size="4" value="<?php echo isset($_POST['fthick6']) ? $_POST['fthick6'] : ''?>"/></td>
<td><input type="text" name='fstrip6' size="4" value="<?php echo isset($_POST['fstrip6']) ? $_POST['fstrip6'] : ''?>"/></td>
<td><?php if(isset($fsqft6)) echo"<p>".round($fsqft6,1)."</p>"; ?></td>
<td><?php if(isset($fweight6)) echo"<p>".round($fweight6,1)."</p>"; ?></td>
<td><?php if(isset($frmcost6)) echo"<p>".round($frmcost6,1)."</p>"; ?></td>
<td><?php if(isset($ffabcost6)) echo"<p>".round($ffabcost6,1)."</p>"; ?></td>
<td><?php if(isset($fpccost6)) echo"<p>".round($fpccost6,1)."</p>"; ?></td>
<td><?php if(isset($ftotalcost6)) echo"<p>".round($ftotalcost6,1)."</p>"; ?></td>
<td><?php if(isset($funitprice6)) echo"<p>".round($funitprice6,1)."</p>"; ?></td>

</tr>


<!-- UI part row 7 -->

<tr>
<td><b> BASE PLATES</b></td>
<td></td>
<td></td>
<td><input type="text" name='fqty7' size="4" value="<?php echo isset($_POST['fqty7']) ? $_POST['fqty7'] : ''?>"/></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="text" name='ftotalcost7' size="4" value="<?php echo isset($_POST['ftotalcost7']) ? $_POST['ftotalcost7'] : ''?>"/></td>
<td><?php if(isset($funitprice7)) echo"<p>".round($funitprice7,1)."</p>"; ?></td>

</tr>

<!-- UI part row 8 -->

<tr>
<td><b> BUSHES</b></td>
<td></td>
<td></td>
<td><input type="text" name='fqty8' size="4" value="<?php echo isset($_POST['fqty8']) ? $_POST['fqty8'] : ''?>"/></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><?php if(isset($funitprice8)) echo"<p>".round($funitprice8,1)."</p>"; ?></td>

</tr>

<!-- UI part row 9 -->

<tr>
<td><b> FRAME BOLTS</b></td>
<td></td>
<td></td>
<td><?php if(isset($fqty9)) echo"<p>".round($fqty9,1)."</p>"; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="text" name='funitprice9' size="4" value="<?php echo isset($_POST['funitprice9']) ? $_POST['funitprice9'] : ''?>"/></td>

</tr>
<!-- UI part row 10 -->

<tr>
<td><b> GROUT BOLTS</b></td>
<td></td>
<td></td>
<td><?php if(isset($fqty10)) echo"<p>".round($fqty10,1)."</p>"; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="text" name='funitprice10' size="4" value="<?php echo isset($_POST['funitprice10']) ? $_POST['funitprice10'] : ''?>"/></td>

</tr>

</table>
</from>
</body> 
<?php include 'beams.php' ?>
<?php include 'deck.php' ?>
<?php include 'skid.php' ?>
<?php include 'stopper.php' ?>
<?php include 'acessori.php' ?>
<?php include 'hbill.php' ?>
</html>