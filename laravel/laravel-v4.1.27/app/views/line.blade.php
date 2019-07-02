
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>后台数据列表</title>
    <link rel="stylesheet" type="text/css" href="css/Copy of bayer.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="js/jquery-1.8.3.min.js" type="text/javascript" ></script>
</head>
<body>
    <div class="page">
        <div class="bd">
            <h1 class="sitename left">杨森喜达诺微信网站后台</h1>
            <div class="right myset">
                <p>
                    <span style="font-size: 28px; font-family: sans-serif;">{{$username}}</span><span>用户</span>
                    <span><a href="http://www.survey.com/bl">后台首页</a></span>
                </p>
            </div>
            <div class="clear"></div>
        </div>
        <div>
            <div class="left menu">
                <ul class="first_ul">

                    <li class="li_style"><a href="">问卷调查显示</a></li>
                    <li class="li_style"><a href="">用户管理</a></li>
                    <li class="li_style"><a href="https://www.baidu.com/">退出后台</a></li>
                </ul></div>
                <div class="left content">
                    <h2>问卷结果</h2>
                    <button class="outputfile">显示数据</button>
                    <div class="table_style">
                        <div class="form" style="display: none">
                            <table border="1" width="100%" cellspacing="0" cellpadding="0">
                                <tr style="text-align: center; ">
                                    <td width="9%">id</td>
                                    <td width="9%">email</td>
                                    <td width="9%">是否满意</td>
                                    <td width="9%">检索结果不够精准</td>
                                    <td width="9%">检索结果不够全面</td>
                                    <td width="9%">反馈时机超出规定天数</td>
                                    <td width="9%">流程繁琐</td>
                                    <td width="9%">服务态度不佳</td>
                                    <td width="20%">投票时间</td>
                                    <td width="20%">操作</td>
                                </tr>
                                @foreach( $paginate as $value)
                                        <tr style="text-align: center; ">
                                            <td  >{{$value->id}}</td>
                                            <td  >{{$value->email}}</td>
                                            <td  >{{$value->q2}}</td>
                                            <td  >{{$value->q3}}</td>
                                            <td  >{{$value->q4}}</td>
                                            <td  >{{$value->q5}}</td>
                                            <td  >{{$value->q6}}</td>
                                            <td  >{{$value->q7}}</td>
                                            <td  >{{$value->created_at}}</td>
                                            <td  style="line-height: 60px;width: 140px; display: inline-block;"><p>
                                                <a href="http://www.survey.com/dele?deleid={{$value->id}}">删除</a>|
                                                <a href="http://www.survey.com/update?updateid={{$value->id}}">编辑</a>
                                            </p></td>
                                        </tr>
                                @endforeach
                            </table>
                            <div class="footer">
                                总数：<b>{{count($datecounts)}}{{$paginate->links()}}</b>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clear">
                    <p></p>
                </div>

            </div>
        </div>
        <script type="text/javascript">
           var recorddeter =  (function(){
                           var recookie = (decodeURIComponent(document.cookie)).split('=')[2];
                           if(recookie == 01){
                               alert("删除该用户数据成功!");
                               document.cookie = "retstr=00";
                           }else if(recookie == 02){
                               alert("删除该用户数据失败!");
                               document.cookie = "retstr=00";
                           }
                           else if(recookie == 03){
                               alert("编辑该用户成功!");
                               document.cookie = "retstr=00";
                           }
                           else if(recookie == 04){
                               alert("编辑该用户失败!");
                               document.cookie = "retstr=00";
                           }
                       })();
            recorddeter;
            window.onload = function(){
                pageflash;
            }
            var pageflash = (function axx(){
                             var urlparamter = location.search;
                             if(urlparamter.indexOf('?') != -1){
                                    var url = urlparamter.substr(-1);
                                    if(url >= 1){
                                        $(".form").css("display","inline");
                                        datebtn;
                                    }
                                }else{
                                    datebtn;
                                }

                        })();
                    var datebtn = (function(){
                        $(".outputfile").toggle(function() {
                            $(".form").css("display","inline");
                          },function() {
                            $(".form").css("display","none");
                          });
                    })();


        </script>

    </body>
    </html>