<?php
 require_once 'C:\xampp\htdocs\learnPhp\template\connet.php';
 require_once 'C:\xampp\htdocs\learnPhp\template\shop.php';
if(isset($_POST['submit'])){
    $search= $_POST['search-value'];
    $rquery = "SELECT * FROM products WHERE name = ?";
    $connet = mysqli_prepare($conn,$rquery);
    $searchValude = "%{search}%";
    mysqli_stmt_bind_param($connet,'s',$search,$searchValude);
    mysqli_stmt_execute($connet);
    $resust = mysqli_stmt_get_result($connet);
    if(!$resust){
            echo "Error";
            die($resust);
            
    }else{
        
                            while ($kq = mysqli_fetch_assoc($resust)) {
                                ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic" style="height: 435px;">
                                            <a href="detail.php?id=<?php echo $kq['id']; ?>">
                                                <img src="<?php echo $kq['image']; ?>" alt="" style="height: 100%;">
                                            </a>
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>
                                                </li>
                                                <li class="quick-view"><a href="#">+ Add Cart</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">Towel</div>
                                            <a href="#">
                                                <h5>
                                                    <?php echo $kq['name']; ?>
                                                </h5>
                                            </a>
                                            <div class="product-price">
                                                <?php echo number_format($kq['price']); ?><sup> đ</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
            
        <?php }}}?>
    

