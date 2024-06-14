@php
    $tableClass = "table table-hover table-striped table-bordered"
@endphp

<div class="table-responsive">
    <table id="{{ $tableId }}" class="{{ $tableClass }}">
        <thead>
            <tr>
                @foreach ($headings as $heading)
                    <th>{{ $heading }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
