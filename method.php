<pre>
Phương thức tĩnh được gọi 1 cách trực tiếp - không cần phải khởi tạo đối tượng từ class đó

Phương thữ tĩnh được khai báo bằng từ khóa static trước từ khóa function

Để truy cập phương thức tĩnh ta sử dụng tên class và :: sau đó là tên của phương thức()
ClassName::staticMethod(); 
</pre>

<?php
class testStaticMethod {
    public static function test($pr1, $pr2) {
        echo $pr1.'-'.$pr2;
    }
}

testStaticMethod::test('Học', 'PHP');
?>