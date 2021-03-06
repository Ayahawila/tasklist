namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

    public function index(){
        $tasks = DB::table('tasks')->get();

        return view('tasks.index', compact('tasks'));
    }
    public function show($id){
        $task = DB::table('tasks')->find($id);

        // return $tasks;
        return view('tasks.show', compact('task'));
    }