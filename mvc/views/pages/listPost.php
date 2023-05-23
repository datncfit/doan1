<div class="card-body">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên Bài Đăng</th>
            <th>Công Ty</th>
            <th>Danh Mục</th>
            <th>Vị trí</th>
            <th>Địa Chỉ</th>
            <th>Lương</th>
            <th>Ảnh</th>
            <th colspan="2">Cập nhật</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $j = 1;
            while ($row = mysqli_fetch_assoc($data["Post"])) {?>
        <tr>
            <td><?php echo $j++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['TENTK']; ?></td>
            <td><?php echo $row['list_tag']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td><?php
                $json = file_get_contents('https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json');
                $obj = json_decode($json);

                for ($i = 0; $i < count($obj); $i++){
                    if ($obj[$i]->Id == $row["city"]){
                        $address = $obj[$i]->Districts[0]->Wards[0]->Name.", ".$obj[$i]->Districts[0]->Name.", ".$obj[$i]->Name;
                    }
                }
                echo $address;
            ?></td>
            <td><?php echo $row['salary']; ?></td>
            <td><?php echo $row['thumb']; ?></td>
            <td>
                <a href="http://localhost/BaoCao/Quantri/editPost/<?php echo $row['id_post'] ?>"><i class="fa fa-edit"></i></a>
            </td>
            <td>
                <a onclick="return Del('<?php echo $row['name'] ?>')" href="http://localhost/BaoCao/QUANTRI/delPost/<?php echo $row['id_post'] ?>"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php } ?>
        </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="http://localhost/BaoCao/QUANTRI/addPost">Thêm mới</a>
</div>
</div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa bài đăng: " + name + "?");
    }
</script>
