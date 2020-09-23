<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Crud;
use DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the data.
     *
     * @param void
     * @return Response
     */
    public function index()
    {
        $data = DB::select('select * from cruds');
        return view('index',compact('data')); // index je stranica
    }

    /**
     * Store new data into the database.
     *
     * @param  Request
     * @return Response
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
     * @param  int
     * @return array
     */
    public function edit($id)
    {
        $data = DB::select('select * from cruds where id = ?',[$id]);
        return view('edit',compact('data'));
    }

    /**
     * Update data from database.
     *
     * @param  Request
     * @param  int
     * @return Response
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
     * @param  int
     * @return Response
     */
    public function destroy($id)
    {
        DB::delete('delete from cruds where id=?',[$id]);
        return redirect('/');
    }
}
