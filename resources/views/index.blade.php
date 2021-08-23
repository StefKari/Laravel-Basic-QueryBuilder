@extends('layouts.master')

@section('content')
    <div class="container my-5" style="width:50%;background:#599aff;">
        <form action="{{url('/done')}}" method="post">
                {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="text" class="form-control my-3" name="crudbody" placeholder="Add Something..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success my-3" type="submit" id="button-addon2">Save</button>
            </div>
        </form>
        <table style="text-align:center;" class="table">
            <thead>
            <tr>
                <th>Text</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->body }}</td>
                    <td>
                    <form action="{{ url('/del/'. $item->id) }}" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <a href="{{ url('/edit/'. $item->id) }}" class="btn btn-warning">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
