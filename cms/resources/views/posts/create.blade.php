@extends('layouts.app')

@section('content')

<h1>Create Post</h1>

<!-- <form method="post" action="/posts"> -->

{!! Form::open() !!}

<input type="text" name="title" placeholder="Enter title">

<!-- csrf_field(): This function can be used to generate the hidden input field in the HTML form. Note: This function should be written inside double curly braces. -->

{{csrf_field()}}

<input type="submit" name="submit">

</form>



@endsection