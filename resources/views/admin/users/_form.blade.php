{!! Form::open(['route' => $action, 'method' => $method]) !!}

@csrf

@php
    $userName = $user->name ?? '';
    $userEmail = $user->email ?? '';
    $userContactInfo = $user->contact_info ?? '';
    $userCNIC = $user->cnic ?? '';
    $userAddress = $user->address ?? '';
@endphp

@if ($form_type == 'edit')
    @method('PUT')
@endif

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('User Name:') !!}
            {!! Form::text('name', $userName, ['class' => 'form-control']) !!}
            @error('name')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Email Address:') !!}
            {!! Form::email('email', $userEmail, ['class' => 'form-control']) !!}
            @error('email')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Contact Info:') !!}
            {!! Form::text('contact_info', $userContactInfo, ['class' => 'form-control']) !!}
            @error('contact_info')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Contact Info:') !!}
            {!! Form::text('cnic', $userCNIC, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Address: ') !!}
            {!! Form::text('address', $userAddress, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="form-group">

            @if ($form_type == 'edit')
                {!! Form::submit('Update', ['class' => 'btn btn-primary btn-sm']) !!}
            @else
                {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-success']) !!}
            @endif

            <a href="{{ route('users.index') }}" class="btn btn-sm btn-danger">Cancel</a>
        </div>
    </div>
</div>

{!! Form::close() !!}
