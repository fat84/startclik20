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
                            <div class="col-md-12" style="max-height: 600px;overflow: scroll">
                                <strong>Descripción:</strong> <span><?= $curso->descripcion; ?></span>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video align="center" src="{{asset('video/curso/'.$curso->video_promo)}}" style=""></video>
                    </div>
                    <div class="card-block" align="center">
                        <label><b>Video Promocional</b></label>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Datos Adicionales</h4>
                    </div>

                    <form class="form-horizontal card-block">
                        <div class="form-group row">
                            <label for="select" class="col-sm-6 col-form-label"><b>Categoria: </b></label>
                            <label for="select" class="col-sm-6 col-form-label">{{$curso->nombre}}</label>
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


    <div class="element-wrapper"><h6 class="element-header">Modulos</h6>
        <div class="element-box">

            <div class="row">

                @foreach($modulos as $modulo)



                    <div class="card col-md-6" style="border-radius: 15px !important;">
                        <div class="card-header bg-white text-xs-center">
                            <h4 class="card-title"><a
                                        href="{{url('perfil_modulo/'.$modulo->id)}}">{{$modulo->nombre}}</a>
                            </h4>
                        </div>
                        <br>
                        <a align="center" href="{{url('perfil_modulo/'.$modulo->id)}}">
                            <img src="{{asset('img/modulo/'.$modulo->imagen)}}" alt="Card image cap"
                                 style="width:50%;">
                        </a>
                        <div class="card-block">
                            <small class="text-muted">{{$curso->nombre}}</small>
                            <br>
                            @if(strlen($modulo->descripcion) > 50)
                                <?=substr($modulo->descripcion, 0, 1000) . "..."?>
                                @else
                                {{$modulo->descripcion}}
                            @endif
                            <span class="tag tag-primary"></span>
                        </div>

                    </div>





                @endforeach


            </div>

        </div>

    </div>
@stop
