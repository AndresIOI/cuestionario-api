<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;

class GroupsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function all(){
      try {

        $groups = Group::all();
      
        return response()->json($groups, 200);

      } catch (\Illuminate\Database\QueryException $ex) {

        dd($ex->getMessage());
      
      }
    }

    public function getGroupByUser($id) {
      try {

        $group = User::find($id)->group;
      
        return response()->json($group, 200);

      } catch (\Illuminate\Database\QueryException $ex) {

        dd($ex->getMessage());
      
      }
    }

    //
}
