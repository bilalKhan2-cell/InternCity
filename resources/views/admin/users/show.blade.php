@extends('layout.master')

@section('breadcrumbs')
    @include('components.breadcrumbs', [
        'heading' => 'Users',
        'pageName' => 'Users',
        'pageTitle' => 'View User Detail',
    ])
@endsection

@section('title', $user->name)

@section('content')
    @include('admin.users._form', [
        'action' => '',
        'form_type' => 'show',
        'method' => '',
        'user' => $user,
    ])
@endsection
