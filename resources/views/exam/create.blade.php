@extends('layouts.app')
@section('content')
    <h1>新增測驗</h1>    
    @form(['url' => '/exam', 'class' => 'form-horizontal', 'labelWidth' => '2', 'fieldWidth' => '10', 'framework' => 'bootstrap4'])
        @text('title', '', ['placeholder' => '請輸入測驗標題', 'label' => '測驗標題'])
        @checkbox('enable', '1', true, ['placeholder' => '是否啟用', 'label' => '啟用此測驗'])
        @hidden('user_id', $user_id)
        @submit('儲存', ['class' => 'btn btn-success'])
    @endform
@endsection
