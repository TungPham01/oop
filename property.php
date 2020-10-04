<pre>
	Thuộc tính tĩnh có thể được gọi 1 cách trực tiếp mà không phải khởi tạo đối tượng từ class bằng từ khóa new như những thuộc tính thông thường khác

	Để truy cập vào 1 thuộc tính tĩnh bạn có thể sử dụng tên class đi kèm với 2 dấu :: và tên thuộc tính tĩnh mà bạn muốn truy cập :
	 ClassName::staticProp; 


</pre>

<?php

class pi {

  public static $value = 3.14159;

}



// Get static property

echo pi::$value;

?> 