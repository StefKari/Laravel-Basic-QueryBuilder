@extends('layouts.master')

@section('content')
      @foreach($data as $items)
      <div class="container my-5" style="width:40%;background:#599aff;">
        <form action="{{ url('/up/'. $items->id) }}" method="post">
          {{ method_field('PUT') }}
          {{ csrf_field() }}    
          <div class="input-group mb-3">
            <input value="{{ $items->body }}" type="text" class="form-control my-3" name="upcrud" placeholder="Add Something..." aria-label="Recipient's username" aria-describedby="button-addon2">
          </div>
            <div class="input-group-append">
              <button class="btn btn-success mt-3 " type="submit" id="button-addon2">Update</button>
            </div>
        </form>
      </div>
      @endforeach
@endsection
