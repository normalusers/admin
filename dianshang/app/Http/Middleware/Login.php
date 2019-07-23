<?php
namespace App\Http\Middleware;
use Closure;
use Route;
class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if($request->session()->has('loginuser')){

            $action = $request->route()->getActionMethod();
    //获取访问模块控制器的名字
            $actions = explode('\\', \Route::current()->getActionName());
    //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName = $actions[count($actions)-2] == 'Controllers'?
            null:$actions[count($actions)-2];
            $func = explode('@', $actions[count($actions)-1]);
    //控制器名字
            $controller = $func[0];
            $actionName = $func[1];
            $res = session('resa');
             if(empty($res[$controller]) || !in_array($action, $res[$controller])){
                    return Redirect('bgindex') -> with('error' , '您没有权限访问，请联系超级管理员!');
                }
            return $next($request);
        }else{
            return Redirect('bglogin');
        }
    }
}
