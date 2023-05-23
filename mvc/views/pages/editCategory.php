<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa Danh Mục</h2>
        </div>
        <?php $row_up = mysqli_fetch_assoc($data['sql']); ?>
        <div class="card-body">
            <form action="http://localhost/BaoCao/Quantri/checkEditCategory/<?php echo $data['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $row_up['name']; ?>">
                </div>
                <button name="sbm" class="btn btn-success" type="submit" >Sửa</button>
            </form>
        </div>
    </div>
</div>
