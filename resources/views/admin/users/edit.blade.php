@extends('layout.master')

@section('breadcrumbs')
    @include('components.breadcrumbs', [
        'heading' => 'Users',
        'pageName' => 'Users',
        'pageTitle' => 'Edit User Detail',
    ])
@endsection

@section('title', 'Update User')

@section('content')
    @include('admin.users._form', [
        'action' => route('user.update', $user->id),
        'form_type' => 'edit',
        'method' => 'POST',
        'user' => $user,
    ])
@endsection
