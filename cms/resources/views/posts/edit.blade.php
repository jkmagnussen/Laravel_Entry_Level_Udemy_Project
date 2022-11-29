@extends('layouts.app')

@section('content')

<h1>Edit Post</h1>

<form method="post" action="/posts/{{$post->id}}">

    {{crsf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="title" placeholder="Enter title" value={{$post->title}}>

    <!-- csrf_field(): This function can be used to generate the hidden input field in the HTML form. Note: This function should be written inside double curly braces. -->

    {{csrf_field()}}

    <input type="submit" name="submit">

</form>



@endsection