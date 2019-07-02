<?php

function sendPhone($phoneNum , $sendContent){
    $options['accountsid']='1201dffa333360cbc6f43bdad8969618';
    //填写在开发者控制台首页上的Auth Token
    $options['token']='b77f44ae65fc4ba0901b32e08f6519d5';

    //初始化 $options必填
    $ucpass = new ShortMsg($options);

    $appid = "98164f1b36d046d4a0f39e1d955e846a";    //应用的ID，可在开发者控制台内的短信产品下查看
    $templateid = "481135";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID

    $param = $sendContent; //多个参数使用英文逗号隔开（如：param=“a,b,c”），如为参数则留空
    $mobile = $phoneNum;

    $uid = "";

    //70字内（含70字）计一条，超过70字，按67字/条计费，超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。

    return $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
}

