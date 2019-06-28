
      <?php
         // Code PHP xử lý validate
         $error = array();
         $data = array();
         if (!empty($_POST['dangky_action']))Ư
         {
         	// Lấy dữ liệu
         	$data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
         	$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
         	$data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
          
         	// Kiểm tra dữ liệu
         	if (empty($data['fullname'])){
         		$error['fullname'] = 'Bạn chưa nhập tên';
         	}
          
         	if (empty($data['email'])){
         		$error['email'] = 'Bạn chưa email';
         	}
         	else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){ // đây là code sưu tầm nè!
         		// email không đúng
         		$error['email'] = 'Email không đúng định dạng';
         	}
          
         	if (empty($data['password'])){
         		$error['password'] = 'Bạn chưa nhập password';
         	}
          
         	// Lưu dữ liệu
         	if (!$error){
         		echo 'Dữ liệu có thể lưu trữ';
         		// Code lưu dữ liệu tại đây
         		// ...
         	}
         	else{
         		echo 'Dữ liệu bị lỗi, không thể lưu trữ';
         	}
         }
         ?>
              
      
          
 