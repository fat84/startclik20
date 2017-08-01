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
    <div class="element-wrapper"><h6 class="element-header">Creación de Certificados</h6>
        <div class="element-box">
            <h1 class="page-heading h2">Certificados</h1>
            <div class="row">
                <div class="col-md-12">

                    @if($message=Session::has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            {{Session::get('message')}}
                        </div>
                    @endif

                    <a href="{{url('CrearCertificados')}}"  class="btn btn-primary">Crear nuevo certificado</a>

                    <br>
                    <!-- Lessons -->
                    <div>
                        <br>
                        <div class="table-responsive">
                            <table id="dataTable2" class="table table-striped table-lightfont" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Curso</th>
                                    <th>Imagen</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Curso</th>
                                    <th>Imagen</th>
                                    <th>Opciones</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($certificados as $certificado)
                                    <tr>
                                        <td>{{$certificado->cursos->nombre}}</td>
                                        <td><img style="width: 150px" src="{{asset('img/usuario/'.$certificado->firma)}}"></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="editar_certificado/{{$certificado->id}}">Editar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>



                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>


        </div>
    </div>


@stop
