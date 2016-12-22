### laravelcademy
 > 判断cvs文件中的超链接是否是死链接,如果是死链接将会输出这个链接
 
 ````
 <?php
 require "vendor/autoload.php";
 
 $urls = [
     "http://laravelacademy.org",
     "http://laravel-academy.org",
     "https://packagist.org"
 ];
 
 $scanner =  new \LaravelAcademy\UrlScanner\Url\Scanner($urls);
 print_r($scanner->getInvalidUrls());
 ````
 
### Test
>相关测试
````
$ cd tests
$ php test.php urls.csv
````