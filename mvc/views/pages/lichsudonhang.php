<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>SOHD</th>
                        <th>NGHD</th>
                        <th>EMAIL</th>
                        <th>TRỊ GIÁ</th>      
                        <th>ĐỊA CHỈ</th>
                        <th>YÊU CẦU KHÁC</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $i = 1;
                            while ($row = mysqli_fetch_assoc($data["sql"])) {?>
                                <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['SOHD']; ?></td>
                                <td><?php echo $row['NGHD']; ?></td>
                                <td><?php echo $row['EMAIL']; ?></td>
                                <td><?php echo $row['TRIGIA']; ?></td>
                                <td><?php echo $row['diachi']; ?></td>
                                <td><?php echo $row['yeucaukhac']; ?></td>
                                <td><?php echo $row['tinhtrangdonhang']; ?></td>
                                <td><?php echo $row['sodienthoai']; ?></td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['SOHD'] ?>')" href="http://localhost/BaoCao/Home/xoahd/<?php echo $row['SOHD'] ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + "?");
    }
</script>