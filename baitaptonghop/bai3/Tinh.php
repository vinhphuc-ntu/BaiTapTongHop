<!DOCTYPE HTML 
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>phép tính hai số</title>
    <style type="text/css">
        body {  
            background-color: #FFFFFF;
        }
        table{
            background: black;
            border: 1pt;
            display: inline-block;
        }
        
    </style>
</head>
<body>
<h3>PHÉP TÍNH TRÊN HAI SỐ</h3>
<br>
<?php

    $chonpheptinh=$_POST['chonpheptinh'];
    $cong=$_POST['cong'];
    $tru=$_POST['tru'];
    $nhan=$_POST['nhan'];
    $chia=$_POST['chia'];
    $sothunhat=$_POST['sothunhat'];
    $sothuhai=$_POST['sothuhai'];
    $ketqua=$_POST['ketqua'];
    switch ($chonpheptinh)
{
    case cong :
        echo $ketqua="$sothunhat+$sothuhai"; 
        break;
    case tru:
        echo $ketqua="$sothunhat-$sothuhai";
        break;
    case nhan:
        echo $ketqua="$sothunhat*$sothuhai";
        break;
     case chia:
        echo $ketqua="$sothunhat/$sothuhai";
        break;
    }


    
?>    
   <form align='left' action="xulyThongTin.php" method="post">
       <table>
        <tr> số thứ nhất
        <?php echo $sothunhat ?><br> </tr>
        <tr> số thứ hai        
        <?php echo $sothuhai ?><br> </tr>    
        <tr> Kết quả
        <?php echo $ketqua ?><br> </tr>
        
        <tr><a href="javascript:window.history.back(-1);"><font color="blue"><i><u>Quay Lại trang trước</i></u><font></a></tr>
    </table>
    </form>
</body>
