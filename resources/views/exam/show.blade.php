@extends('layouts.app') 
@section('content')
    <h1 class="text-center">{{$exam->title}}</h1>

    <div class="text-center">
        發布於 {{$exam->created_at->format("Y年m月d日 H:i:s")}} / 最後更新： {{$exam->updated_at->format("Y年m月d日 H:i:s")}}
    </div>
    <hr>
    @role('教師')
        @form(['url' => '/topic', 'class' => 'form-horizontal', 'framework' => 'bootstrap4'])
            @textarea('topic', '', ['placeholder' => '請輸入題目內容', 'label' => '題目內容', 'rows' => 3])
            @text('opt1', '', ['placeholder' => '輸入選項1', 'label' => '選項1'])
            @text('opt2', '', ['placeholder' => '輸入選項2', 'label' => '選項2'])
            @text('opt3', '', ['placeholder' => '輸入選項3', 'label' => '選項3'])
            @text('opt4', '', ['placeholder' => '輸入選項4', 'label' => '選項4'])
            @select ('ans', [1=>1, 2=>2, 3=>3, 4=>4], null, ['placeholder' => '請設定正確解答', 'label' => '正確解答'])
            @hidden('exam_id', $exam->id)
            @submit('儲存', ['class' => 'btn btn-success']) 
        @endform
        <hr>
    @endrole

    <div class="text-center">
        <a href="{!!route('exam.index')!!}" class="btn btn-info">回首頁</a>
    </div>
@endsection