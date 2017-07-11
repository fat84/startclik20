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
    <div class="element-wrapper"><h6 class="element-header">Perfil del estudiante</h6>
        <div class="element-box">

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Seguimiento del Estudiante: {{$estudiante->nombre}}</h4>
                    </div>
                    <div class="card-block">

                        <div class="form-group">
                            @foreach($cursos as $curso)
                            <div align="center" class="col-md-12">
                                <img align="center" src="{{asset('img/usuario/'.$curso->imagen)}}"
                                     style="width: 200px">
                            </div>
                            <div class="col-md-12" style="max-height: 600px;overflow: scroll">
                                <strong>Descripción:</strong> <span><?= $curso->descripcion; ?></span>
                            </div>

                             @endforeach

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card" align="center">
                        <img align="center" src="{{asset('img/usuario/'.$estudiante->avatar)}}"
                             style="width: 200px">
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datos del estudiante</h4>
                    </div>

                    <form class="form-horizontal card-block">
                        <div class="form-group row" align="center">
                            <label for="select" class="col-sm-12 col-form-label"><b>Nombre: </b></label>
                            <label for="select" class="col-sm-12 col-form-label">{{$estudiante->name}} {{$estudiante->apellidos}}</label>
                            <br>
                            <label for="select" class="col-sm-12 col-form-label"><b>Documento: </b></label>
                            <label for="select" class="col-sm-12 col-form-label">{{$estudiante->tipo_documento}}</label>
                            <br>
                            <label for="select" class="col-sm-12 col-form-label"><b>Codigo: </b></label>
                            <label for="select" class="col-sm-12 col-form-label">{{$estudiante->documento}}</label>
                            <br>
                            <label for="select" class="col-sm-12 col-form-label"><b>Correo: </b></label>
                            <label for="select" class="col-sm-12 col-form-label">{{$estudiante->email}}</label>
                            <br>
                            <label for="select" class="col-sm-12 col-form-label"><b>Teléfono: </b></label>
                            @if(empty($estudiante->telefono))
                            <label for="select" class="col-sm-12 col-form-label">N/A</label>
                                @else
                                <label for="select" class="col-sm-12 col-form-label">{{$estudiante->telefono}}</label>
                                @endif

                        </div>
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


    <a href="{{url('/dashboard')}}"><button type="button" class="floated-chat-btn2" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
        Volver
    </button></a>
@stop
