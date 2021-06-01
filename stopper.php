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
.stop { margin: auto;width: 50%; }
table { margin: auto; } input,p { text-align:right; } </style>
</head>
<body>
<form method="post">
<table class="stop">
<?php
if(isset($_POST['sub']))
{
//row 1 values
$sttype1=$_POST['sttype1'];
$stlength1=$_POST['stlength1'];
$stqty1=$_POST['stqty1'];
$stthick1=$_POST['stthick1'];
$ststrip1=$_POST['ststrip1'];

//row 2 values
$sttype2=$_POST['sttype2'];
$stlength2=$_POST['stlength2'];
$stqty2=$_POST['stqty2'];
$stthick2=$_POST['stthick2'];
$ststrip2=$_POST['ststrip2'];





//row 1 calculation
if($stqty1==0)
{
    $stsqft1=0;
}
else{
    if($sttype1="PIPE")
    {
        $stsqft1=($stlength1*$ststrip1)/930.25+1;

    }
    else{
        $stsqft1=($stlength1*$ststrip1*2)/930.25+1;

    }
}

if($stqty1==0){
    $stweight1=0;
}
else{
    $stweight1=($stlength1*$stthick1*$ststrip1*7.85)/10000+0.75;
}

$pipe=65;
$fpipe=50;
$hr=55;
$cr=55;
$gn=7;
$fsheet=125;

if($sttype1=="PIPE"){
    $strmcost1=$stweight1*$pipe;
}
else{
$strmcost1=$stweight1*$hr;
}

if($stqty1==0){
    $stfabcost1=0;
}
else{
$stfabcost1=$fpipe;
}

$stpccost1=$stsqft1*$gn;

$sttotalcost1=$strmcost1+$stpccost1+$stfabcost1;
$o7=0;
$stunitprice1=$sttotalcost1/(1-(25+$o7)/100);


//row 2 calculation

if($stqty2==0)
{
    $stsqft2=0;
}
else{
    if($sttype2="PIPE")
    {
        $stsqft2=($stlength2*$ststrip2)/930.25+1;

    }
    else{
        $stsqft2=($stlength2*$ststrip2*2)/930.25+1;

    }
}

if($stqty2==0){
    $stweight2=0;
}
else{
    $stweight2=($stlength2*$stthick2*$ststrip2*7.85)/10000+0.75;
}

$pipe=65;
$fpipe=50;
$hr=55;
$cr=55;
$gn=7;
$fsheet=125;

if($sttype2=="PIPE"){
    $strmcost2=$stweight2*$pipe;
}
else{
$strmcost2=$stweight2*$hr;
}

if($stqty2==0){
    $stfabcost2=0;
}
else{
$stfabcost2=$fpipe;
}

$stpccost2=$stsqft2*$gn;

$sttotalcost2=$strmcost2+$stpccost2+$stfabcost2;
$o7=0;
$stunitprice2=$sttotalcost2/(1-(25+$o7)/100);


//frame price

$stframeprice=($stunitprice1*$stqty1)+($stunitprice2*$stqty2);

}
?>

<!-- UI part -->
<h1><center> <b>Stopper Calculator</b></center></h1>
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
<td><b> Stopper 1</b></td>
<td><input type="text" name='sttype1' size="4" value="<?php echo isset($_POST['sttype1']) ? $_POST['sttype1'] : ''?>"/></td>
<td><input type="text" name='stlength1' size="4" value="<?php echo isset($_POST['stlength1']) ? $_POST['stlength1'] : ''?>"/></td>
<td><input type="text" name='stqty1' size="4" value="<?php echo isset($_POST['stqty1']) ? $_POST['stqty1'] : ''?>"/></td>
<td><input type="text" name='stthick1' size="4" value="<?php echo isset($_POST['stthick1']) ? $_POST['stthick1'] : ''?>"/></td>
<td><input type="text" name='ststrip1' size="4" value="<?php echo isset($_POST['ststrip1']) ? $_POST['ststrip1'] : ''?>"/></td>
<td><?php if(isset($stsqft1)) echo"<p>".round($stsqft1,1)."</p>"; ?></td>
<td><?php if(isset($stweight1)) echo"<p>".round($stweight1,1)."</p>"; ?></td>
<td><?php if(isset($strmcost1)) echo"<p>".round($strmcost1,1)."</p>"; ?></td>

<td><?php if(isset($stfabcost1)) echo"<p>".round($stfabcost1,1)."</p>"; ?></td>
<td><?php if(isset($stpccost1))echo"<p>".round($stpccost1,1)."</p>"; ?></td>
<td><?php if(isset($sttotalcost1))echo"<p>".round($sttotalcost1,1)."</p>"; ?></td>
<td><?php if(isset($stunitprice1))echo"<p>".round($stunitprice1,1)."</p>"; ?></td>
<td rowspan = '12'><?php if(isset($stframeprice)) echo"<p>".round($stframeprice,1)."</p>"; ?></td>

</tr>

<!-- UI part row 2-->

<tr>
<td><b>Stopper 2</b></td>
<td><input type="text" name='sttype2' size="4" value="<?php echo isset($_POST['sttype2']) ? $_POST['sttype2'] : ''?>"/></td>
<td><input type="text" name='stlength2' size="4" value="<?php echo isset($_POST['stlength2']) ? $_POST['stlength2'] : ''?>"/></td>
<td><input type="text" name='stqty2' size="4" value="<?php echo isset($_POST['stqty2']) ? $_POST['stqty2'] : ''?>"/></td>
<td><input type="text" name='stthick2' size="4" value="<?php echo isset($_POST['stthick2']) ? $_POST['stthick2'] : ''?>"/></td>
<td><input type="text" name='ststrip2' size="4" value="<?php echo isset($_POST['ststrip2']) ? $_POST['ststrip2'] : ''?>"/></td>
<td><?php if(isset($stsqft2)) echo"<p>".round($stsqft2,1)."</p>"; ?></td>
<td><?php if(isset($stweight2)) echo"<p>".round($stweight2,1)."</p>"; ?></td>
<td><?php if(isset($strmcost2)) echo"<p>".round($strmcost2,1)."</p>"; ?></td>
<td><?php if(isset($stfabcost2)) echo"<p>".round($stfabcost2,1)."</p>"; ?></td>
<td><?php if(isset($stpccost2)) echo"<p>".round($stpccost2,1)."</p>"; ?></td>
<td><?php if(isset($sttotalcost2)) echo"<p>".round($sttotalcost2,1)."</p>"; ?></td>
<td><?php if(isset($stunitprice2)) echo"<p>".round($stunitprice2,1)."</p>"; ?></td>

</tr>

</table>
</from>
</body> 
</html>