
<?php 
  $link=new mysqli("localhost","root","","db_xedapmilk");
  $sql= "SELECT * FROM danhmuc";
  $result = $link->query($sql); 

?>
    <ul style="list-style:none;">
<?php
    while($row=$result->fetch_assoc())
    {
?>
    <li><a href="index.php?pid=8&theloaixe=<?php echo $row['danh_muc_id']?>" style="text-decoration:none">

        <br>
        <?php
            echo $row['ten_danh_muc'];

        ?>
        
    </li>
<?php
    }
?>
    </ul>