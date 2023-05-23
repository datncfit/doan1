<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Bài Đăng</h2>
        </div>
        <div class="card-body">
            <form  action="http://localhost/BaoCao/Quantri/checkAddPost" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Công ty - Doanh nghiệp</label>
                    <select class="form-control" name="company" id="exampleFormControlSelect1">
                    <?php
                    $i = 0;
                    while ($row_company = mysqli_fetch_assoc($data['Company'])){?>
                        <option value="<?php echo $row_company["MATK"] ?>"><?php echo $row_company["TENTK"] ?></option>
                    <?php
                    }?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tên Bài</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Tiêu Đề</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label  for="">Mô tả chi tiết</label>
                    <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="fileToUpload" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Danh Mục</label>
                    <?php
                    while ($row_brand = mysqli_fetch_assoc($data['Category'])) {
                        ?>
                        <div class="form-check">
                            <input class="form-check-input" name="cate[]" type="checkbox" value="<?php echo $row_brand["id_category"] ?>" id="<?php echo $row_brand["id_category"] ?>">
                            <label class="form-check-label" for="flexCheckDefault">
                                <?php echo $row_brand["name"] ?>d
                            </label>
                        </div>
                    <?php }?>
                </div>

                <div class="form-group">
                    <label for="">Vị trí</label>
                    <input type="text" name="position" class="form-control" required>
                </div>

                <div class="form-group"
                    <label for="">Địa chỉ</label>
                    <select class="form-control" name="city" class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                        <option selected>Chọn tỉnh thành</option>
                    </select>
                </div>
                <div class="form-group ">
                    <select class="form-control" name="district"  id="district" aria-label=".form-select-sm">
                        <option selected required>Chọn quận huyện</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="wards" class="form-select form-select-sm" id="ward" aria-label=".form-select-sm">
                        <option selected required>Chọn phường xã</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Loại hình công việc</label>
                    <select class="form-control" name="job_native" id="exampleFormControlSelect1">
                        <option value="1">Full time</option>
                        <option value="2">Part time</option>
                        <option value="3">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Lương</label>
                    <input type="number" name="salary" class="form-control" required>
                </div>

                <button name="sbm" class="btn btn-success" type="submit" >Thêm</button>
            </form>
        </div>
    </div>
</div>



