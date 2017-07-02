@extends('layouts.app')
@section('content')

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
            <div class="element-wrapper"><h6 class="element-header">Quices</h6>
                <div class="element-box">

                    <div class="row">
                        @foreach($quiz as $quiz)
                        <div class="col-md-6" style="padding-bottom: 20px; padding-right: 5px;">
                            <div class="card">
                                <div class="card-header" align="center" style="background-color: #0275d8; color: white;">
                                    <h4 class="card-title">{{$quiz->titulo}}</h4>
                                </div>
                                <div class="card-block">

                                    <div class="form-group">

                                        <div class="col-md-12" align="center">
                                            <a href="#">
                                                <img src="{{asset('img/usuario/'.$quiz->imagen)}}" alt="Card image cap" width="80" class="rounded">
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-xs-center" align="center">
                                   <!-- <a href="#" class="btn btn-primary btn-sm float-xs-left"><i class="material-icons btn__icon--left">playlist_add_check</i> Completados <span class="tag text-primary bg-white btn__icon--right">0</span></a>-->
                                    <a  class="btn btn-primary btn-sm float-xs-left" href="quiz_leccion_editar/{{$quiz->id}}" class="btn btn-default btn-sm float-xs-right"><i class="material-icons btn__icon--left">edit</i> Asignar preguntas </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                            @endforeach

                    </div>


                </div>

            </div>

            <a href="{{url('quiz_leccion_crear')}}"><button type="button" class="floated-chat-btn2" style="margin-right: 130px!important; background-color: green" data-toggle="modal" data-target="#exampleModalLong">
                    Crear Quiz
                </button></a>


@stop