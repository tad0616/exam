@extends('layouts.app')
@section('content')
    <h1>編輯測驗</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @form(['url' => '/exam/'.$exam->id, 'class' => 'form-horizontal', 'labelWidth' => '2', 'fieldWidth' => '10', 'framework' => 'bootstrap4', 'method' => 'patch'])
        @text('title', $exam->title, ['placeholder' => '請輸入測驗標題', 'label' => '測驗標題'])
        @checkbox('enable', $exam->enable, true, ['placeholder' => '是否啟用', 'label' => '啟用此測驗'])
        @hidden('user_id', $exam->user_id)
        @submit('儲存', ['class' => 'btn btn-success'])
    @endform
@endsection
