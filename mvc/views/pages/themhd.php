
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
    <form action="http://localhost/BaoCao/Quantri/Kiemtrathemhd" method="post">
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
                <th colspan="2"><input type="text" class="form-control" id="email" placeholder="Email" name="email"></th>
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
                        <input type="radio" class="form-check-input" checked="checked" value="gtn" name="optradio2">
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
                <th colspan="2" 
                
                ><input type="text" id="demo" class="collapse form-control" name="diachi"></th>
            </tr>
            <tr>
                <th colspan="2">
                <input type="text" class="form-control" id="yck" name="yck" placeholder="Yêu cầu khác (không bắt buộc)" >
                </th>
            </tr>
            <tr>
                <th colspan="2">
                <input type="number" class="form-control" id="trigia" name="trigia" placeholder="Trị giá" >
                </th>
            </tr>
            <tr>
                <th colspan="2">
                <input type="text" class="form-control" id="ttdh" name="ttdh" placeholder="Tình trạng đơn hàng" >
                </th>
            </tr>
            
        </table>   
        <button type="submit" name="submit" class="btn btn-primary">ĐẶT HÀNG</button>
    </form>
</body>
</html>
