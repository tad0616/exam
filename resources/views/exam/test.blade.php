@extends('layouts.app')
@section('content')
    <h1 class="text-center">{{$test->exam->title}}</h1>
    <h3 class="row">
        <div class="col-sm-4">時間：<u>{{$test->created_at->format("Y年m月d日 H:i:s")}}</u></div>
        <div class="col-sm-4 text-center">姓名：<u>{{$test->user->name}}</u></div>
        <div class="col-sm-4 text-right">得分：<u>{{$test->score}}</u></div>        
    </h3>
    <hr>

    <dl>
        @forelse ($content as $key => $data)
            <dt>
                <h3>
                @if($data['ans']==$data['topic']->ans)
                <img src="{{asset('yes.png')}}" alt="yes" title="正確答案為 {{$data['topic']->ans}}">
                @else
                <img src="{{asset('no.png')}}" alt="no" title="正確答案為 {{$data['topic']->ans}}">
                @endif

                （{{$data['ans']}}）
                &#{!!$key + 9352!!}; {{$data['topic']->topic}}
                </h3>
            </dt>
            
            <dd>
                <label class="mx-2">
                    <span class="opt">&#10102;</span> {{$data['topic']->opt1}}
                </label>
                <label class="mx-2">
                    <span class="opt">&#10103;</span> {{$data['topic']->opt2}}
                </label>
                <label class="mx-2">
                    <span class="opt">&#10104;</span> {{$data['topic']->opt3}}
                </label>
                <label class="mx-2">
                    <span class="opt">&#10105;</span> {{$data['topic']->opt4}}
                </label>
            </dd>
        @empty
            <div class="alert alert-danger">尚無任何題目</div>
        @endforelse
    </dl>

@endsection
