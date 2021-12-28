<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Resident;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    public function googleChart($value='')
    {
        $Resident = GoogleChart::get();
        foreach ($Resident as $key => $value) {
                $subjectData[] = [$value['sex'] , $value['number']];
            }
        return view('post.chart.google',compact('subjectData'));
    }
}