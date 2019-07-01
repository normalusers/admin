<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-1.8.3.min.js" type="text/javascript" ></script>
        <link rel="stylesheet" href="css/update.css">
    </head>
    <body>
        <div class="box">
                <h1>update view</h1>
                <input type="text" name="updateemaill" value=""  class="updateemaill" placeholder="输入你想要更改的邮箱" /><br />
                <h2>请分别重新输入你想要修改的信息答案</h2>
                <div class="updateqs">
                    <label><input type="checkbox" name="q1" value=""   class="updateq"><p>q1</p></label>
                    <label><input type="checkbox" name="q2" value=""  class="updateq"><p>q2</p></label>
                    <label><input type="checkbox" name="q3" value=""  class="updateq"><p>q3</p></label>
                    <label><input type="checkbox" name="q4" value=""  class="updateq"><p>q4</p></label>
                    <label><input type="checkbox" name="q5" value=""  class="updateq"><p>q5</p></label>
                    <label><input type="checkbox" name="q6" value=""  class="updateq"><p>q6</p></label>
                    <label><input type="checkbox" name="q7" value=""  class="updateq"><p>q7</p></label>
                </div>
                <input type="submit" class="submit" value="提交"/>
            </form>
            <div class="reu">
            </div>
        </div>

    </body>
    <script>

            var defalut = function () {//实现点击界面的默认
                var qs = document.querySelectorAll('.updateq'),
                useremail = document.querySelector('.updateemaill'),
                recookie = decodeURIComponent(document.cookie),
                t = recookie.split(','),
                s = [];
                useremail.placeholder = t[1];
                var updateid = t[0].split('=')[1];
                for(var i = 2;i<9;i++){
                    s.push(t[i]);
                }
                for(var i = 0;i<s.length;i++){
                    if(s[i] == 'checked'){
                        qs[i].checked = true;
                    }
                }
                return updateid;
         };
         var updateid = defalut(),
             qs = [];

        document.querySelector('.submit').onclick = function(){

                var q = (function(){
                    var checks = document.querySelectorAll(".updateq");

                    for(let i = 0; i<checks.length;i++){
                        if(checks[i].checked){
                            checks[i].value = 1;
                        }else{
                            checks[i].value = 0;
                        }
                    }
                    for(let i = 0;i<checks.length;i++){
                        qs.push(checks[i].value);
                    }
                    console.log(qs);
                })();
                q;//
                var searchdate = (function(){
                                    var  searchUrl = '/updat',
                                            updateEmail = document.querySelector('.updateemaill').value;
                                            $.post(
                                                searchUrl,
                                                {"updateid": updateid , "updateemail" : updateEmail , "qs" : qs },
                                            function(data) {
                                                location.href = "http://www.survey.com/ba";
                                    })
                                        })();
                searchdate;




        }

    </script>
</html>
