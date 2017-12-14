@extends('layouts.app')
@section('content')
    <h1>測驗一覽</h1>
    <ul class="list-group">
        @forelse ($exams as $exam)
            <li class="list-group-item">
                {{$exam->created_at->format("Y年m月d日")}} -
                <a href="exam/{{$exam->id}}">
                {{$exam->title}}
                </a>
            </li>
        @empty 
            <div class="alert alert-danger">尚無任何測驗</div>
        @endforelse
    </ul>
    <div class="my-3">
        {!! $exams->links("pagination::bootstrap-4") !!}
    </div>
@endsection

