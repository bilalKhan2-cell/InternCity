{!! Form::open(['url' => $action, 'method' => $method]) !!}

@csrf

@php
    $userName = $user->name ?? '';
    $userEmail = $user->email ?? '';
    $userContactInfo = $user->contact_info ?? '';
    $userCNIC = $user->cnic ?? '';
    $userAddress = $user->address ?? '';
    $userPassword = $user->password ?? '';
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
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Email Address:') !!}
            {!! Form::email('email', $userEmail, ['class' => 'form-control']) !!}
            @error('email')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('Contact Info:') !!}
            {!! Form::text('contact_info', $userContactInfo, ['class' => 'form-control']) !!}
            @error('contact_info')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('CNIC:') !!}
            {!! Form::text('cnic', $userCNIC, ['class' => 'form-control']) !!}

            @error('cnic')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    @if ($form_type == 'save')
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('Password: ') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
                @error('password')
                    <span>
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('Confirm Password: ') !!}
                {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
            </div>
        </div>
    @endif

    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('Address: ') !!}
            {!! Form::text('address', $userAddress, ['class' => 'form-control']) !!}
            @error('address')
                <span>
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <div class="form-group">

            @if ($form_type == 'edit')
                {!! Form::submit('Update', ['class' => 'btn btn-primary btn-sm']) !!}
            @elseif($form_type == 'save')
                {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-success']) !!}
            @endif

            <a href="{{ route('user.index') }}" class="btn btn-sm btn-danger">Cancel</a>
        </div>
    </div>
</div>

{!! Form::close() !!}

@push('script')
    <script>
        $(document).ready(function() {
            $("span").addClass('text-danger small');
        });

        @if ($form_type == 'show')
            $("input").attr('disabled', 'disabled').attr('readonly', 'readonly');
        @endif
    </script>
@endpush
