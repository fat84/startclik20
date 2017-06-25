<script>
    $( document ).ready(function() {
        var parametros = {
        };

        var ruta = '/chatOnline';
        $.ajax({
            url: ruta,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            dataType: 'json',
            data: parametros,
            success: function (data) {
                const a = data.usuariosOnline;
                b = a;
                usuarios = "";
                for(var i = 0 in b){
                    usuarios += '<li>' +
                                     '<a onclick="abrirChat(\''+b[i].id+'\')">'+b[i].name+'</a>' +
                                '</li>';
                }

                $('#usuariosOnline').html(usuarios);
            }
        });
    });

    function abrirChat(idUsuario){
        alert(idUsuario);
    }
</script>


<div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Chat</span></div>
<div class="floated-chat-w">
    <div class="floated-chat-i">
        <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
        <div class="chat-head">
            <div>
                <p style="text-transform: uppercase;font-weight: bold">conectados</p>
                <ul id="usuariosOnline">

                </ul>
            </div>
          <!--  <div class="user-w with-status status-green">
                <div class="user-avatar-w">
                    <div class="user-avatar"><img alt="" src="{{asset('img/avatar1.jpg')}}"></div>
                </div>
                <div class="user-name"><h6 class="user-title">Juan Carlos</h6>
                    <div class="user-role">Soprte</div>
                </div>
            </div>-->
        </div>
       <!-- <div class="chat-messages">
            <div class="message">
                <div class="message-content">¿Hola, como puedo ayudarte?</div>
            </div>
            <div class="date-break">Mon 10:20am</div>
            <div class="message">
                <div class="message-content">Hola, mi nombre es Mike, voy a estar encantados de ayudarle
                </div>
            </div>
            <div class="message self">
                <div class="message-content">Hola, He intentado ordenar este curso y me sigue mostrando el código de error.
                </div>
            </div>
        </div>-->
      <!--  <div class="chat-controls"><input class="message-input"
                                          placeholder="Escribir mensaje..." type="text">
            <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                            class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                            class="extra-tooltip">Insert Photo</span><i
                            class="os-icon os-icon-others-29"></i></a><a href="#"><span
                            class="extra-tooltip">Upload Video</span><i
                            class="os-icon os-icon-ui-51"></i></a></div>
        </div>-->
    </div>
</div>