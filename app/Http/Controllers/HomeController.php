<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('todolist.create');
    }

    public function store(Request $request){
        $request->validate
        ([
            'title' => 'required',
            'description'=> 'required',
            'due_date'=> 'bail|required|date',
        ],[
            'due_date.required'=> 'Sila masukkan tarikh lahir',
            'due_date.date'=>'Sila semak jenis data',
        ]);

        $loggedUser = Auth::user();
        // dd($request); //for debugging...
        //logic save to db
        $todolist = new todolist();
        $todolist->title = $request->title;
        $todolist->description = $request->description;
        $todolist->user_id = Auth::user()->id;
        $todolist->due_date = $request->due_date;
        $todolist->created_at = Carbon::now();
        // $todolist->created_by = Auth::user()->id;
        $todolist->save();

        return redirect()->route('home')->with('Berjaya!', 'Maklumat Berjaya Dihantar');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //creating eloquent database
        // $users = User::all();
        // dd($users);

        //Query buiilds method
        // $users = User::all();
        // $todolists = todolist::all();
        // $todolists = todolist::limit(10); //limiti
        // $todolists =$todolists[0];
        // dd($todolists);

        //lazy loading?
        // $todolists = todolist::get();
        // foreach($todolists as $x => $todolists)
        //     {
        //         echo $todolists->user->name . '<br>';
            // }
            //eager loading
        // $todolists = todolist::with('user')->get();

        $todolists = todolist::get();

        $todolists = todolist::with('user')->orderBy('id', 'desc')->paginate(5);

        return view('todolist.home', compact('todolists'));
    }

    public function edit($id)
    {
        $users = User::all();
        $todolist = todolist::find($id);
        // $todolist = todolist::where('id', $id)->where('title');//to find specific...
        // dd($id);//debugging purpose
        return view('todolist.edit', compact('todolist', 'users'));
    }

    public function update(Request $request)
    {
        $loggedUser = Auth::user();
        //find todolist by its ID
        $todolist = todolist::find($request->todolistId);
        $todolist -> title = $request->title;
        $todolist->description = $request->description;
        $todolist->user_id = $request->author;
        $todolist->due_date = $request->due_date;
        $todolist->updated_at = Carbon::now();
        $todolist->updated_by = $loggedUser->id;
        $todolist->save();
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $todolist = todolist::find($id);
        $todolist->delete();
        return redirect()->route('home');
    }

}
