<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div class="container"> 
		<div class="row"> 
			<div class="col-md-12"> 
				<div class="heding-wrap">
					<h2 class="heading">Quản Lý Nhân Viên</h2>
				</div> 
			</div>
 		</div><!--/.Heading  -->
 		
 		<div class="row">
 			<div id="boos" class="col-md-12">
				<h3 class="info-title">Thông Tin</h3>
				
				<form class="form-info clearfix" action="#">
 					<div class="wrap-info clearfix">
 						<div class="idnv form-group clearfix">
 							<label>Mã NV</label> 
 							<input type="text" class="manv" name="manv" value="" placeholder="Vui lòng nhập ma nv" required>
 						</div>
 						
 						<div class="birth form-group clearfix">
 							<label>Ngày Sinh</label> 
 							<input type="text" class="ns" value="" placeholder="Vui lòng nhập nam sinh" required>
 						</div>
 						
 						<div class="fullname form-group clearfix">
 							<label>Họ Tên</label> 
 							<input type="text" class="hoten" value="" placeholder="Vui lòng nhập ho ten" required>
 						</div>
 						
 						<div class="address form-group clearfix">
 							<label>Địa Chỉ</label> 
 							<input type="text" class="add" value="">
 						</div>
 						
 						<div class="phone form-group clearfix">
 							<label>Mobile</label> 
 							<input type="text" class="mobile" value="" placeholder="Vui lòng nhập so mobile" required>
 						</div>
 						
 						<div class="email-add form-group clearfix">
 							<label>Email</label> 
 							<input type="text" class="email" value="" placeholder="Vui lòng nhập email" required>
 						</div>
 						
 						<div class="image_nv form-group clearfix">
 							<label>Chon anh</label> 
 							<input type="file" name="file" id="file_upload">
 							<a href="#" class="btn-upload btn btn-primary">Upload</a>
 							<div id="status"></div>
 							<img alt="" width="150px" height="200px"  src="" id="image_nv">
 						</div>
 					</div>
				</form><!--/.Information  -->	
				
				<h3 class="salary-title">Lương</h3>
				
				<form class="form-salary clearfix" action="#">
 					<div class="wrap-salary clearfix">
 						<div class="salary form-group clearfix">
 							<label>Lương Cơ Bản</label> 
 							<input type="number" class="luongcb" value="0">
 						</div>
 						
 						<div class="salary-pc form-group clearfix">
 							<label>Phụ Cấp</label> 
 							<input type="number" class="phucap" value="0">
 						</div>
 						
 						<div class="salary-total form-group clearfix">
 							<label>Tổng Lương</label> 
 							<input type="number" class="tongluong" value="0" disabled="disabled">
 						</div>
 					</div>
				</form><!--/.Salary  -->
				
				<div class="wrap-btn text-center">
					<div class="row">
					<div class="col-md-3">
							<a href="#" class="btn-insert btn btn-default">Thêm Mới</a>
						</div>
						
						<div class="col-md-3">
							<a href="#" class="btn-update btn btn-default">Cập Nhật</a>
						</div>
						
						<div class="col-md-3">
							<a href="#" class="btn-delete btn btn-default">Xóa</a>
						</div>
						
						<div class="col-md-3">
							<a href="#" class="btn-remove btn btn-default">Làm Mới</a>
						</div>
					</div>
				</div><!--/.Wrap-btn  -->
				
				<div class="wrap-list">
					<table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Mã NV</th>
                            <th>Họ Tên</th>
                            <th>Ngày Sinh</th>
                            <th>Địa Chỉ</th>
                            <th>Điện Thoại</th>
                            <th>Email</th>
                            <th>Lương Cơ Bản</th>
                            <th>Phụ Cấp</th>
                            <th>Tổng Lương</th>
                            <th>Ten file anh</th>
                          </tr>
                        </thead>
                        <tbody id="list-data">
                          
                        </tbody>
                      </table>
				</div><!--/.Wrap-List NV  -->
 			</div><!--/.col-md-12 .Form Input Text Info  -->	
 		</div>
 		
 		
	</div>
	
	
	<script type="text/javascript" src ="js/jquery.min.js"></script>
	<script type="text/javascript" src ="js/jquery.validate.min.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	
  	<script type="text/javascript">

  
  	$(document).ready(function(){
  		$('.ns').datepicker({dateFormat: "yy-mm-dd"});
  		
  	
	});
  	</script>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>