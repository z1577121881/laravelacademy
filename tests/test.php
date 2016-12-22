<?php
//使用composer自动加载器
require '../vendor/autoload.php';

//实例Guzzle Http客户端
$client = new GuzzleHttp\Client();

//打开并迭代处理CSV
$csv = League\Csv\Reader::createFromPath($argv[1]);
foreach ($csv as $csvRow) {
    try {
        //发送HTTP GET请求
        $httpResponse = $client->get($csvRow[0]);

        //检查HTTP响应的状态码
        if($httpResponse->getStatusCode() >= 400) {
            throw new Exception();
        }
    } catch (Exception $e) {
        //把死链发给标准输出
        echo $csvRow[0] . PHP_EOL;
    }
}