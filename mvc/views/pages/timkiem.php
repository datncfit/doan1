<div class="box-phone" >
        <div class="container-fluid"  >
            <!-- Control the column width, and how they should appear on different devices -->
            <div class="row" >
                <?php
                $i = 1;
                    while ($row= mysqli_fetch_assoc($data["list"])){?>
                        <div class="col-sm-3" >
                            <table class="item-phone" style="margin-top: 10px">
                                    <tr>
                                        <th><a href="http://localhost/BaoCao/Home/Thongtin/<?php echo $row['prd_id']; ?>"><img width = "250px" height= "190px"  src="<?php
                                            require_once "./mvc/core/hiepurl.php";
                                            $x = getCurrentPageURL();
                                            $a = $x;
                                            $arr = explode("/",filter_var(trim($a, "/")));
                                            $cd = count($arr);
                                            if($x == "http://localhost/BaoCao/" or $x == "http://localhost/BaoCao/Home" or ($cd >= 4 && $arr[4]!= "Home"))
                                                {
                                                    $x = ".";
                                                }
                                            else if( $x == "http://localhost/BaoCao/Home/" or $x == "http://localhost/BaoCao/Home/timkiem" or $x == "http://localhost/BaoCao/Home/TrangChu" ) {
                                                $x = "..";
                                            }else{
                                                $x = "../..";
                                            }

                                            echo $x;
                                        ?>/public/img/<?php echo $row['image']; ?>"></a></th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['prd_name']; ?></td>
                                    </tr>    
                                    <tr>
                                        <th><?php echo $row['price']; ?></th>
                                    </tr>
                            </table>
                        </div>
                <?php } ?>
            </div>
            <br>
        </div>
</div>