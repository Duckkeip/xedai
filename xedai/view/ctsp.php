<?php
    $masp=$_GET['maxe'];
    $link = new mysqli("localhost", "root", "", "db_xedapmilk");
    $sql = "SELECT * FROM sanpham where sanpham_id=$masp";
    $result = $link->query($sql);

    while ($row = $result->fetch_assoc()) 
    {
?>

<div class="product" style="">
        <img src="images/<?php echo $row['hinhanh']; ?>" style="width:300px;height:300px;border:solid 3px black ;
    ">
    </a>
        <div style="float:right">
        <h3 class="product1-name"><?php echo $row['ten_sanpham']; ?></h3>
        <p class="product1-code"><b>Mã sản phẩm: <?php echo $row['sanpham_id']; ?></b></p>
        <p class="product1-price"><b>Giá: <?php echo number_format($row['gia'], 0, ',', '.'); ?> VND</b></p>   
        <p class="product1-description"><b>Mô tả: <?php echo $row['mo_ta']; ?></b></p>
        <span>
            <button >
                <a href="index.php?pid=1" >
                Thoát
                </a>
            </button>
        </span>
    </div>
</div>   
   

<?php 
    }
?>
