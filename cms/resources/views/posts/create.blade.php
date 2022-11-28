@extends('layouts.app')

@section('content')

<form method="post" action="/posts">

    <input type="text" name="title" placeholder="Enter title">

    <!-- csrf_field(): This function can be used to generate the hidden input field in the HTML form. Note: This function should be written inside double curly braces. -->

    {{csrf_field()}}

    <input type="submit" name="submit">

</form>



@endsection