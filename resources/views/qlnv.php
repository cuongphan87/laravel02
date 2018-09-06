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

  //Function upload image
  	$(document).on('click','.btn-upload',function(){
		var file_data = $('#file_upload').prop('files')[0];
		var type = file_data.type;
		
		var match = ["image/gif","image/jpeg","image/png"];
		if ( type == match[0] || type == match[1] || type == match[2] ) {
			var form_data = new FormData();
			form_data.append('file',file_data);

			$.ajax({
				url : 'uploadfile',
				dataType: 'json',
				type: 'POST',
				contentType: false,
				processData: false,
				data: form_data,
				success : function(res){
					console.log(res);
					$('#file_upload').val();
					$('#image_nv').attr("src","upload/"+res);
				}
			});
		} else {
			
			$('#status').text("Chi duoc chon kieu anh index.php");
			$('#file_upload').val();
		}
  	});
  //Function validate email
 	function validateEmail(email) {
 		  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 		  return re.test(email);
 	}

 	//Function validate date
	function validateDate(date) {
		  var currVal = date;
		  if(currVal == '') {
			 
		    return false;
		  }
		  //Declare Regex  
		  var rxDatePattern = /^(\d{4})(\/|-)(\d{1,2})(\/|-)(\d{1,2})$/; 
		  var dtArray = currVal.match(rxDatePattern); // is format OK?
		
		 
		  if (dtArray == null) {
			
		     return false;

		  }
		  
		  //Checks for mm/dd/yyyy format.
		  dtMonth = dtArray[3];
		  dtDay= dtArray[5];
		  dtYear = dtArray[1];
		 
		  if (dtMonth < 1 || dtMonth > 12){
			  
		      return false;
		  }
		  else if (dtDay < 1 || dtDay> 31){
			 
		      return false;
		  }
		  else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31) {
			  c
		      return false;
		  }
		  else if (dtMonth == 2)
		  {
		     var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
		     if (dtDay> 29 || (dtDay ==29 && !isleap)){
		    	 
		          return false;
		     }
		  }
		  
		  return true;
	}

	// Validate Phone 
	function validatePhone(txtphone) {
	    var flag = false;
	    var phone = txtphone.trim(); // ID của trường Số điện thoại
	    phone = phone.replace('(+84)', '0');
	    phone = phone.replace('+84', '0');
	    phone = phone.replace('0084', '0');
	    phone = phone.replace(/ /g, '');
	    if (phone != '') {
	        var firstNumber = phone.substring(0, 2);
	        if ((firstNumber == '09' || firstNumber == '08') && phone.length == 10) {
	            if (phone.match(/^\d{10}/)) {
	                flag = true;
	            }
	        } else if (firstNumber == '01' && phone.length == 11) {
	            if (phone.match(/^\d{11}/)) {
	                flag = true;
	            }
	        }
	    }
	    return flag;
	}

	
 	// Function lam moi textbox 
 	$(document).on('click', '.btn-remove', function(){
 		$(this).parent().parent().parent().parent().children().find('.manv').val('');
		$(this).parent().parent().parent().parent().children().find('.ns').val('');
		$(this).parent().parent().parent().parent().children().find('.hoten').val('');
		$(this).parent().parent().parent().parent().children().find('.add').val('');
		$(this).parent().parent().parent().parent().children().find('.mobile').val('');
		$(this).parent().parent().parent().parent().children().find('.email').val('');
		$(this).parent().parent().parent().parent().children().find('.luongcb').val('0');
		$(this).parent().parent().parent().parent().children().find('.phucap').val('0');
		$(this).parent().parent().parent().parent().children().find('.tongluong').val('0');
		
		
 	});

 	 // Function tinh luong
 	 function tong_luong(luongcb,phucap){
		var tongluong;
		tongluong = parseFloat(tongluong);
		tongluong = luongcb + phucap;
		return tongluong;
  	 }

 	 // Function dua du vao tong luong 

 	 $(document).on('keyup', '.phucap', function(){
		var luongcb = $(this).parent().parent().children().find('.luongcb').val();
		var phucap = $(this).val();
		var tongluong;
		luongcb = parseFloat(luongcb);
		phucap = parseFloat(phucap);
		tongluong = parseFloat(tongluong);
		tongluong = tong_luong(luongcb,phucap);
		if ( isNaN(luongcb) || isNaN(phucap) ) {
			return;
		} else {
			$(this).parent().parent().children().find('.tongluong').val(tongluong);
		}
 	 });

 	$(document).on('keyup', '.luongcb', function(){
		var phucap = $(this).parent().parent().children().find('.phucap').val();
		var luongcb = $(this).val();
		var tongluong;
		luongcb = parseFloat(luongcb);
		phucap = parseFloat(phucap);
		tongluong = parseFloat(tongluong);
		tongluong = Math.round(tong_luong(luongcb,phucap));
		
		if ( isNaN(luongcb) || isNaN(phucap) ) {
			return;
		} else {
			$(this).parent().parent().children().find('.tongluong').val(tongluong);
		}
 	 });
  //Function dien du lieu vao danh sach
 	function select_data(){
 	 
		$.ajax({
			url: "/select",
			type: "GET",
			dataType: "JSON",
			contentType: "application/json",
			success: function(results) {	
				
			
				for ( var idx=0; idx < results.length; idx++ ) {
					result = results[idx];
					
					
					var row = [
                            '<tr class="list">',
                              '<td class="manv-list">'+result.manv+'</td>',
                              '<td class="hoten-list">'+result.hoten+'</td>',
                              '<td class="ngaysinh-list">'+result.ngaysinh+'</td>',
                              '<td class="diachi-list">'+result.diachi+'</td>',
                              '<td class="phone-list">'+result.mobile+'</td>',
                              '<td class="email-list">'+result.email+'</td>',
                              '<td class="luongcb-list">'+result.luongcb+'</td>',
                              '<td class="phucap-list">'+result.phucap+'</td>',
                              '<td class="tongluong-list">'+result.tongluong+'</td>',
                              '<td class="image-list">'+result.image+'</td>',
                            '</tr>',
                          '</tbody>',
						];
					$('#list-data').append(row.join('n'));
					
				}
			}
		});
 	}

 	//Function them moi nhan vien
	 $(document).on('click','.btn-insert', function() {
		 
		var manv = $(this).parent().parent().parent().parent().children().find('.manv').val();
		var ngaysinh = $(this).parent().parent().parent().parent().children().find('.ns').val();
		var hoten = $(this).parent().parent().parent().parent().children().find('.hoten').val();
		var diachi = $(this).parent().parent().parent().parent().children().find('.add').val();
		var mobile = $(this).parent().parent().parent().parent().children().find('.mobile').val();
		var email = $(this).parent().parent().parent().parent().children().find('.email').val();
		var luongcb = $(this).parent().parent().parent().parent().children().find('.luongcb').val();
		var phucap = $(this).parent().parent().parent().parent().children().find('.phucap').val();
		var tongluong = $(this).parent().parent().parent().parent().children().find('.tongluong').val();
		
		var image_name = $(this).parent().parent().parent().parent().children().find('#file_upload').val().split('\\');
		var image = image_name[image_name.length-1];
		
		if ($.trim(manv) == '') {
			alert("Chua nhap ma nhan vien!");
			return;
		}

		
		if (!validateDate(ngaysinh)) {
			
			alert("Nam sinh chua dung!");
			return;
		}

		if ($.trim(hoten) == '') {
			alert("Chua nhap ho ten!");
			return;
		}
		
		if (!validateEmail(email)) {
			alert("Email sai dinh dang");
			return;
		}

		if (!validatePhone(mobile)) {
			
			alert("So dien thoai sai dinh dang!");
			return;
		}

		if ( image_name == "" ) {
			alert("Chua chon anh");
			return;
		}
		
		$.ajax({
			url: "/insertnv",
			type: "GET",
			dataType: "JSON",
			data: { manv:manv, ngaysinh:ngaysinh, hoten:hoten, diachi:diachi, mobile:mobile, email:email, luongcb:luongcb,phucap:phucap, tongluong:tongluong, image:image},
			contentType: "application/json",
			success: function(mess) {
				alert(mess);
				$('#list-data > .list').remove();
				select_data();
			}
		});
	 });

	 // Function Cap nhat thong tin
  	 $(document).on('click','.btn-update', function() {
  	  	 
		var manv = $(this).parent().parent().parent().parent().children().find('.manv').val();
		var ngaysinh = $(this).parent().parent().parent().parent().children().find('.ns').val();
		var hoten = $(this).parent().parent().parent().parent().children().find('.hoten').val();
		var diachi = $(this).parent().parent().parent().parent().children().find('.add').val();
		var mobile = $(this).parent().parent().parent().parent().children().find('.mobile').val();
		var email = $(this).parent().parent().parent().parent().children().find('.email').val();
		var luongcb = $(this).parent().parent().parent().parent().children().find('.luongcb').val();
		var phucap = $(this).parent().parent().parent().parent().children().find('.phucap').val();
		var tongluong = $(this).parent().parent().parent().parent().children().find('.tongluong').val();

		var image_name = $(this).parent().parent().parent().parent().children().find('#file_upload').val().split('\\');
		var image = image_name[image_name.length-1];
		
		if (!validateEmail(email)) {
			alert("Email sai dinh dang");
			return;
		}
		
		
		$.ajax({
			url: "/updatenv",
			type: "GET",
			dataType: "JSON",
			data: { manv:manv, ngaysinh:ngaysinh, hoten:hoten, diachi:diachi, mobile:mobile, email:email, luongcb:luongcb,phucap:phucap, tongluong:tongluong,image:image},
			contentType: "application/json",
			success: function(mess) {
				alert(mess);
				$('#list-data > .list').remove();
				select_data();
			}
		});
  	 });

	 //Function xoa thong tin 
	 $(document).on('click','.btn-delete',function(){
		 var manv = $(this).parent().parent().parent().parent().children().find('.manv').val();

		if (manv == "" ) {
			alert("Chưa chọn nhân viên để xóa");
		} else {
    		$.ajax({
    			url: "/deletenv",
    			type: "GET",
    			dataType: "JSON",
    			data: {manv:manv},
    			success: function(mess) {
        			
    				alert(mess);
    				$('#list-data > .list').remove();
    				select_data();
    			}
    		});
		}
	});
	

 	//Function dua du lieu len text-box 

	$(document).on('click', '.list', function(){
		var manv = $(this).children('td.manv-list').text();
		var hoten = $(this).children('td.hoten-list').text();
		var namsinh = $(this).children('td.ngaysinh-list').text();
		var diachi = $(this).children('td.diachi-list').text();
		var phone = $(this).children('td.phone-list').text();
		var email = $(this).children('td.email-list').text();
		var luongcb = $(this).children('td.luongcb-list').text();
		var phucap = $(this).children('td.phucap-list').text();
		var tongluong = $(this).children('td.tongluong-list').text();
		var image_name = $(this).children('td.image-list').text();
		$(this).parent().parent().parent().parent().children().find('.manv').val(manv);
		$(this).parent().parent().parent().parent().children().find('.hoten').val(hoten);
		$(this).parent().parent().parent().parent().children().find('.ns').val(namsinh);
		$(this).parent().parent().parent().parent().children().find('.add').val(diachi);
		$(this).parent().parent().parent().parent().children().find('.mobile').val(phone);
		$(this).parent().parent().parent().parent().children().find('.email').val(email);
		$(this).parent().parent().parent().parent().children().find('.luongcb').val(luongcb);
		$(this).parent().parent().parent().parent().children().find('.phucap').val(phucap);
		$(this).parent().parent().parent().parent().children().find('.tongluong').val(tongluong);
		//(this).parent().parent().parent().parent().children().find('#file_upload').val(image_name);
		$('#image_nv').attr("src","upload/"+image_name);
	});
  	
  	$(document).ready(function(){
  		$('.ns').datepicker({dateFormat: "yy-mm-dd"});

  		select_data();
  		
  	
	});
  	</script>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>