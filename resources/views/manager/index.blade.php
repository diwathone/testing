@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-12">
            <a href="{{ route('manager.create') }}" class="btn btn-success">Create Manager</a>
            <br>
            <br>
            <table id="managers-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
            </table>

        
         </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(function () {
        $('#managers-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('manager.data') !!}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                }
            ]
        });
    });
</script>
@endpush