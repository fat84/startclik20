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
    <h1 class="page-heading h2">Lección: {{$quiz->leccion->titulo}}</h1>
    <div class="card">
        <div class="card-block">
            <form action="{{url('quiz_leccion_actualizar/'.$quiz->id)}}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="course_title" class="col-sm-3 col-form-label">Quiz Titulo:</label>
                    <div class="col-sm-9 col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2">#</span>
                            <input required type="text" name="titulo" class="form-control" placeholder="Title" aria-describedby="sizing-addon2" value="{{$quiz->titulo}}">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course_title" class="col-sm-3 col-form-label">Materia:</label>
                    <div class="col-sm-9 col-md-4">
                        <select class="custom-select form-control" name="leccion">
                            <option selected value="{{$quiz->leccion->id}}">{{$quiz->leccion->titulo}}</option>
                            @foreach($lecciones as $leccione)
                                <option value="{{$leccione->id}}">{{$leccione->titulo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="course_title" class="col-sm-3 col-form-label">Quiz Imagen:</label>
                    <div class="col-sm-9 col-md-4">
                        <p><img src="{{asset('img/usuario/'.$quiz->imagen)}}" alt="" width="150" class="rounded"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course_title" class="col-sm-3 col-form-label">Nueva imagen:</label>
                    <div class="col-sm-9 col-md-4">
                    <input type="file" placeholder="Cambiar imagen" class="form-control" name="imagen">
                    </div>
                </div>
                <div class="form-group">
                    <label for="course_title" class="col-sm-3 col-form-label">Score:</label>
                    <div class="col-sm-9 col-md-4">
                        <input type="number" required placeholder="Score del curso" value="{{$quiz->score}}" class="form-control" name="score">
                    </div>
                </div>
                <button type="submit" class=" btn btn-success">Actualizar quiz</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Pregutas</h4>
        </div>
        <div class="card-header bg-white">
            <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-success">Agregar Preguntas <i class="material-icons">add</i></a>
        </div>
        <div class="nestable" id="nestable">
            <ul class="list-group list-group-fit nestable-list-plain mb-0">
                <li class="list-group-item nestable-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                        </div>
                        <div class="media-body media-middle">
                            Manejo de Armas
                        </div>
                        <div class="media-right text-xs-right">
                            <div style="width:100px">
                                <a href="#" data-toggle="modal" data-target="#editQuiz"  class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item nestable-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                        </div>
                        <div class="media-body media-middle">
                            The MVC architectural pattern
                        </div>
                        <div class="media-right text-xs-right">
                            <div style="width:100px">
                                <a href="#" data-toggle="modal" data-target="#editQuiz"  class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item nestable-item">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                        </div>
                        <div class="media-body media-middle">
                            Database Models
                        </div>
                        <div class="media-right text-xs-right">
                            <div style="width:100px">
                                <a href="#" data-toggle="modal" data-target="#editQuiz"  class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item nestable-item" data-id="4">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                        </div>
                        <div class="media-body media-middle">
                            Database Access
                        </div>
                        <div class="media-right text-xs-right">
                            <div style="width:100px">
                                <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item nestable-item" data-id="5">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                        </div>
                        <div class="media-body media-middle">
                            Eloquent Basics
                        </div>
                        <div class="media-right text-xs-right">
                            <div style="width:100px">
                                <a href="#" data-toggle="modal" data-target="#editQuiz"  class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item nestable-item" data-id="6">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                        </div>
                        <div class="media-body media-middle">
                            Take Quiz
                        </div>
                        <div class="media-right text-xs-right">
                            <div style="width:100px">
                                <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>





    <div class="modal fade" id="editQuiz">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title">Add/Edit Question</h5>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Title:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="Database Access">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Type:</label>
                            <div class="col-md-4">
                                <select class="custom-control custom-select form-control">

                                    <option value="1">Input</option>
                                    <option value="2">Textarea</option>
                                    <option value="3">Checkbox</option>
                                    <option value="3">Radio</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Answers:</label>
                            <div class="col-md-9">
                                <a href="#" class="btn btn-default"><i class="material-icons">add</i> Add Answer</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Question Score:</label>
                            <div class="col-md-4">
                                <input id="touch-spin-2" data-toggle="touch-spin" data-min="0" data-max="100" data-step="5" type="text" value="50" name="demo2" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







@stop