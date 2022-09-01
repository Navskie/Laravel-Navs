<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() 
    {
      // $data = Students::all();
      // $data = Students::where('age', 22)->get();
      // $data = Students::where('fname', 'like', '%ya%')->get();
      // $data = Students::where('age', '<=', 20)->get();
      // $data = Students::where('age', '<=', 20)->orderBy('fname', 'asc')->get();
      // $data = Students::where('age', '<=', 20)->orderBy('fname', 'desc')->get();
      $data = Students::where('age', '<=', 20)->orderBy('fname', 'asc')->limit(5)->get();

      // $data = DB::table('students')
      // ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')
      // ->get();

      // $data = DB::table('students')
      // ->select(DB::raw('sum(age) as gender_count'))
      // ->get();

      // 404 not found if fail
      // $data = Students::where('id', 101)->firstOrFail()->get();

      // $data = Students::where('id', 101)->firstOrFail()->get();

      return view('students.index', ['students' => $data]);
    }

    // public function show($id) {
    //   $data = Students::findOrFail($id)->get();

    //   return view('students.index', ['students' => $data]);
    // } 
}
