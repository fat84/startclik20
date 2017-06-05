@extends('layouts.app')
@section('content')

    @if($message=Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    @if($message=Session::has('message'))
        <script>
            $( document ).ready(function() {
                swal(
                    'En hora buena!',
                    '{{Session::get('message')}}',
                    'success'
                )});
        </script>
    @endif


    <div class="element-wrapper">
        <h6 class="element-header">Foros disponibles </h6>
        <div class="element-box">

            <div class="list-group">
                @foreach ($foro as $foro)
                    <a href="{{url('foro/'.$foro->slug)}}" class="list-group-item list-group-item-action">{{$foro->titulo}}</a>
                @endforeach
            </div>
        </div>
    </div>


@stop