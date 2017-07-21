<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
	/**
     * Show the form for about a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
//    	$name = '<span style="color:red;">hello</span>';
//        return view('sites.about')->with('name',$name);//单个变量
		//多个变量的第一种写法
//      return view('sites.about')->with([
//      	'first'=>'hello',
//      	'last'=>'world'
//      ]);
        //多变量的第二种写法
//      $data = [];
//		$data['first']='Jack';
//		$data['last'] = 'Lucy';
//		
//		return view('sites.about',$data);
		//多变量的第三种写法
//		$first = '发送';
//		$last = '飞洒发高富帅';
//		$data = ['']
//		return view('sites.about',compact('first','last'));
		$people = ['Taylor Otwell','Jeffy Way','Happy Peter'];
//		$people = [];
		return view('sites.about',compact('people'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
