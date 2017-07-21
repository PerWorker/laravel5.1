<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//  	$articles = Article::all();
//		$articles = Article::latest()->where('published_at','<=',Carbon::now())->get();	
//		dd(\Auth::user());	
		$articles = Article::latest()->published()->get();
        return view('articles.index',compact('articles'));
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreArticleRequest $request)
    {
          //dd($request->all());
		  #接收post数据
		/*$input = $request->all();//快速获取post的某个值：$request->get('title');
		#存入数据库
		Article::create($input);*/
		Article::create(array_merge(['user_id'=>\Auth::user()->id],$request->all()));
//		 $this->validate($request,[
//          'title'=>'required|min:4',
//          'author'=>'required',
//          'content'=>'required',
//          'published_at'=>'required'
//      ]);
//		  $input['published_at'] = Carbon::now();		  
		  #重定向
		  return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$articles = Article::findOrFail($id);
//		if(is_null($articles)){
//			abort(404);
//		}
		//dd($articles->published_at->diffForHumans());
		//dd($articles->created_at->year);
		//dd($articles->created_at->diffForHumans());
		 return view('articles.show',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::findOrFail($id);
		return view('articles.edit',compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\StoreArticleRequest $request, $id)
    {
        $articles = Article::findOrFail($id);
		$articles->update($request->all());
		
		return redirect('/articles');
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
}
