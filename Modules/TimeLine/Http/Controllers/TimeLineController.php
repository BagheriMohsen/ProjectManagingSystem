<?php

namespace Modules\TimeLine\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

use Modules\TimeLine\Entities\TimeLine;
use Modules\TimeLine\Entities\TimeLineComment;

class TimeLineController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user = auth()->user();
        $time_lines = TimeLine::where("unit_id",$user->unit_id)
      
        ->latest()->paginate(12);
        return view('timeline::timeline-index',compact('time_lines'));
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
        

        $req->validate([
            'title' =>  'required | unique:time_lines',
            'desc'  =>  'required',
            "image" =>  "required"

        ]);
        $user = auth()->user();

       
        /** resize image */
        $image       = $req->file('image');
        $filename    = $image->getClientOriginalName();
    
        $image_resize = Image::make($image->getRealPath());              
        $image_resize->resize(310, 194);
        $image_path = $image_resize->save(public_path('storage/TimeLine/Intervention/'.time().$filename));
  
        $image_path = 'TimeLine/Intervention/'.$image_path->basename;
        /** image real size */
        $path = Storage::disk("public")->put("TimeLine/",$req->File("image"));

        // save timeline
        $time_line = TimeLine::create([
            "title"         =>  $req->title,
            "desc"          =>  $req->desc,
            "thumb"         =>  $image_path,
            "image"         =>  $path,
            "unit_id"       =>  $user->unit_id,
            "user_id"       =>  $user->id,
            "is_confirm"    =>  True,
            "confirm_date"  =>  Carbon::now()
        ]);

        // save tags
        $time_line->syncTagsWithType($req->tags,$time_line->title);

        return redirect()->route('timeline.index')->with('message');

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($slug)
    {

        $user = auth()->user();

        $time_line = TimeLine::where("slug",$slug)->firstOrFail();

        if($user->unit_id != $time_line->unit_id){
            return abort(403);
        }

        $comments = TimeLineComment::where("time_line_id",$time_line->id)
        ->paginate(10);

        return view('timeline::timeline-single',compact(
            "time_line",
            "comments"
        ));
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
        // find time line
        $time_line = TimeLine::findOrFail($id);

        // delete images
        Storage::disk("public")->delete($time_line->image);
        Storage::disk("public")->delete($time_line->thumb);

        // delete time line
        $time_line->delete();

        return redirect()->route('timeline.index');
    }
}
