<?php

return [
    /**
     * 经典网络 or VPC
     */
    'networkType' => env('OSS_NET_WORK_TYPE','经典网络'),
    /**
     * 城市名称：
     *  经典网络下可选：杭州、上海、青岛、北京、张家口、深圳、香港、硅谷、弗吉尼亚、新加坡、悉尼、日本、法兰克福、迪拜
     *  VPC 网络下可选：杭州、上海、青岛、北京、张家口、深圳、硅谷、弗吉尼亚、新加坡、悉尼、日本、法兰克福、迪拜
     */
    'city' => env('OSS_CITY','北京'),
    'AccessKeyId' => env('OSS_ACCESS_KEY_ID',''),
    'AccessKeySecret' => env('OSS_ACCESS_KEY_SECRET',''),
    'bucketName' => env('OSS_BUCKET_NAME'),
    'ossDomain' => env('OSS_DOMAIN'),//OSS绑定域名
];
?>