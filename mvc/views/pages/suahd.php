<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa tài khoản</h2>
        </div>
        <?php $row_up = mysqli_fetch_assoc($data['sql']); ?>
        <div class="card-body">
            <form action="http://localhost/BaoCao/Quantri/Kiemtrasuahd/<?php echo $data['SOHD'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">NGHD</label>
                    <input type="text" name="NGHD" class="form-control" required value="<?php echo $row_up['NGHD']; ?>">
                </div>

                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input type="text" name="EMAIL" class="form-control" required value="<?php echo $row_up['EMAIL']; ?>">
                </div>
                <div class="form-group">
                    <label for="">TRỊ GIÁ</label>
                    <input type="number" name="TRIGIA" class="form-control" required value="<?php echo $row_up['TRIGIA']; ?>">
                </div>
                <div class="form-group">
                    <label for="">ĐỊA CHỈ</label>
                    <input type="text" name="DIACHI" class="form-control" required value="<?php echo $row_up['diachi']; ?>">
                </div>
                <div class="form-group">
                    <label for="">YÊU CẦU KHÁC</label>
                    <input type="text" name="YCK" class="form-control" required value="<?php echo $row_up['yeucaukhac']; ?>">
                </div>
                <div class="form-group">
                    <label for="">TÌNH TRẠNG ĐƠN HÀNG</label>
                    <input type="text" name="TTDH" class="form-control" required value="<?php echo $row_up['tinhtrangdonhang']; ?>">
                </div>
                <div class="form-group">
                    <label for="">SỐ ĐIỆN THOẠI</label>
                    <input type="text" name="SDT" class="form-control" required value="<?php echo $row_up['sodienthoai']; ?>">
                </div>

                <button name="sbm" class="btn btn-success" type="submit" >Sửa</button>
            </form>
        </div>
    </div>
</div>