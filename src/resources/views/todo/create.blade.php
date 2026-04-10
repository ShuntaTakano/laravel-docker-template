@extends('layouts.base')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ToDo作成</div>
        <div class="card-body">
          <form method="" action="">
            <div class="form-group row">
              <label class="col-md-4 col-form-label text-md-right">ToDo入力</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="content">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">作成</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection