        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>      
                        <th>Mô tả</th>
                        <th>Thương hiệu</th>
                        <th>Sửa</th>
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
                                <td><?php echo $row['prd_name']; ?></td>

                                <td>
                                    <img style="width: 100px"src="../public/img/<?php echo $row['image']; ?>">
                                </td>

                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['brand_name']; ?></td>
                                <td>
                                    <a href="http://localhost/BaoCao/QUANTRI/sua/<?php echo $row['prd_id'] ?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['prd_name'] ?>')" href="http://localhost/BaoCao/QUANTRI/xoa/ <?php echo $row['prd_id'] ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary" href="http://localhost/BaoCao/QUANTRI/Them">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + "?");
    }
</script>