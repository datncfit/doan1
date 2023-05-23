<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <?php $row_up = mysqli_fetch_assoc($data['sql']); ?>
        <div class="card-body">
            <form action="http://localhost/BaoCao/Quantri/Kiemtrasua/<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="prd_name" class="form-control" required value="<?php echo $row_up['prd_name']; ?>">
                </div>
                
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label><br>
                    <input type="file" name="image">
                </div>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" required value="<?php echo $row_up['price']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="quantity" class="form-control" required value="<?php echo $row_up['quantity']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="description" class="form-control" required value="<?php echo $row_up['description']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Thương hiệu</label>
                    <select class="form-control" name="brand_id" id="">
                        <?php
                            while ($row_brand = mysqli_fetch_assoc($data['sql2'])) {?>
                                <option value="<?php echo $row_brand['brand_id']; ?>"><?php echo $row_brand['brand_name']; ?></option>
                           <?php }?>
                    </select>
                </div>

                <button name="sbm" class="btn btn-success" type="submit" >Sửa</button>
            </form>
        </div>
    </div>
</div>