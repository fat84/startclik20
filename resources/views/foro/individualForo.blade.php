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
            $(document).ready(function () {
                swal(
                    'En hora buena!',
                    '{{Session::get('message')}}',
                    'success'
                )
            });
        </script>
    @endif

    <div class="element-wrapper">
        <h6 class="element-header" style="text-transform: uppercase;">{{$foro->titulo}}</h6>
        @foreach($foro_post as $post)
            <div class="element-box">
                <h6 class="element-header" style="text-transform: uppercase">{{$post->titulo}}
                    @if($post->user_id == Auth::user()->id)
                        <a style="margin-left: 100px" class="pull-right" onclick="alertEliminar{{$post->id}}()"> <span class="badge badge-danger">Eliminar</span></a>
                        <a class="pull-right" onclick="editarComentario('{{$post->id}}')"><span class="badge badge-success">Editar</span></a>
                        <form id="eliminar{{$post->id}}" method="post" action="{{url('eliminarPostForo')}}">{{ csrf_field() }}<input name="idPost" hidden value="{{$post->id}}"></form>
                        <script>
                            function alertEliminar{{$post->id}}() {
                                swal({
                                        title: "¿Esta seguro?",
                                        text: "No podras recuperar este comentario",
                                        type: "warning",
                                        showCancelButton: true,
                                        confirmButtonColor: "#DD6B55",
                                        confirmButtonText: "Si, Eliminar!",
                                        cancelButtonText: "No, Cancelar!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false
                                    },
                                    function(isConfirm){
                                        if (isConfirm) {
                                            swal("Eliminado!", "Comentario eliminada", "success");
                                            $('#eliminar{{$post->id}}').submit();
                                        } else {
                                            swal("Cancelada", "Ha sido cancelado :)", "error");
                                        }
                                    });
                            }
                        </script>
                    @endif
                </h6>
                <div>
                    <?= $post->post ?>
                </div>
            </div>

        @endforeach
    </div>


    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Agregar comentario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('guardarComentariForo')}}" method="post">
                    {{ csrf_field() }}
                <div class="modal-body">
                    <input hidden name="idForo" value="{{$foro->id}}">
                    <label for="titulo"><b style="color:red;">* </b><b>Titulo</b></label>
                    <input required id="titulo" name="titulo" class="form-control">
                    <div class="form-group">
                        <label for="contenido"><b style="color:red;">* </b><b>Contenido</b></label>
                        <textarea required name="contenido" id="contenido" rows="3" style="resize: none;" class="form-control" placeholder=""></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Enviar comentario</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Editar comentario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('actualizarComentariForo')}}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <input hidden name="idPost" id="idPost">
                        <label for="titulo"><b style="color:red;">* </b><b>Titulo</b></label>
                        <input required id="titulo2" name="titulo" class="form-control">
                        <div class="form-group">
                            <label for="contenido2"><b style="color:red;">* </b><b>Contenido</b></label>
                            <textarea required name="contenido" id="contenido2" rows="3" style="resize: none;" class="form-control" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar comentario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <button type="button" class="floated-chat-btn2" style="margin-right: 130px!important;" data-toggle="modal" data-target="#exampleModalLong">
        Agregar comentario
    </button>
    <script>
        $(document).ready(function() {
            $('#contenido').summernote({
                lang: 'es-ES',
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
            });
        });

        function editarComentario(id) {
            var parametros = {
                'idPost': id,
            };
            var ruta = '/editarPost';
            $.ajax({
                url: ruta,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                dataType: 'json',
                data: parametros,
                success: function (data) {
                    console.log(data);
                    $('#titulo2').val(data.respuesta.titulo);
                    $('#idPost').val(data.respuesta.id);
                    $('#exampleModalLong2').modal('show');
                   // $('#contenido2').val(data.respuesta.post);
                    $('#contenido2').summernote('code', data.respuesta.post,{
                        lang: 'es-ES',
                        height: 300,                 // set editor height
                        minHeight: null,             // set minimum height of editor
                        maxHeight: null,             // set maximum height of editor
                        focus: true                  // set focus to editable area after initializing summernote
                    });

                }
            });
        }


    </script>
@stop