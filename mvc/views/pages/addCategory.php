<div class="container-fluid " >
    <div class="card themtk" >
        <div class="card-header">
            <h2>Thêm Danh Mục</h2>
        </div>
        <div class="card-body">
            <form action="http://localhost/BaoCao/Quantri/checkAddCategory" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button name="sbm" class="btn btn-success" type="submit" >Thêm</button>
            </form>
        </div>
    </div>
</div>
