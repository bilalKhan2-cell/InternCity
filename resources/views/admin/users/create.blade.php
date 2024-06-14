@extends('layout.master')

@section('breadcrumbs')
    @include('components.breadcrumbs', [
        'heading' => 'Users',
        'pageName' => 'Users',
        'pageTitle' => 'Create User(s)',
    ])
@endsection

@section('content')
    @include('admin.users._form', [
        'action' => route('user.store'),
        'form_type' => 'save',
        'method' => 'POST',
        'user' => [],
    ])
@endsection
