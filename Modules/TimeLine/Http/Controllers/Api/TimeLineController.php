<?php

namespace Modules\TimeLine\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TimeLine\Entities\TimeLine;
use Storage;
class TimeLineController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $time_lines = TimeLine::latest()->paginate(12);
        return response()->json($time_lines);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('timeline::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $req)
    {
        
        $data = $req->validate([
            'title' =>  'required | unique:time_lines',
            'desc'  =>  'required',
            'image' =>  'required'
        ]);
        
        $data['user_id']    =   7;
        $data['image'] = Storage::disk('public')->put('TimeLine/',$req->File('image'));

        $time_line = TimeLine::create($data);
            
        $time_line->syncTagsWithType($req->tags,$time_line->title);

        return response()->json('با موفقیت ثبت شد');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('timeline::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('timeline::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
