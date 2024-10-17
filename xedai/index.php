<!DOCTYPE html>
<html>
<head>
    <title>Shop Xe Dap Milk</title>
    <link rel="stylesheet" type="text/css" href="style_css.css">
</head>
<body>
    <div id="header">
        <a href="#">Địa chỉ cửa hàng</a>
        <a href="#">Hotline: 0123 456 789</a>
        <a href="#">Chăm sóc khách hàng</a>
    </div>
    <h2>BỘ SƯU TẬP XE ĐẠP 2024 </h2>
        <?php 
        include("view/menungang.php");
        ?>
        
        <div class="wrap" style="display:grid ;">
        <div class="menuleft" style="
            background-color: rgb(103,103,199);
            justify-content: center;
            align-items: center;
            width:12%;
            
            height:auto;
            border-radius:20%;
            
            position: sticky;
            top:0px;
            ">
         <?php 
        include("view/menuleft.php");
        ?>
        </div>    
        

        <div id="content" style="
        display:grid;
        margin-left:12vw;
        
        margin-right:10px;
        height:100%;grid-template-columns: auto auto auto  ">         
            <?php
                if(!isset($_GET['pid'])) 
                    include("view/content.php");
                else{
                    $page=$_GET['pid'];
                    switch($page)
                    {
                        case 1:include("view/content.php");
                        break;
                        case 2:include("view/khuyenmai.php");
                        break;
                        case 3:include("view/dichvu.php");
                        break;
                        case 4:include("view/giohang.php");
                        break;
                        case 5:include("view/timkiem.php");
                        break;
                        case 6:include("view/kqtk.php");
                        break;
                        case 7:include("view/ctsp.php");
                        break;
                        case 8:include("view/menuleft.php");
                        break;
                        
                    }   
                }
                ?>
        </div>
    </div>
    <div style="margin-top:5%">
    <div id="footer">
        <span>THÔNG TIN
        <hr>
        <ul>
            <li>Trụ sở: 100 Hải Thượng Lãn Ông, P.10, Quận 5, TP.HCM</li>
            <li>Email: info@xedap.vn</li>
            <li>ĐKKD/MST: 0313891315</li>
        </ul>
        </span>
        <span>CHÍNH SÁCH
        <hr>
        <ul>
            <li>Chế độ bảo hành</li>
            <li>Khuyến mãi</li>
            <li>Hướng dẫn trả góp</li>
        </ul>
        </span>
        <span>KẾT NỐI
        <hr>
        <ul>
            <li>Youtube</li>
            <li>Zalo</li>
            <li>Facebook</li>
        </ul>
        </span>
    </div>
    </div>
</body>
</html>
