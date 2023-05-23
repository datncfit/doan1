
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>STT</th>
                            <th>Tên tài khoản</th>
                            <th>MACV</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Chức vụ</th>
                            <th>Mã số thuế</th>
                            <th colspan="2">Cập nhật</th>

                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $i = 1;
                                while ($row = mysqli_fetch_assoc($data["tk"])) {?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['TENTK']; ?></td>
                                        <td><?php echo $row['MACV']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['EMAIL']; ?></td>
                                        <td><?php echo $row['TENCV'] ?></td>
                                        <td><?php echo $row['masothue'] ?></td>
                                        <td>
                                            <a href="http://localhost:8080/BaoCao/Quantri/suatk/<?php echo $row['MATK'] ?>"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <a onclick="return Del('<?php echo $row['TENTK'] ?>')" href="http://localhost:8080/BaoCao/QUANTRI/xoatk/<?php echo $row['MATK'] ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="http://localhost:8080/BaoCao/Quantri/Themtk">Thêm tài khoản</a>
            </div>
</body>
    <script>
        function Del(name){
            return confirm("Bạn có chắc chắn muốn xóa tài khoản: " + name + "?");
        }
    </script>
</html>
