<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa tài khoản</h2>
        </div>
        <?php $row_up = mysqli_fetch_assoc($data['sql']); ?>
        <div class="card-body">
            <form action="http://localhost:8080/BaoCao/Quantri/Kiemtrasuatk/<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên tài khoản</label>
                    <input type="text" name="TENTK" class="form-control" required value="<?php echo $row_up['TENTK']; ?>">
                </div>
                
                <div class="form-group">
                    <label for="">PASS</label>
                    <input type="text" name="PASS" class="form-control" required value="<?php echo $row_up['PASS']; ?>">
                </div>
                
                <div class="form-group">
                    <label for="">MACV</label>
                    <select class="form-control" name="MACV" id="" required value="<?php echo $row_up['MACV']; ?>">
                        <?php
                            while ($row_brand = mysqli_fetch_assoc($data['sql2'])) {
                                if($row_up['MACV'] ==  $row_brand['MACV']){?>
                                    <option value="<?php echo $row_brand['MACV']; ?>" selected=""><?php echo $row_brand['TENCV']; ?></option>
                                <?php
                                }else{?>
                                    <option value="<?php echo $row_brand['MACV']; ?>"><?php echo $row_brand['TENCV']; ?></option>
                                <?php
                                }
                                
                                ?>
                                
                                
                        <?php }?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">EMAIL</label>
                    <input type="text" name="EMAIL" class="form-control" required value="<?php echo $row_up['EMAIL']; ?>">
                </div>

                <?php
                    if($row_up['MACV'] == 2){
                        ?>
                        <div class="form-group">
                            <label for="">Mã số thuế</label>
                            <input type="text" name="masothue" class="form-control" required value="<?php echo $row_up['masothue']; ?>">
                        </div>
                        <?php

                    }
                ?>

                <button name="sbm" class="btn btn-success" type="submit" >Sửa</button>
            </form>
        </div>
    </div>
</div>