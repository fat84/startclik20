@extends('layouts.app')
@section('title','Certificados')
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

    <div class="card">
        <div class="card-header">
            Crear certificado
        </div>
        <div class="card-block">
            <h4 class="card-title">Datos basicos</h4>
            <div class="card-text">

                <form id="formu" name="formu" action="guardar_certificado" method="post" class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group ">
                        <label for="imagen"><b style="color:red;">* </b><b>Imagen de la firma</b></label>
                        <input type="file" required class="form-control" name="imagen" id="file" accept="image/*">
                        @if ($errors->has('imagen'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="empresa_id"><b style="color:red;">* </b><b>Curso</b></label>

                        <select name="curso" class="custom-select form-control" required>
                            <option selected disabled value="">Seleccione un curso</option>
                            @foreach($cursos as $curso)
                                <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                            @endforeach
                        </select>

                    </div>


                    <div class="form-group">
                        <label for="informacion"><b style="color:red;">* </b><b>Información</b></label>
                        <textarea required name="informacion" id="descripcion" rows="3"  style="resize: none;" class="form-control" placeholder="Digita informacion adicional">{{old('informacion')}}</textarea>
                        @if ($errors->has('informacion'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('informacion') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('#descripcion').summernote({
                                lang: 'es-ES',
                                height: 300,                 // set editor height
                                minHeight: null,             // set minimum height of editor
                                maxHeight: null,             // set maximum height of editor
                                focus: true                  // set focus to editable area after initializing summernote
                            });
                        });
                    </script>

                    <br>
                    <div class="col-sm-12">
                        <div class="media-right media-middle col-sm-6">
                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                    <!-- <div class="media-right media-middle col-sm-6">
                                   <a class="btn btn-success" type="submit" href="{{url('curso')}}">Volver</a>
                               </div>-->
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop