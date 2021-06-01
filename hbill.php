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
.hbill { margin: auto;width: 50%; }
table { margin: auto; } input,p { text-align:right; } </style>
</head>
<body>
<form method="post">
<table class="hbill">
<?php
if(isset($_POST['sub']))
{
//row 1 values

$zqty1=$_POST['zqty1'];

//row 2 values


$zqty2=$_POST['zqty2'];

//row 3 values


$zqty3=$_POST['zqty3'];


//row 4 values


$zqty4=$_POST['zqty4'];

//row 5 values


$zqty5=$_POST['zqty5'];


//row 6 values


$zqty6=$_POST['zqty6'];


//row 7 values


$zqty7=$_POST['zqty7'];

//row 8 values

$zqty8=$_POST['zqty8'];


//row 9 values

$zqty9=$_POST['zqty9'];

//row 10 values


$zqty10=$_POST['zqty10'];

//row 11 values

$zqty11=$_POST['zqty11'];

//row 12 values

$zqty12=$_POST['zqty12'];

//row 13 values

$zqty13=$_POST['zqty13'];

//row 14 values

$zqty14=$_POST['zqty14'];

//row 15 values

$zqty15=$_POST['zqty15'];


//row 1 calculation

$up1=$fframeprice*2+$frameprice;
$tp1=$up1*$zqty1;


//row 2 calculation

$up2=$fframeprice+$frameprice;
$tp2=$up2*$zqty2;

//row 3 calculation

$up3=$dunitprice1;
$tp3=$up3*$zqty3;

//row 4 calculation

$up4=$dunitprice2;
$tp4=$up4*$zqty4;
//row 5 calculation


$up5=$dunitprice3;
$tp5=$up5*$zqty5;

//row 6 calculation


$up6=$sunitprice1;
$tp6=$up6*$zqty6;


//row 7 calculation


$up7=$dunitprice2;
$tp7=$up7*$zqty7;

//row 8 calculation (No Calculation)


$up8=$dunitprice3;
$tp8=$up8*$zqty8;

//row 9 calculation

$up9=$aunitprice1;
$tp9=$up9*$zqty9;


//row 10 calculation

$up10=$aunitprice2;
$tp10=$up10*$zqty10;

//row 11 Calculation


$up11=$stunitprice1;
$tp11=$up11*$zqty11;

//row 12 Calculation


$up12=$stunitprice2;
$tp12=$up12*$zqty12;

//row 13 Calculation


$up13=$aunitprice3;
$tp13=$up13*$zqty13;

//row 14 Calculation


$up14=$aunitprice4;
$tp14=$up14*$zqty14;

//row 15 Calculation


$up15=0;


$totaltp=$tp1+$tp2+$tp3+$tp4+$tp5+$tp6+$tp7+$tp8+$tp9+$tp10+$tp11+$tp12+$tp13+$tp14;

}
?>

<!-- UI part -->
<h1><center> <b>Total Cost</b></center></h1>
<tr>
<th><p style="width: 170px;margin:auto;text-align:center;"></p></th>
<th><p style="width: 100px;margin:auto;text-align:center;">QTY</p></th>
<th><p style="width: 130px;margin:auto;text-align:center;">UP</p></th>
<th><p style="width: 130px;margin:auto;text-align:center;">TP</p></th>
<th></th>
<th></th>


</tr>

<!-- UI part row 1 -->
<tr>
<td><b>MAIN MODULE</b></td>
<td><input type="text" name='zqty1' size="8" value="<?php echo isset($_POST['zqty1']) ? $_POST['zqty1'] : ''?>"/></td>
<td><?php if(isset($up1)) echo"<p>".round($up1,1)."</p>"; ?></td>
<td><?php if(isset($tp1)) echo"<p>".round($tp1,1)."</p>"; ?></td>
<td rowspan = '16'><input type ='submit' name='sub' value ='calculate'/></td>
<td rowspan = '16'><button><a href="frame.php">clear</a></button></td>
</tr>

<!-- UI part row 2-->

<tr>
<td><b>ADD ON MODULE</b></td>
<td><input type="text" name='zqty2' size="8" value="<?php echo isset($_POST['zqty2']) ? $_POST['zqty2'] : ''?>"/></td>
<td><?php if(isset($up2)) echo"<p>".round($up2,1)."</p>"; ?></td>
<td><?php if(isset($tp2)) echo"<p>".round($tp2,1)."</p>"; ?></td>

</tr>

<!-- UI part row 3 -->
<tr>
<td><b>DECK PANELS 1</b></td>
<td><input type="text" name='zqty3' size="8" value="<?php echo isset($_POST['zqty3']) ? $_POST['zqty3'] : ''?>"/></td>
<td><?php if(isset($up3)) echo"<p>".round($up3,1)."</p>"; ?></td>
<td><?php if(isset($tp3)) echo"<p>".round($tp3,1)."</p>"; ?></td>

</tr>

<!-- UI part row 4 -->

<tr>
<td><b>DECK PANELS 2</b></td>
<td><input type="text" name='zqty4' size="8" value="<?php echo isset($_POST['zqty4']) ? $_POST['zqty4'] : ''?>"/></td>
<td><?php if(isset($up4)) echo"<p>".round($up4,1)."</p>"; ?></td>
<td><?php if(isset($tp4)) echo"<p>".round($tp4,1)."</p>"; ?></td>

</tr>


