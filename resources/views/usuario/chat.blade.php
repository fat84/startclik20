<script>
    $( document ).ready(function() {
        var parametros = {
        };
        $(".chatUsuario").hide();

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
                    usuarios += '<li style="list-style-type: disc;color: greenyellow">' +
                                     '<a href="#" style="color: #0c0c0c" onclick="abrirChat(\''+b[i].id+'\')">'+b[i].name+'<br>'+b[i].apellidos+'('+b[i].rol+')</a>' +
                                '</li>';
                }

                $('#usuariosOnline').html(usuarios);
            }
        });
    });

    function abrirChat(idUsuario){
        $(".conectadosUsuarios").hide();
        $(".chatUsuario").show();

        var parametros = {
        };
        var ruta = '/chatUsuario';
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
                    usuarios += '<li style="list-style-type: disc;color: greenyellow">' +
                        '<a href="#" style="color: #0c0c0c" onclick="abrirChat(\''+b[i].id+'\')">'+b[i].name+'<br>'+b[i].apellidos+'('+b[i].rol+')</a>' +
                        '</li>';
                }

                $('#usuariosOnline').html(usuarios);
            }
        });

    }

</script>

<style>
    .floated-chat-btn3 {
        z-index: 9999;
        position: fixed;
        margin-right: 20px;
        bottom: 10px;
        right: 120px;
        background: #097CFF;
        box-shadow: 0 2px 20px 0 rgba(46, 130, 255, 0.75);
        border-radius: 75px;
        color: #fff;
        padding: 12px 20px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        vertical-align: middle;
        font-size: 1.08rem;
        cursor: pointer;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease; }
    .floated-chat-btn3 i {
        vertical-align: middle;
        display: inline-block;
        font-size: 24px; }
    .floated-chat-btn3 span {
        vertical-align: middle;
        display: inline-block;
        font-weight: 600; }
    .floated-chat-btn3 i + span {
        margin-left: 10px; }
    .floated-chat-btn3:hover {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
        background-color: #0064d5;
        box-shadow: 0 2px 30px 0 rgba(46, 130, 255, 0.8); }
</style>


<div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Chat</span></div>
<div class="floated-chat-w">
    <div class="floated-chat-i">
        <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
        <div class="chat-head">
            <div class="conectadosUsuarios">
                <p style="text-transform: uppercase;font-weight: bold">conectados</p>
                <ul id="usuariosOnline">

                </ul>
            </div>
            <div class="user-w with-status status-green chatUsuario">
                <div class="user-avatar-w">
                    <div class="user-avatar"><img alt="" src="{{asset('img/avatar1.jpg')}}"></div>
                </div>
                <div class="user-name"><h6 class="user-title">Juan Carlos</h6>
                    <div class="user-role">Soprte</div>
                </div>
            </div>
        </div>
        <div class="chat-messages chatUsuario">
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
        </div>
      <div class="chat-controls chatUsuario">
          <input class="message-input" placeholder="Escribir mensaje..." type="text">
           <!-- <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                            class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                            class="extra-tooltip">Insert Photo</span><i
                            class="os-icon os-icon-others-29"></i></a><a href="#"><span
                            class="extra-tooltip">Upload Video</span><i
                            class="os-icon os-icon-ui-51"></i></a></div>-->
        </div>
    </div>
</div>
