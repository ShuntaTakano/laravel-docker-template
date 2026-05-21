@extends('layouts.base')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">ToDo作成</div>
        <div class="card-body">
          <!-- POSTでstoreへ送信 -->
          <form method="POST" action="{{ route('todo.store') }}">
            <!-- CSRF対策（トークンを自動で埋め込む） -->
            @csrf
            <div class="form-group row">
              <label class="col-md-4 col-form-label text-md-right">ToDo入力</label>
              <div class="col-md-6">
                <!-- 入力値はname="content"で送信される -->
                <input type="text" class="form-control @if($errors->has('content')) border-danger @endif" name="content" value="">
                <!--has('content')はcontentにエラーある？かを判定-->
                @if($errors->has('content'))
                  <span class="text-danger">{{ $errors->first('content') }}</span>
                @endif
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">作成</button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection