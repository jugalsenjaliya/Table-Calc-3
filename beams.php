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
.beam { margin: auto;width: 50%; }
table { margin: auto; } input,p { text-align:right; } </style>
</head>
<body>
<form method="post">
<table class="beam">
<?php
if(isset($_POST['sub']))
{
//row 1 values
$length1=$_POST['length1'];
$qty1=$_POST['qty1'];
$thick1=$_POST['thick1'];
$strip1=$_POST['strip1'];

//row 2 values

$length2=$_POST['length2'];
$qty2=$_POST['qty2'];
$thick2=$_POST['thick2'];
$strip2=$_POST['strip2'];

//row 3 values

$length3=$_POST['length3'];
$qty3=$_POST['qty3'];
$thick3=$_POST['thick3'];
$strip3=$_POST['strip3'];

//row 4 values

$totalcost4=$_POST['totalcost4'];




//row 1 calculation

$hr=66;
$fbeams=130;
$pcbeams=8;
$sqft1=0;
if($length1==0){
    $sqft1=0;
}
else{
$sqft1=(($strip1-4)*$length1)/930.25+1;
}

$weight1=0;
if($length1==0){
    $weight1=0;
}
else{
$weight1=($strip1*$length1*$thick1*7.85/10000)+1.5;
}
$rmcost1=$hr*$weight1;
$fabcost1=0;
if($length1==0){
    $fabcost1=0;
}
else{
$fabcost1=$fbeams;
}
$pccost1=$pcbeams*$sqft1;
$totalcost1=$rmcost1+$pccost1+$fabcost1;
$o7=0;
$unitprice1=$totalcost1/(1-(25+$o7)/100);


//row 2 calculation

$sqft2=0;
if($length2==0){
    $sqft2=0;
}
else{
$sqft2=(($strip2-4)*$length2)/930.25+1.5;
}

$weight2=0;
if($length2==0){
    $weight2=0;
}
else{
$weight2=($strip2*$length2*$thick2*7.85/10000)+1.5;
}
$rmcost2=$hr*$weight2;
$fabcost2=0;
if($length2==0){
    $fabcost2=0;
}
else{
$fabcost2=$fbeams;
}
$pccost2=$pcbeams*$sqft2;
$totalcost2=$rmcost2+$pccost2+$fabcost2;
$o7=0;
$unitprice2=$totalcost2/(1-(25+$o7)/100);

//row 3 calculation

$sqft3=0;
if($length3==0){
    $sqft3=0;
}
else{
$sqft3=(($strip3-4)*$length3)/930.25+1.5;
}

$weight3=0;
if($length3==0){
    $weight3=0;
}
else{
$weight3=($strip3*$length3*$thick3*7.85/10000)+1.5;
}
$rmcost3=$hr*$weight3;
$fabcost3=0;
if($length3==0){
    $fabcost3=0;
}
else{
$fabcost3=$fbeams;
}
$pccost3=$pcbeams*$sqft3;
$totalcost3=$rmcost3+$pccost3+$fabcost3;
$o7=0;
$unitprice3=$totalcost3/(1-(25+$o7)/100);

//row 4 calculation

$qty4=($qty1+$qty2+$qty3)*4;
$unitprice4=$totalcost4/(1-(25+$o7)/100);

//row 5 calculation

$frameprice=($unitprice1*$qty1)+($unitprice2*$qty2)+($unitprice3*$length3)+($unitprice4*$qty4);



}
?>

<!-- UI part -->
<h1><center> <b>Beam Calculator</b></center></h1>
<tr>
<th><p style="width: 50px;margin:auto;text-align:center;">Items</p></th>
<th><p style="width: 70px;margin:auto;text-align:center;">Type</p></th>
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
<td><b> BEAM 1</b></td>
<td></td>
<td><input type="text" name='length1' size="4" value="<?php echo isset($_POST['length1']) ? $_POST['length1'] : ''?>"/></td>
<td><input type="text" name='qty1' size="4" value="<?php echo isset($_POST['qty1']) ? $_POST['qty1'] : ''?>"/></td>
<td><input type="text" name='thick1' size="4" value="<?php echo isset($_POST['thick1']) ? $_POST['thick1'] : ''?>"/></td>
<td><input type="text" name='strip1' size="4" value="<?php echo isset($_POST['strip1']) ? $_POST['strip1'] : ''?>"/></td>
<td><?php if(isset($sqft1)) echo"<p>".round($sqft1,1)."</p>"; ?></td>
<td><?php if(isset($weight1)) echo"<p>".round($weight1,1)."</p>"; ?></td>
<td><?php if(isset($rmcost1)) echo"<p>".round($rmcost1,1)."</p>"; ?></td>


