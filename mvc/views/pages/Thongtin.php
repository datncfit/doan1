<?php
    $row_up = mysqli_fetch_assoc($data["Thongtin2"]);
    $row_cthinhanh = mysqli_fetch_assoc($data["cthinhanh"]);

    
?>
<div class="box-phone"  >
    <div class="container-fluid" style="background-color: mintcream; " >
    <div class="tieude">
                <?php
                    $ten = mysqli_fetch_assoc($data["Ten"]);?>
                <h1>
                    <?php  
                        echo $ten['prd_name'];
                    ?>
                </h1>
                <hr>
            </div>
        <!-- Control the column width, and how they should appear on different devices -->

        <div class="row" >
            <table>
                <tr>
                    <td>
                        <div >
                            <div id="main_image">
                                <?php
                                    $i = 1;
                                        while ($row= mysqli_fetch_assoc($data["Anh"])) {?>
                                                <img  id="img-main" width = "600px"src="../../public/img/<?php echo $row['image']; ?>" style="float: left" >
                                <?php } ?>
                            </div>
                            <ul style="margin-left: 40px" class="doianh d-flex p-3 ">
                            
                                <?php
                                while ($row= mysqli_fetch_assoc($data["Hinhanh"])) {?>
                                        <table class="item-phone" >
                                                <tr>
                                                    <td><li class="p-2 bg-info"> <img width="80px" src="../../public/img/<?php echo $row['image'];?>" onclick="ImageSRC('<?php echo $row['image']; ?>')" id=<?php echo $row["image"] ?> ></li></td>
                                                </tr>
                                                </table>
                                            <?php }  ?>     
                                <!-- <li> <img src="./image/xanh_duong.jpg" onclick="ImageSRC('xanhduong')" id="xanhduong" ></li>
                                <li> <img src="./image/xanh_la.jpg" onclick="ImageSRC('xanhla')" id="xanhla"></li>
                                <li> <img src="./image/xam.jpg" onclick="ImageSRC('xam')" id="xam"></li>
                                <li> <img src="./image/bac.jpg" onclick="ImageSRC('bac')" id="bac"></li> -->
                            </ul >  
                        </div>
                    </td> 
                    <td>               
                        <div style="float: left">
                            <div class="Thongtin_SP" >
                                <?php
                            
                                        while ($row= mysqli_fetch_assoc($data["Thongtin"])) {?>
                                        <?php if( $row['maloai'] == 1 ){?>
                                                <table class="item-phone" >
                                                        <tr>
                                                            <td colspan="2"><center><h1 style="color: red"><?php echo "Giá: ".$row['price']."$";?></h1></center></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><div class="container" >
                                                            <!-- Button to Open the Modal -->
                                                       
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style=" width:480px">
                                                                MUA HÀNG
                                                            </button></td>
                                                            
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td style="Padding:10px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Màn hình:" ;?></td>
                                                            <td><?php echo $row['manhinh'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Hệ diều hành: ";?></td>
                                                            <td><?php echo $row['hedieuhanh'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td style=" width:150px"><?php echo "Camera trước: ";?></td>
                                                            <td><?php echo  $row['cameratr'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Camera sau: ";?></td>
                                                            <td><?php echo  $row['cameras'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Chip:" ;?></td>
                                                            <td><?php echo  $row['chip'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "RAM: ";?></td>
                                                            <td><?php echo  $row['ram'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Bộ nhớ trong: ";?></td>
                                                            <td><?php echo  $row['bnt'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "SIM: ";?></td>
                                                            <td><?php echo  $row['sim'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Pin, sạc: ";?></td>
                                                            <td><?php echo  $row['pinsac'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Hãng: ";?></td>
                                                            <td><?php echo  $row['hang'];?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"><div class="container" >
                                                            <!-- Button to Open the Modal -->
                                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal1" style=" width:480px">
                                                            <<<b> Xem Thêm </b>>>
                                                            </button></td>
                                                        </tr>
                                                       
                                                </table>
                                            <?php }else {?>
                                        
                                                <table class="item-laptop" >
                                                        <tr>
                                                            <td colspan="2"><center><h1 style="color: red"><?php echo "Giá: ".$row['price']."$";?></h1></center></td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2"><div class="container" >
                                                            <!-- Button to Open the Modal -->
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style=" width:480px; background-color:green">
                                                            MUA HÀNG
                                                            </button></td>
                                                        </tr>

                                                        <tr>
                                                            <td style="Padding:10px"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo "Loại CPU:" ;?></td>
                                                            <td><?php echo $row['loaiCPU'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Loại card đồ họa: ";?></td>
                                                            <td><?php echo $row['cad'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td style=" width:150px"><?php echo "Ram: ";?></td>
                                                            <td><?php echo  $row['ram'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Ổ cứng: ";?></td>
                                                            <td><?php echo  $row['ocung'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Kích thước màng hình:" ;?></td>
                                                            <td><?php echo  $row['ktmh'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Độ phân giải: ";?></td>
                                                            <td><?php echo  $row['dophangiai'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Cổng giao tiếp: ";?></td>
                                                            <td><?php echo  $row['conggt'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Kích thước: ";?></td>
                                                            <td><?php echo  $row['kichthuoc'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Pin: ";?></td>
                                                            <td><?php echo  $row['pinsac'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Công nghệ màn hình: ";?></td>
                                                            <td><?php echo  $row['congnghemh'];?></td>
                                                        </tr>
                                                        <tr style=" height: 50px">
                                                            <td><?php echo "Hệ điều hành: ";?></td>
                                                            <td><?php echo  $row['hedieuhanh'];?></td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2"><div class="container" >
                                                            <!-- Button to Open the Modal -->
                                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#myModal1" style=" width:480px">
                                                            <<<b> Xem Thêm </b>>>
                                                            </button></td>
                                                        </tr>
                                                        
                                                </table>
                                                
                                            <?php } ?>
                                                
                                <?php } ?>
                        </div>
                    </td>    
                </tr>
                </table>                        

                
                <!-- The Modal -->
                <form action="http://localhost/BaoCao/Home/kiemtratinhtrang/<?php echo $row_up['prd_id'];?>" method="post">
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <table>
                                <tr>
                                    <th><h4 class=""><?php echo $row_up['prd_name'];?><br></h4></th>
                                </tr>
                                <tr>
                                    <th><?php echo "Giá: ".$row_up['price'];?></th>
                                </tr>
                            </table>
                            
                            
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <input type="number" name="sl" max=2 min=0>
                            </div>
                            
                            

                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="submit" name='submit' class="btn btn-danger">ĐẶT MUA</button>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </form>



                                <!-- Modal -->
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog modal-xl">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        
                        <h4 class="modal-title">Thông số kỹ thuật</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <table class="modal-chitiet" >
                                <tr >
                                    <td colspan="2">
                                        <img  id="img-chitiet" src="../../public/img/<?php  echo $row_cthinhanh["image"];  ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="label-chitiet">
                                            Màn hình
                                        </div>
                                    </td>
                                </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                            Công nghệ màn hình: 
                                        </td>
                                        <td>
                                                <?php echo $row_up["congnghemh"]; ?>                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                            Độ phân giải: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["dophangiai"]; ?>   
                                        </td>
                                    </tr>
                            
                                    <tr>
                                        <td class="label-chitiet2">
                                           Kích thước màn hình: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["ktmh"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                        <div class="label-chitiet">
                                            Camera sau:
                                        </div>
                                    </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                           Độ phân giải: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["cameras"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                        <div class="label-chitiet">
                                            Camera trước:
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                           Độ phân giải: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["cameratr"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                        <div class="label-chitiet">
                                           Hệ điều hành & CPU:
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                          Hệ điều hành: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["hedieuhanh"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                           Chip xử lý (CPU): 
                                        </td>
                                        <td>
                                            <?php echo $row_up["chip"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                           Chip đồ họa: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["cad"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                        <div class="label-chitiet">
                                           Bộ nhớ & lưu trữ:
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                          RAM: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["ram"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                           Bộ nhớ trong: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["bnt"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                        <div class="label-chitiet">
                                           Kết nối:
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                           SIM: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["sim"]; ?>   
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                        <div class="label-chitiet">
                                          Pin & sạc:
                                        </div>
                                    </td>
                                    </tr>
                                    <tr>
                                        <td class="label-chitiet2">
                                           Dung lượng pin: 
                                        </td>
                                        <td>
                                            <?php echo $row_up["pinsac"]; ?>   
                                        </td>
                                    </tr>



                            </table>
                    
                        </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>
                
                </div>               

            </div>     
    </div>
</div>
<Script>
    function ImageSRC(id)
    {
        let imagePath = document.getElementById(id).getAttribute('src');
        document.getElementById('img-main').setAttribute('src',imagePath);
    }
</Script>