<!-- UI part row 5 -->
<tr>
<td><b>DECK PANELS 3</b></td>
<td><input type="text" name='zqty5' size="8" value="<?php echo isset($_POST['zqty5']) ? $_POST['zqty5'] : ''?>"/></td>
<td><?php if(isset($up5)) echo"<p>".round($up5,1)."</p>"; ?></td>
<td><?php if(isset($tp5)) echo"<p>".round($tp5,1)."</p>"; ?></td>

</tr>

<!-- UI part row 6 -->

<tr>
<td><b>SKID 1</b></td>
<td><input type="text" name='zqty6' size="8" value="<?php echo isset($_POST['zqty6']) ? $_POST['zqty6'] : ''?>"/></td>
<td><?php if(isset($up6)) echo"<p>".round($up6,1)."</p>"; ?></td>
<td><?php if(isset($tp6)) echo"<p>".round($tp6,1)."</p>"; ?></td>

</tr>


<!-- UI part row 7 -->

<tr>
<td><b>SKID 2</b></td>
<td><input type="text" name='zqty7' size="8" value="<?php echo isset($_POST['zqty7']) ? $_POST['zqty7'] : ''?>"/></td>
<td><?php if(isset($up7)) echo"<p>".round($up7,1)."</p>"; ?></td>
<td><?php if(isset($tp7)) echo"<p>".round($tp7,1)."</p>"; ?></td>

</tr>

<!-- UI part row 8 -->

<tr>
<td><b>PSB 1</b></td>
<td><input type="text" name='zqty8' size="8" value="<?php echo isset($_POST['zqty8']) ? $_POST['zqty8'] : ''?>"/></td>
<td><?php if(isset($up8)) echo"<p>".round($up8,1)."</p>"; ?></td>
<td><?php if(isset($tp8)) echo"<p>".round($tp8,1)."</p>"; ?></td>

</tr>

<!-- UI part row 9 -->

<tr>
<td><b>ROW TIES</b></td>
<td><input type="text" name='zqty9' size="8" value="<?php echo isset($_POST['zqty9']) ? $_POST['zqty9'] : ''?>"/></td>
<td><?php if(isset($up9)) echo"<p>".round($up9,1)."</p>"; ?></td>
<td><?php if(isset($tp9)) echo"<p>".round($tp9,1)."</p>"; ?></td>
</tr>
<!-- UI part row 10 -->

<tr>
<td><b>BLOCK TIES</b></td>
<td><input type="text" name='zqty10' size="8" value="<?php echo isset($_POST['zqty10']) ? $_POST['zqty10'] : ''?>"/></td>
<td><?php if(isset($up10)) echo"<p>".round($up10,1)."</p>"; ?></td>
<td><?php if(isset($tp10)) echo"<p>".round($tp10,1)."</p>"; ?></td>
</tr>

<!-- UI part row 11 -->

<tr>
<td><b>BACK STOPPER</b></td>
<td><input type="text" name='zqty11' size="8" value="<?php echo isset($_POST['zqty11']) ? $_POST['zqty11'] : ''?>"/></td>
<td><?php if(isset($up11)) echo"<p>".round($up11,1)."</p>"; ?></td>
<td><?php if(isset($tp11)) echo"<p>".round($tp11,1)."</p>"; ?></td>
</tr>

<!-- UI part row 12 -->

<tr>
<td><b>BACK STOPPER 2</b></td>
<td><input type="text" name='zqty12' size="8" value="<?php echo isset($_POST['zqty12']) ? $_POST['zqty12'] : ''?>"/></td>
<td><?php if(isset($up12)) echo"<p>".round($up12,1)."</p>"; ?></td>
<td><?php if(isset($tp12)) echo"<p>".round($tp12,1)."</p>"; ?></td>
</tr>

<!-- UI part row 13 -->

<tr>
<td><b>COLUMN GAURD</b></td>
<td><input type="text" name='zqty13' size="8" value="<?php echo isset($_POST['zqty13']) ? $_POST['zqty13'] : ''?>"/></td>
<td><?php if(isset($up13)) echo"<p>".round($up13,1)."</p>"; ?></td>
<td><?php if(isset($tp13)) echo"<p>".round($tp13,1)."</p>"; ?></td>
</tr>

<!-- UI part row 14 -->

<tr>
<td><b>ROW GAURD</b></td>
<td><input type="text" name='zqty14' size="8" value="<?php echo isset($_POST['zqty14']) ? $_POST['zqty14'] : ''?>"/></td>
<td><?php if(isset($up14)) echo"<p>".round($up14,1)."</p>"; ?></td>
<td><?php if(isset($tp14)) echo"<p>".round($tp14,1)."</p>"; ?></td>
</tr>

<!-- UI part row 15 -->

<tr>
<td><b>WIRE MESH</b></td>
<td><input type="text" name='zqty15' size="8" value="<?php echo isset($_POST['zqty15']) ? $_POST['zqty15'] : ''?>"/></td>
<td><?php if(isset($up15)) echo"<p>".round($up15,1)."</p>"; ?></td>
<td><?php if(isset($tp15)) echo"<p>".round($tp15,1)."</p>"; ?></td>
</tr>
<tr>
<td><b></b></td>
<td></td>
<td></td>
<td><?php if(isset($totaltp)) echo"<p>".round($totaltp,1)."</p>"; ?></td>
</tr>
</table>
</from>
</body> 
</html>