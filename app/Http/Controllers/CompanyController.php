<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Comment;

class CompanyController extends Controller
{
#public function index(Company $company)
    #{
        #return view('index')->with(['companies' => $company->getPaginateByLimit()]);
    #}
    
    public function index()
    {
        // クライアントインスタンス生成
        $client = new \GuzzleHttp\Client();
        // GET通信するURL
        $url = 'https://job.yahooapis.jp/v1/furusato/company/?appid=dj00aiZpPUJJcXZCOFFFUTFuSSZzPWNvbnN1bWVyc2VjcmV0Jng9N2I-';
        // リクエスト送信と返却データの取得
        // Bearerトークンにアクセストークンを指定して認証を行う
        $response = $client->request(
            'GET',
            $url,
            ['Bearer' => config('services.yahoo.token')]
        );
        // API通信で取得したデータはjson形式
        // PHPファイルに対応した連想配列にデコード
        $results = json_decode($response->getBody(), true);
        #dd($results["results"]);
        foreach($results["results"]as $result){
            $company = new Company();
            $company->logo=($result["webUrl"]);
            $company->name=($result["name"]);
            $company->address=($result["prefecture"]);
            $company->potision=($result["presidentPosition"]);
            $company->president=($result["presidentName"]);
            $company->capital=($result["capital"]);
            $company->employees=($result["employees"]);
            $company->save();
        }
        // index bladeに取得したデータを渡す
        return view('index')->with([
            'companies' => $company->getPaginateByLimit(),
        ]);

    }
    
    public function show(Company $company)
    {
        return view('show')->with(['company' => $company]);
    }
    
    public function create(Company $company)
    {
        return view('create')->with(['company'=>$company]);
    }
    
    public function tweet(Comment $comment, Company $company)
    {
        return view('tweet')->with(['comments' => $comment->getPaginateByLimit(),'companies' => $company->get()]);
    }

    
    public function store(Company $company, Comment $comment, Request $request)
    {
        $input = $request['comment'];
        $input['company_id'] = $company->id;
        $comment->fill($input)->save();
        return redirect('/comments');
    }
}
