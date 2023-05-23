<div class="container-fluid " >
    <div class="card themtk" >
        <div class="card-header">
            <h2>Thêm tài khoản</h2>
        </div>
        <div class="card-body">
            <form action="http://localhost:8080/BaoCao/Quantri/Kiemtrathemtk" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên tài khoản</label>
                    <input type="text" name="TENTK" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="number" name="PASS" class="form-control" required>
                </div>

                

                <div class="form-group">
                    <label for="">Mã chức vụ</label>
                    <select class="form-control" name="MACV" id="">
                        <?php
                            while ($row_brand = mysqli_fetch_assoc($data['sql'])) {?>
                                <option value="<?php echo $row_brand['MACV']; ?>"><?php echo $row_brand['TENCV']; ?></option>
                        <?php }?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="EMAIL" class="form-control" required>
                    
                </div>

                <button name="sbm" class="btn btn-success" type="submit" >Thêm</button>
            </form>
        </div>
    </div>
</div>