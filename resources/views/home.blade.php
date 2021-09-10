@extends('layouts.app')

@section('content')

<div id="main" data-title="Title Home 123">
</div>

@endsection

@section('inline_js')
    @parent
    <script>
        var containerTag = document.getElementById('main')
        var title = containerTag.getAttribute('data-title')
        render.home(
            document.getElementById('main'), 
            title
            )
    </script>
@endsection