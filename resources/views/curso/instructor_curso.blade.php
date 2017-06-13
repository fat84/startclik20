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
    <div class="element-wrapper"><h6 class="element-header">Perfil de curso</h6>
        <div class="element-box">

        <div class="media">
            <div class="media-body">
                <h1 class="page-heading h2" style="text-transform: uppercase">
                    {{$curso->nombre}}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Información basica del Curso: {{$curso->nombre}}</h4>
                    </div>
                    <div class="card-block">

                        <div class="form-group">
                            <div align="center" class="col-md-12">
                                <img align="center" src="{{asset('img/usuario/'.$curso->imagen)}}"
                                     style="width: 200px">
                            </div>
                            <br>
                            <div class="col-md-12" style="max-height: 600px;overflow: scroll">
                                <strong>Descripción:</strong> <span><?= $curso->descripcion; ?></span>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" align="center">Instructores Asignados</h4>
                    </div>

                    <form class="form-horizontal card-block">

                        @if(count($instructores) > 0)
                        <div class="form-group row">
                            <?php
                            $i=0;
                            ?>
                            @foreach($instructores as $instructor)
                                <?php

                                    $i=$i+1;
                                ?>

                            <label for="select" class="col-sm-6 col-form-label"><b>{{$i}}. Nombre: </b></label>
                            <label for="select" class="col-sm-6 col-form-label">{{$instructor->name}}</label>
                                @endforeach
                        </div>

                        @else
                            <h6 align="center">No hay instructores asignados</h6>
                    @endif
                        <!--  <div class="form-group row">
                              <label for="duration" class="col-sm-6 col-form-label">Duration</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="No. of Days" value="10">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="start" class="col-sm-6 col-form-label">Start Date</label>
                              <div class="col-sm-6">
                                  <input class="datepicker form-control" type="text" value="01/28/2016"/>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="end" class="col-sm-6 col-form-label">End Date</label>
                              <div class="col-sm-6">
                                  <input class="datepicker form-control" type="text" value="01/28/2016"/>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="details">Completion Badge</label>
                              <div>
                                  <div data-toggle="buttons">
                                      <label class="btn btn-white btn-circle active">
                                          <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                          <i class="material-icons">person</i>
                                      </label>
                                      <label class="btn btn-white btn-circle">
                                          <input type="radio" name="options" id="option2" autocomplete="off">
                                          <i class="material-icons">star</i>
                                      </label>
                                      <label class="btn btn-white btn-circle">
                                          <input type="radio" name="options" id="option3" autocomplete="off">
                                          <i class="material-icons">shop</i>
                                      </label>
                                      <label class="btn btn-white btn-circle">
                                          <input type="radio" name="options" id="option3" autocomplete="off">
                                          <i class="material-icons">monetization_on</i>
                                      </label>
                                      <label class="btn btn-white btn-circle">
                                          <input type="radio" name="options" id="option3" autocomplete="off">
                                          <i class="material-icons">enhanced_encryption</i>
                                      </label>
                                  </div>
                              </div>
                          </div>-->
                    </form>
                </div>

            </div>
        </div>


    </div>

    </div>


    <div class="element-wrapper"><h6 class="element-header">Asignar Instructores</h6>
        @if(count($disponibles) > 0)
        <div class="element-box">
            <h5>Seleccione los instructores que desea asignar al curso</h5>
            <br>
            <div class="row">
                {!! Form::open(array('route' => 'instructor.guardado', 'class' => 'form-horizontal form-bordered form-striped', 'method' => 'post')) !!}
                @foreach($disponibles as $value)
                    <div class="col-md-1 col-lg-1 hidden-xs col-sm-1"> </div>
                    <div class="col-md-5 col-lg-5 col-xs-12 col-sm-5">
                        <div class="form-check">
                            <label class="form-check-label" for="checkbox-{{$value->id}}">
                                <input class="form-check-input" type="checkbox" id="checkbox-{{$value->id}}" value="{{$value->id}}" name="emple[]">
                                <b>&nbsp;&nbsp;{{$value->name}}</b></label>
                        </div>
                    </div>

                @endforeach

                    <input hidden id="curso_id" name="curso_id" value="{{$curso->id}}"></<input/>

                    <br>
                    <a  id="tour-10" style="border-radius: 7%;" class="btn btn-warning btn-push" style="border-radius: 7%;"  data-toggle="modal" data-target=".bs-example-modal-sm">
                        <span class="fa fa-floppy-o"></span> <b>Asignar</b>
                    </a>
            </div>
            <a href="{{url('perfil_curso/'.$curso->id)}}"><button type="button" class="floated-chat-btn2" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
                    Volver
                </button></a>
        </div>

    </div>
    <div id= "crear" class="modal modal-teal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><strong>Mensaje de Confirmación</strong></h4>
                </div>
                <div class="modal-body">
                    <p>¿Desea Guardar el Horario de Trabajo?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-teal"  type="submit" ><strong>Si</strong></button>
                    <a class="btn btn-default" data-dismiss="modal"><strong>No</strong></a>


                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->

        {!! Form::close() !!}

        @else
            <h5 align="center">Ya se han asignado todos los Instructores a este Curso</h5>

            <a href="{{url('perfil_curso/'.$curso->id)}}"><button type="button" class="floated-chat-btn2" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
                    Volver
                </button></a>
        @endif

@stop


