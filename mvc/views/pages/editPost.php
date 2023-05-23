<?php $row_postId = mysqli_fetch_assoc($data['PostId'])  ?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Cập Nhật Bài Đăng</h2>
        </div>
        <div class="card-body">
            <form action="http://localhost/BaoCao/Quantri/checkEditPost/<?php echo $row_postId["id_post"] ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Công ty - Doanh nghiệp</label>
                    <select class="form-control" name="company" id="exampleFormControlSelect1">
                    <?php
                    $i = 0;
                    while ($row_company = mysqli_fetch_assoc($data['Company'])){
                        if ($row_company["MATK"] == $row_postId["id_user_company"]){?>
                            <option value="<?php echo $row_company["MATK"] ?>"><?php echo $row_company["TENTK"] ?></option>
                        <?php
                        }else{?>
                            <option selected value="<?php echo $row_company["MATK"] ?>"><?php echo $row_company["TENTK"] ?></option>
                    <?php
                        }}?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tên Bài</label>
                    <input type="text" name="name" value="<?php echo $row_postId['name'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Tiêu Đề</label>
                    <input type="text" name="title" value="<?php echo $row_postId['title'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label  for="">Mô tả chi tiết</label>
                    <input type="text" name="description" value="<?php echo $row_postId['description'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" name="fileToUpload" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Danh Mục</label>
                    <?php
                    $i = 1;
                    while ($row_brand = mysqli_fetch_assoc($data['Category'])) {
                        ?>
                        <div class="form-check">
                            <?php
                                $id_ca = explode(",", $row_postId["list_tag"]);
                                $dem = 0;
                                for ($j=0; $j<count($id_ca);$j++){
                                    if ($id_ca[$j] == $row_brand["id_category"]){
                                        $dem = 1;
                                        ?>
                                        <input class="form-check-input" checked name="cate[]" type="checkbox" value="<?php echo $row_brand["id_category"] ?>" id="<?php echo $row_brand["id_category"] ?>">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <?php echo $row_brand["name"] ?>
                                        </label>
                                        <?php
                                    }
                                }
                                if ($dem == 0){?>
                                    <input class="form-check-input" name="cate[]" type="checkbox" value="<?php echo $row_brand["id_category"] ?>" id="<?php echo $row_brand["id_category"] ?>">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <?php echo $row_brand["name"] ?>
                                    </label>
                                <?php
                                }
                            ?>

                        </div>
                    <?php } $i++;?>
                </div>

                <div class="form-group">
                    <label for="">Vị trí</label>
                    <input type="text" name="position" value="<?php echo $row_postId['position'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Loại hình công việc</label>
                    <select class="form-control" name="job_native" id="exampleFormControlSelect1">
                        <?php
                            for ($j = 1; $j<4; $j++){
                                if ($j == 1){
                                    if ($j == $row_postId['job_native']) {?>
                                        <option value="1" selected>Full time</option>
                                        <option value="2">Part time</option>
                                        <option value="3">Other</option>
                                    <?php
                                    }
                                }else if ($j == 2){
                                    if ($j == $row_postId['job_native']) {?>
                                        <option value="1" >Full time</option>
                                        <option value="2" selected>Part time</option>
                                        <option value="3">Other</option>
                                        <?php
                                    }
                                }else {
                                    if ($j == $row_postId['job_native']) {?>
                                        <option value="1" >Full time</option>
                                        <option value="2" >Part time</option>
                                        <option value="3" selected>Other</option>
                                        <?php
                                    }
                                }
                            }
                        ?>

                    </select>
                </div>

                <?php
                $json = file_get_contents('https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json');
                $obj = json_decode($json);

                for ($i = 0; $i < count($obj); $i++){
                    if ($obj[$i]->Id == $row_postId["city"]){
                        $city = $obj[$i]->Id;
                        $district = $obj[$i]->Districts[0]->Id;
                        $wards = $obj[$i]->Districts[0]->Wards[0]->Id;
                    }
                }
                ?>

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
                    <label for="">Lương</label>
                    <input type="text" name="salary" value="<?php echo $row_postId['salary'] ?>" class="form-control" required>
                </div>

                <button name="sbm" class="btn btn-success" type="submit" >Thêm</button>
            </form>
        </div>
    </div>
</div>
