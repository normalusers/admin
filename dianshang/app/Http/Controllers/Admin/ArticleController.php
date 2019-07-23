<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;
use Image;
use Intervention\Image\ImageManager;
use App\Service\OSS;
use  Storage;
use Predis\Autoloader;
use  Illuminate\Support\Facades\Redis;
use App\Model\Article;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $listName = 'dataid';//列表名存id
        $hashkey = 'article';//hash名存数据
        if(Redis::exists($listName)){
            $listid = Redis::lrange($listName , 0 , -1);
            foreach ($listid as $key => $value) {
                $res[] = Redis::hgetall($hashkey.$value);
            }
        }else{
            $res = Article::get() -> toArray();
            foreach ($res as $key => $value) {
                Redis::rpush($listName , $value['id']);
                Redis::hmset($hashkey.$value['id'] , $value);
            }
        }
        return view('Admin.article.Line' , ['data' => $res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.article.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> except('_token');
        if($request -> hasFile('thumb')){
            //文件类型为：
            $file = $request -> file('thumb');
            $content_type = mime_content_type($file->getRealPath());
            $ext = $file -> getClientOriginalExtension();
            $realpath = $file -> getRealPath();
            $filepath = Config::get('app.img_uploade');
            $filename = substr(md5(str_shuffle(join('' , range(1, 10)))) , 1,8) . '.' . $ext;
            if(!is_dir($filepath)){
                mkdir($filepath);
            }
            Storage::disk('qiniu') -> writeStream($filename , fopen($realpath, 'r'));

            /*$bucket_name = config('oss.bucketName');
            $res = OSS::publicUpload($bucket_name , $filename , $realpath , ['ContentType' => $content_type]);
            $url = env('OSS_DOMAIN').$filename;*/

            $url = env('domain').$filename;

            $createImage = Image::make($url)->orientate();
            $createImage->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $createImage -> save($filepath . $filename);
            $data['thumb'] = $filepath . $filename;
        }
        if($id = DB::table('article') -> insertGetId($data)){
            $listName = 'dataid';//列表名存id
            $hashkey = 'article';//hash名存数据
            $data['id'] = $id;
            Redis::rpush($listName , $id);
            Redis::hmset($hashkey.$id , $data);
            return back() -> with('success' , '添加用户成功');
        }else{
            return back() -> with('error' , '添加用户失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public  function fue(Request $request){
        $data = $request -> input('delid');

        $listName = 'dataid';//列表名存id
        $hashkey = 'article';//hash名存数据
        foreach ($data as $key => $value) {
            DB::table('article') -> where('id',$value) -> delete();
            Redis::lrem($listName , 0 ,$value);
            Redis::del($hashkey.$value);
        }
        echo json_encode($data ,true);

    }
}
