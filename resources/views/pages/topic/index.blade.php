{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@extends('web-layout.layout')
@section('title', 'topic')
@section('main-section')
    @csrf
    @include('pages.topic.index_pagination')
@endsection

<script>
    $(document).ready(function () {
        $(document).on('click', '.page-link', function (event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });
        function fetch_data(page) {
            var _token = $("input[name=_token]").val();
            $.ajax({
                url: "{{ route('pagination.fetch') }}",
                method: "POST",
                data: { _token: _token, page: page },
                success: function (data) {
                    $('#table_data').html(data);
                }
            });
        }
    });
</script> --}}