@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">

<div class="content">
    <div class="title m-b-md">
        Pizza List
    </div>

    @foreach ($pizzaList as $pizza)
    <p> {{$pizza->id}} - {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}} </p>
     @endforeach


</div>
</div>
@endsection
