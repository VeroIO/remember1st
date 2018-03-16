<?php 
require_once '../includes/header.php';
$canchangeinfo=$user_info->fstLogin;
 ?>
        <div class="col-md-6 col-md-offset-3">
            <div id="content">
                <div id="contentwrapper">`
                    <div class="panel panel-default toggle panelClose panelRefresh panelMove" id="tokendiv" style="margin-top: 10px;">
                        <!-- Start .panel -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Thông Tin Người Dùng</h4>
                            <div class="panel-controls panel-controls-right"><a href="#" class="panel-refresh"><i class="brocco-icon-refresh s12"></i></a><a href="#" class="toggle panel-minimize"><i class="icomoon-icon-plus"></i></a><a href="#" class="panel-close"><i class="icomoon-icon-close"></i></a></div>
                        </div>
                        <div class="panel-body">
                            <?php 
                            if($_POST['username']&&$canchangeinfo==0){
                                $username=$_POST['username'];
                                $fullname=$_POST['fullname'];
                                $secret_key=$_POST['secrect_key'];
                                $result=$m_user->update_fstLogin($username,$fullname,$secret_key);
                            ?>
                                <pre>Đã Cập Nhật Thành Công Vui Lòng Refresh</pre>
                            <?php
                            }
                            ?>                            
                            <?php 
                                if ($canchangeinfo==0&&!$_POST['username']) {

                            ?>
                                <div class="alert alert-danger">
                                <strong>Chú Ý!</strong><br>Đây là lần đầu tiên bạn đăng nhập,hiện Tại Bạn Chưa Thiết Lập Thông Tin Các Nhân Vui Lòng Cập Nhật Thông Tin Cá Nhân Để Bắt Đầu 
                                </div>                                                               
                                <form class="form-horizontal group-border stripped" method="POST">
                                    <input type="hidden" class="form-control" name="username" value="<?php echo $username ?>">
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-3 control-label" for="">Tên Người Dùng</label>
                                        <div class="col-lg-10 col-md-9">
                                            <input type="text" class="form-control" name="fullname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-md-3 control-label" for="">Secret Key</label>
                                        <div class="col-lg-10 col-md-9">
                                            <input type="text" class="form-control" name="secrect_key">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary center-block">Lưu</button>                                                                           
                                </form>
                            <?php
                                }else{
                            ?>
                            <form class="form-horizontal group-border stripped">
                                <div class="form-group">
                                    <label class="col-lg-2 col-md-3 control-label" for="">Tài Khoản</label>
                                    <div class="col-lg-10 col-md-9">
                                        <input type="text" class="form-control" name="username" value="<?php echo $user_info->username ?>" disabled>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label class="col-lg-2 col-md-3 control-label" for="">Tên Người Dùng</label>
                                    <div class="col-lg-10 col-md-9">
                                        <input type="text" class="form-control" name="fullname" value="<?php echo $user_info->fullname ?>" disabled>
                                    </div>
                                </div>
                            </form>                           
                            <?php        
                                }
                             ?>
                        </div>
                        <div class="panel-footer">Code By <a href="https://www.facebook.com/hellcat.info">HellCatVN-VGM</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / #wrapper -->
<?php 
require_once '../includes/footer.php';
 ?>