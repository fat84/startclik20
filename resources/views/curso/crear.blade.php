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
    <div class="card">
        <div class="card-header">
           Crear nuevos cursos
        </div>
        <div class="card-block">
            <h4 class="card-title">Datos basicos</h4>
            <div class="card-text">

                       <form id="formu" name="formu" action="guardar_curso" method="post" class="form-horizontal" accept-charset="UTF-8" enctype="multipart/form-data">
                           {{ csrf_field() }}
                           <div class="form-group">
                               <label for="nombre"><b style="color:red;">* </b><b>Nombre del Curso</b></label>
                               <input required name="nombre" value="{{old('nombre')}}" type="text" class="form-control" placeholder="Digite el nombre del curso">
                               @if ($errors->has('nombre'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                               @endif
                           </div>

                           <div class="form-group ">
                               <label for="imagen"><b style="color:red;">* </b><b>Imagen</b></label>
                               <input type="file" required class="form-control" name="imagen" id="file" accept="image/*">
                               @if ($errors->has('imagen'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                               @endif
                           </div>

                           <div class="form-group">
                               <label for="categoria_id"><b style="color:red;">* </b><b>Categoria</b></label>

                               <select name="categoria_id" required class="custom-select form-control">
                                   <option selected disabled value="">Seleccione una categoria</option>
                                   @foreach($categorias as $cate)
                                       <option value="{{$cate->id}}">{{$cate->nombre}}</option>
                                   @endforeach
                               </select>

                           </div>

                           <div class="form-group">
                               <label for="empresa_id"><b style="color:red;">* </b><b>Empresa Asignada</b></label>

                               <select name="empresa_id" class="custom-select form-control" required>
                                   <option selected disabled value="">Seleccione una empresa</option>
                                   @foreach($empresas as $empre)
                                       <option value="{{$empre->id}}">{{$empre->razon_social}}</option>
                                   @endforeach
                               </select>

                           </div>


                           <div class="form-group">
                               <label for="descripcion"><b style="color:red;">* </b><b>Descripcion</b></label>
                               <textarea required name="descripcion" id="descripcion" rows="3"  style="resize: none;" class="form-control" placeholder="Digita un breve descripcion del curso">{{old('descripcion')}}</textarea>
                               @if ($errors->has('descripcion'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
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

                           <div class="form-group">
                               <label for="video_promo"><b>&nbsp;Video Promocional</b></label>
                               <input name="video_promo" type="file" class="form-control" id="file" accept="video/*">
                               <div class="form-group">
                                   <label><b style="color:red;">*</b><b>Precio</b></label>
                                   <input class="form-control" required type="number" placeholder="$" name="precio" value="{{old('precio')}}">
                                   @if ($errors->has('precio'))
                                       <span class="help-block">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                   @endif
                               </div>

                           </div>
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
