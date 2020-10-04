<pre>
	Thuộc tính tĩnh có thể được truy cập bên trong phương thức của class đó bằng việc sử dụng từ khóa self và dấu :: ( self:: )
</pre>

<?php

class pi {

  public static $value=3.14159;

  public function staticValue() {

    return self::$value;

  }

}



$pi = new pi();

echo $pi->staticValue();

?>