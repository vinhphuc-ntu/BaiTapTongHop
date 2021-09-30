<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thanh Toán Tiền Điện</title>
    <style type="text/css">
        body {  
    background-color: #d24dff;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
           font-family: verdana;
            text-align: center;
/* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
<?php 
if(isset($_POST['tenchuho']))  
    $tenchuho=trim($_POST['tenchuho']); 
else $tenchuho="";
if(isset($_POST['chisocu']))  
    $chisocu=trim($_POST['chisocu']); 
else $chisocu=0;
if(isset($_POST['chisomoi'])) 
    $chisomoi=trim($_POST['chisomoi']); 
else $chisomoi=0;
if(isset($_POST['dongia'])) 
    $dongia=trim($_POST['dongia']); 
else $dongia=2000;
if(isset($_POST['sotienthanhtoan']))
        if (is_numeric($chisomoi) && is_numeric($chisocu) && is_numeric($dongia))  
            $sotienthanhtoan=($chisomoi-$chisocu)*$dongia;
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $sotienthanhtoan="";
            }
else $sotienthanhtoan=0;


?>
<form align='center' action="" method="post">
<table>
    <thead>
        <th colspan="2" align="center"><h3>THANH TOÁN TIỀN ĐIỆN</h3></th>
    </thead>
    <tr><td>Tên chủ hộ:</td>
     <td><input type="text" name="tenchuho" value="<?php  echo $tenchuho;?> "/></td>
    <tr><td>Chỉ số cũ:</td>
     <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/></td>
     <tr><td>Chỉ số mới:</td>
     <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/></td>
    </tr>
    <tr><td>Đơn giá:</td>
     <td><input type="text" name="dongia" value="<?php  echo $dongia;?> "/></td>
    </tr>
    <tr><td>Số tiền thanh toán:</td>
     <td><input type="text" name="sotienthanhtoan" disabled="disabled" value="<?php  echo $sotienthanhtoan;?> "/></td>
    </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" value="Tính" name="sotienthanhtoan" /></td>
    </tr>
</table>
</form>
</body>
</html>

