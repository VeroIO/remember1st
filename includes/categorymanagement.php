<?php 
require_once 'header.php';
require '../module/m_category.php';
$m_category =new m_category();
$all_category=$m_category->list_all_category();
/*Phan Trang*/
$lay=2;
$page=$_GET['page'];
if ( $page==null )
{
    $page = 1 ;
}
$tongdongdtb=count($all_category);
$sotrang = ceil($tongdongdtb/$lay);
$tu=($page-1)*$lay;
$i=$tu;
$list_category=$m_category->list_category($tu,$lay);
 ?>
	<div id="content">
	    <div id="contentwrapper">
			<div class="row">
				<div class="col-lg-9 col-lg-offset-2"> 
			        <div class="panel panel-default toggle panelClose panelRefresh panelMove" style="margin-top: 10px;">
			            <!-- Start .panel -->
			            <div class="panel-heading">
			                <h4 class="panel-title">Quản Lí Category</h4>
			                <div class="panel-controls panel-controls-right"><a href="#" class="panel-refresh"><i class="brocco-icon-refresh s12"></i></a><a href="#" class="toggle panel-minimize"><i class="icomoon-icon-plus"></i></a><a href="#" class="panel-close"><i class="icomoon-icon-close"></i></a></div>
			            </div>
			            <div class="panel-body">
							<div class="row">
								<button class="btn btn-success pull-right" style="margin-right: 5px;" data-toggle="modal" data-target="#themgd"><i class="fa fa-plus"></i>Thêm GD</button>
									<table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên Danh Mục</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php foreach ($list_category as $category) {
                                        		$i++;
                                        	?>
											<tr>
	                                        	<td class="id"><?php echo $category->id ?></td>
	                                        	<td><?php echo $category->type?></td>
	                                        	<td>
													<div class="btn-group">
													  <a class="btn btn-warning edit_category" disabled>Sửa</a>
													  <a class="btn btn-danger del_category">Xóa</a>
													</div>	                                        		
	                                        	</td>											
											</tr>
											<?php 
											}
											 ?>
                                        </tbody>
                                    </table>
								<div class="text-center">
								    <ul class="pagination mt0 mb0">
				                    	<?php for ($i=1; $i <=$sotrang ; $i++) {
				                    	?>
								        <li class="<?php if($i==$page){echo "active";}?>"><a href="cm.html?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
										<?php 
										} 
										 ?>								        
								    </ul>
								</div>								
							</div>
			            </div>
			            <div class="panel-footer">Code By <a href="https://www.facebook.com/hellcat.info">HellCatVN-VGM</a></div>
			        </div>									
				</div>		
			</div>
	    </div>
	</div>
<!-- Modal -->
<!-- All modal need-->
<div id="divLoading" style="display:none"> 
</div>
<input type="hidden" name="mm" value="<?php echo $_SESSION["mm_info"] ?>">

<!-- End All modal need-->
<div id="themgd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm Danh Mục</h4>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal group-border stripped">
			<div class="form-group">
			    <label class="col-lg-2 col-md-3 control-label" for="">ID(Tiếp Theo ID cuối)</label>
			    <div class="col-lg-10 col-md-9">
			        <input type="text" class="form-control" name="a_cateid">
			    </div>
			</div>
			<div class="form-group">
			    <label class="col-lg-2 col-md-3 control-label" for="">Tên Danh Mục </label>
			    <div class="col-lg-10 col-md-9">
			        <input type="text" class="form-control" name="a_catename">
			    </div>
			</div>
			<a id="a_cate" class="btn btn-success pull-right">Thêm</a>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tắt</button>
      </div>
    </div>
  </div>
</div>
<div id="ketqua" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm Category</h4>
      </div>
      <div class="modal-body text-center" id="contentketqua">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="location.reload();">Tắt</button>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
	$(".del_category").click(function() {
		id = $(this).closest("tr").find(".id").text();
		$(this).closest("tr").empty();
		var result = confirm("Want to delete?");
		if (result==true) {
			$.post('controller/c_category.php', {
				type:'xoacate',
				id:id,
			}, function(data, status) {
				location.reload();
			});
		}		
	});
	$('#a_cate').click(function() {
		$('#themgd').modal('hide');
		catename=$('input[name=a_catename]').val();
		cateid=$('input[name=a_cateid]').val();

		$.post('controller/c_category.php', {
			type:'them',
			catename:catename,
			cateid:cateid,
		}, function(data, status) {
			console.log(data);
			$('#ketqua').modal('show');
			$('#contentketqua').html(data);
		});
	});
</script>
 <?php 
require_once 'footer.php';
 ?>