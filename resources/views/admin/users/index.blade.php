@extends('layout.master')

@section('title', 'Users')

@section('breadcrumbs')
    @include('components.breadcrumbs', [
        'heading' => 'Users',
        'pageName' => 'Users',
        'pageTitle' => 'Registered Users',
    ])
@endsection

@php
    $tableID = 'tblUsers';
    $tableHeadings = ['User ID', 'Name', 'Email', 'Contact Info', 'CNIC'];
@endphp

@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary float-right">Register User</a>
    <br /><br />
    @include('components.data-grid', ['headings' => $tableHeadings, 'tableId' => 'tblUsers'])
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $("#tblUsers").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id',
                        render: function(data) {
                            return "USER-" + data
                        }
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'contact_info',
                        name: "contact_info"
                    },
                    {
                        data: 'cnic',
                        name: 'cnic'
                    }
                ]
            });
        });
    </script>
@endpush
