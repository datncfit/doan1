<div class="card-body">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên Danh Mục</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th colspan="2">Cập nhật</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($data["Category"])) {?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['updated_at']; ?></td>
            <td>
                <a href="http://localhost/BaoCao/Quantri/editCategory/<?php echo $row['id_category'] ?>"><i class="fa fa-edit"></i></a>
            </td>
            <td>
                <a onclick="return Del('<?php echo $row['name'] ?>')" href="http://localhost/BaoCao/QUANTRI/delCategory/<?php echo $row['id_category'] ?>"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php } ?>
        </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="http://localhost/BaoCao/QUANTRI/addCategory">Thêm mới</a>
</div>
</div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa danh mục: " + name + "?");
    }
</script>
