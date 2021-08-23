<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use DB;

class Cruds extends Controller
{
    /**
     * Display a listing of the data.
     *
     * @param void
     * @return object
     */
    public function index()
    {

        $data = Crud::all();

        return view('index', compact('data'));
    }

    /**
     * Store new data into the database.
     *
     * @param  Request $request
     * @return object
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'crudbody' => 'required',
        ]);

        $data = new Crud();
        $data->body = $request->input('crudbody');
        $data->save();

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
        $field = [
            'id',
            'body',
        ];

        $data = Crud::select($field)
            ->where('id', '=', $id)
            ->get()
        ;

        return view('edit', compact('data'));
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
        $body = $request->input('upcrud');

        $arrToUpdate = [
            'id'   => $id,
            'body' => $body
        ];

        $data = Crud::where('id', '=', $id)
            ->update($arrToUpdate)
        ;

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
        $data = Crud::find($id)
            ->delete('id', $id)
        ;

        return redirect('/');
    }
}
