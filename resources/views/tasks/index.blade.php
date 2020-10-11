@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel panel-=heading">フォルダ</div>
          <div class="panel-body">
            <a href="/" class="btn btn-default btn-block">
              フォルダを追加する
            </a>
          </div>
          <div class="list group">
            @foreach($folders as $folder)
              <a 
                  href="{{ route('tasks.index', ['id' => $folder->id]) }}" 
                  class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}"
              >
                {{ $folder->title }}
              </a>
            @endforeach
          </div>
        </nav>
      </div>
    <div class="column col-md-8">
        <!-- タスクがここに表示 -->
    </div>
  </div>
@endsection