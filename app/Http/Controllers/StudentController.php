<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Validation\Rule;

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
      // $data = Students::where('age', '<=', 20)->orderBy('fname', 'asc')->limit(5)->get();

      // $data = DB::table('students')
      // ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')
      // ->get();

      // $data = DB::table('students')
      // ->select(DB::raw('sum(age) as gender_count'))
      // ->get();

      // 404 not found if fail
      // $data = Students::where('id', 101)->firstOrFail()->get();

      // $data = Students::where('id', 101)->firstOrFail()->get();

      // APP SERVICE PROVIDER
      // return view('students.index', ['students' => $data]);
      $data = array('students' => DB::table('students')->orderBy('created_at', 'desc')->Paginate(10));
      return view('students.index', $data);
      // END APP SERVICE PROVIDER
    }

    // public function show($id) {
    //   $data = Students::findOrFail($id)->get();

    //   return view('students.index', ['students' => $data]);
    // } 

    public function login() {
      if (FacadesView::exists('user.login')) {
        return view('user.login');
      } else {
        return abort(404);
        // return response()->view('missing.notfound');
      }
    }

    public function register() {
      return view('user.register');
    }

    public function process(Request $request) {
      $validated = $request->validate([
        "email" => ['required', 'email'],
        "password" => 'required'
        // "name sa database = condition"
      ]);

      if(auth()->attempt($validated)) {
        $request->session()->regenerate();
        return redirect('/')->with('message', 'Welcome back boy');
      }

      return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');
    }

    public function logout(Request $request) {
      auth()->logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/login')->with('message', 'Logout Successfully');
    }

    public function store_data(Request $request) {
      // return dd($request);
      $validated = $request->validate([
        "name" => ['required', 'min: 4'],
        "email" => ['required', 'email', Rule::unique('users', 'email')],
        "password" => 'required|confirmed|min:6'
        // "name sa database = condition"
      ]);

      $validated['password'] = Hash::make($validated['password']);

      $user = User::create($validated);

      // return $user;

      auth()->login($user);

      return redirect('/')->with('message', 'Registered Successfully');
    }

    public function add() {
      return view('crud.add')->with('title', 'Add New');
    }
    public function add_process(Request $request) {
      // return dd($request);
      $validated = $request->validate([
        "fname" => ['required', 'min: 4'],
        "lname" => ['required', 'min: 4'],
        "age" => ['required'],
        "gender" => ['required', 'min: 4'],
        "email" => ['required', 'email', Rule::unique('students', 'email')]
        // "name sa database = condition"
      ]);

      Students::create($validated);
      // Students Database

      return redirect('/')->with('message', 'Student has been added successfully');

    }
}
