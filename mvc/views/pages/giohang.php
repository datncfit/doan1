
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng sản phẩm</th>  
                        <th>Giá sản phẩm</th>
                        <th>Tổng giá</th>
                        <th>Ngày tạo</th>
                        <th>image</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php if(isset($_SESSION['email'])){
                        $i = 1;
                            while ($row = mysqli_fetch_assoc($data["gh"])) {?>
                                <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['tensp']; ?></td>
                                <td><?php echo $row['SL']; ?></td>
                                <td><?php echo $row['GIA']; ?></td>
                                <td><?php echo $row['TONGGIA']; ?></td>
                                <th><?php echo $row['NGTAO']; ?></th>
                                <th><img width="80px" height="70px" src="<?php
                                    require_once "./mvc/core/hiepurl.php";
                                    $x = getCurrentPageURL();
                                    $a = $x;
                                    $arr = explode("/",filter_var(trim($a, "/")));
                                    $cd = count($arr);
                                    if($x == "http://localhost/BaoCao/" or $x == "http://localhost/BaoCao/Home" or ($cd >= 4 && $arr[4]!= "Home"))
                                        {
                                            $x = ".";
                                        }
                                    else if ($x == "http://localhost/BaoCao/Home/" or $x == "http://localhost/BaoCao/Home/lichsudonhang" or $x == "http://localhost/BaoCao/Home/timkiem" or $x == "http://localhost/BaoCao/Home/Giohang" or $x == "http://localhost/BaoCao/Home/TrangChu" or $x == "http://localhost/BaoCao/Home/DienThoai" or $x == "http://localhost/BaoCao/Home/LapTop") {
                                        $x = "..";
                                    }else if ( $x == "http://localhost/BaoCao/Home/DienThoai/" or $x == "http://localhost/BaoCao/Home/LapTop/") {
                                        $x = "../..";
                                    }
                                    else{
                                        $x = "../..";
                                    }
                                    echo $x;
                                ?>/public/img/<?php echo $row['img']; ?>" alt="image"></th>

                                <td>
                                    <a onclick="return Del('<?php echo $row['prd_id'] ?>')" href="http://localhost/BaoCao/Home/xoagiohang/<?php echo $row['MAGIO'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php }}else if (isset($_SESSION['giohang'])){ foreach ($_SESSION['giohang'] as $ma=>$sp){?>
                            <tr>
                                <td></td>
                                <td><?php echo $sp['ma']; ?></td>
                                <td><?php echo $sp['SL']; ?></td>
                                <td><?php echo $sp['gia'];?></td>
                                <td><?php echo $sp['tonggia']; ?></td>
                                <th><?php echo $sp['ngaytao']; ?></th>
                                <th><?php echo "   "; ?></th>

                                <td>
                                    <a onclick="return Del('<?php echo $sp['ma']; ?>')" href="http://localhost/BANGIAY/Home/xoagiohang/<?php echo $row['MAGIO'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php }}?>
                    </tr>
                    <tr>
                        <th colspan="4"> Tổng tiền:  </th>
                        <?php if(isset($_SESSION['email'])){ ?>
                        <th > <?php echo $data["tt"] ?> </th><?php }?>
                        <th><?php echo "   "; ?></th>
                        <th><?php echo "   "; ?></th>
                        <th><?php echo "   "; ?></th>
                    </tr>
                </tbody>
            </table>
            <br>
            <hr>
            <div>
                <h5>Thông tin khách hàng</h5>
            </div>
            <form action="http://localhost/BaoCao/Home/Dathang/" method="post">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="male" checked="checked" name="optradio">Anh
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="female" name="optradio">Chị
                    </label>
                </div>
                <table>
                    <tr>
                        <th><input type="text" class="form-control" id="ht" placeholder="Họ Và Tên" name="ht"></th>
                        <th><input type="number" class="form-control" id="sdt" placeholder="Số điện thoại" name="sdt"></th>
                    </tr>
                    
                    <tr>
                        <th> 
                            <div>
                            <br>
                                <h6>Chọn cách thức nhận hàng</h6>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" data-bs-toggle="collapse" data-bs-target="#demo" checked="checked" value="gtn" name="optradio2">
                                <span style="font-weight: normal;">Giao tận nơi</span>
                            </label>
                        </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" style="font-weight: normal;" value="ntst" class="form-check-input" name="optradio2">
                                    <span style="font-weight: normal;">Nhận tại siêu thị</span>
                                </label>
                            </div>
                        </th>
                    </tr>
                    <tr >
                        <th colspan="2" colspan="2" ><input type="text" id="demo" class="collapse form-control" name="diachi"></th>
                    </tr>
                    <tr>
                        <th colspan="2">
                        <input type="text" class="form-control" id="yck" name="yck" placeholder="Yêu cầu khác (không bắt buộc)" >
                        </th>
                    </tr>
                </table>   
                <button type="submit" name="submit" class="btn btn-primary">ĐẶT HÀNG</button>
            </form>
        </div>

    </div>
</div>

</body>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + "?");
    }
</script>
</html>