<td><?php if(isset($fabcost1)) echo"<p>".round($fabcost1,1)."</p>"; ?></td>
<td><?php if(isset($pccost1)) echo"<p>".round($pccost1,1)."</p>"; ?></td>
<td><?php if(isset($totalcost1)) echo"<p>".round($totalcost1,1)."</p>"; ?></td>
<td><?php if(isset($unitprice1)) echo"<p>".round($unitprice1,1)."</p>"; ?></td>
<td rowspan = '12'><?php if(isset($frameprice)) echo"<p>".round($frameprice,1)."</p>"; ?></td>

</tr>

<!-- UI part row 2 -->

<tr>
<td><b>BEAM 2</b></td>
<td></td>
<td><input type="text" name='length2' size="4" value="<?php echo isset($_POST['length2']) ? $_POST['length2'] : ''?>"/></td>
<td><input type="text" name='qty2' size="4" value="<?php echo isset($_POST['qty2']) ? $_POST['qty2'] : ''?>"/></td>
<td><input type="text" name='thick2' size="4" value="<?php echo isset($_POST['thick2']) ? $_POST['thick2'] : ''?>"/></td>
<td><input type="text" name='strip2' size="4" value="<?php echo isset($_POST['strip2']) ? $_POST['strip2'] : ''?>"/></td>
<td><?php if(isset($sqft2)) echo"<p>".round($sqft2,1)."</p>"; ?></td>
<td><?php if(isset($weight2)) echo"<p>".round($weight2,1)."</p>"; ?></td>
<td><?php if(isset($rmcost2)) echo"<p>".round($rmcost2,1)."</p>"; ?></td>
<td><?php if(isset($fabcost2)) echo"<p>".round($fabcost2,1)."</p>"; ?></td>
<td><?php if(isset($pccost2)) echo"<p>".round($pccost2,1)."</p>"; ?></td>
<td><?php if(isset($totalcost2)) echo"<p>".round($totalcost2,1)."</p>"; ?></td>
<td><?php if(isset($unitprice2)) echo"<p>".round($unitprice2,1)."</p>"; ?></td>

</tr>

<!-- UI part row 3 -->
<tr>
<td><b> BEAM 3</b></td>
<td></td>
<td><input type="text" name='length3' size="4" value="<?php echo isset($_POST['length3']) ? $_POST['length3'] : ''?>"/></td>
<td><input type="text" name='qty3' size="4" value="<?php echo isset($_POST['qty3']) ? $_POST['qty3'] : ''?>"/></td>
<td><input type="text" name='thick3' size="4" value="<?php echo isset($_POST['thick3']) ? $_POST['thick3'] : ''?>"/></td>
<td><input type="text" name='strip3' size="4" value="<?php echo isset($_POST['strip3']) ? $_POST['strip3'] : ''?>"/></td>
<td><?php if(isset($sqft3)) echo"<p>".round($sqft3,1)."</p>"; ?></td>
<td><?php if(isset($weight3)) echo"<p>".round($weight3,1)."</p>"; ?></td>
<td><?php if(isset($rmcost3)) echo"<p>".round($rmcost3,1)."</p>"; ?></td>
<td><?php if(isset($fabcost3)) echo"<p>".round($fabcost3,1)."</p>"; ?></td>
<td><?php if(isset($pccost3)) echo"<p>".round($pccost3,1)."</p>"; ?></td>
<td><?php if(isset($totalcost3)) echo"<p>".round($totalcost3,1)."</p>"; ?></td>
<td><?php if(isset($unitprice3)) echo"<p>".round($unitprice3,1)."</p>"; ?></td>

</tr>

<!-- UI part row 4 -->

<tr>
<td><b> BEAM BOLTS</b></td>
<td></td>
<td></td>
<td><?php if(isset($qty4)) echo"<p>".round($qty4,1)."</p>"; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type="text" name='totalcost4' size="4" value="<?php echo isset($_POST['totalcost4']) ? $_POST['totalcost4'] : ''?>"/></td>
<td><?php if(isset($unitprice4)) echo"<p>".round($unitprice4,1)."</p>"; ?></td>

</tr>

 




</table>
</from>

</body> 
</html>