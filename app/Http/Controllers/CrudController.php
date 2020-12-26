<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Crud;


class CrudController extends Controller
{
    /**
     * Display a listing of the data.
     *
     * @param void
     * @return object
     */
    public function index()
    {
        $data = DB::select('select * from cruds');
        
        return view('index',compact('data'));
    }

    /**
     * Store new data into the database.
     *
     * @param  Request $request
     * @return object
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'crudbody' => 'required',
        ]);

        $crud = new Crud();
        $crud->body = $request->input('crudbody');
        $crud->save();
        
        return redirect('/');

    }

    /**
     * Displays the record being edited from the database.
     *
     * @param  int $id
     * @return object
     */
    public function edit($id)
    {
        $data = DB::select('select * from cruds where id = ?',[$id]);
        
        return view('edit',compact('data'));
    }

    /**
     * Update data from database.
     *
     * @param  Request $request
     * @param  int $id
     * @return object
     */
    public function update(Request $request, $id)
    {
        $data = $request->input('upcrud');
        DB::update('update cruds set body=? where id=?',[$data,$id]);
        
        return redirect('/'); 
    }

    /**
     * Deletes data from the database.
     *
     * @param  int $id
     * @return object
     */
    public function destroy($id)
    {
        DB::delete('delete from cruds where id=?',[$id]);
        
        return redirect('/');
    }
}
