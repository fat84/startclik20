<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.page');
});

Route::get('/dashboard', function () {
    if(Auth::check() && Auth::user()->rol == 'usuario'){
        return redirect()->action('EstudianteController@index');
    }elseif (Auth::check() && Auth::user()->rol == 'instructor'){
        return redirect()->action('InstructorController@index');
    }elseif (Auth::check() && Auth::user()->rol == 'administrador'){
        return view('administrador.index');
    }elseif (Auth::check() && Auth::user()->rol == 'empresa'){
        return redirect()->action('EmpresaController@index');
    }
    else{
        return view('auth.login');
    }
});


Auth::routes();

//vista de Cursos empresa
Route::get('inscritos/{id}/','EmpresaController@inscritos_curso');



//vistas de usuario
Route::get('cursos/{nombre}/{id}','CursoController@perfilCursoUsuario');


//ciudad
Route::get('/home/{departamento_id}', ['uses' => 'HomeController@buscar_ciudades', 'as' => 'load.cities']);

//EDITAR DATOS CADA USUARIO
Route::get('miperfil','UsuarioController@index');
Route::post('ActualizarPerfil/{id}','UsuarioController@update');
Route::get('seguridad','UsuarioController@ActualizarPass');
Route::post('actualizarPass','UsuarioController@pass');

//Perfil Estudiante
Route::get('perfil_estudiante/{id}','EstudianteController@perfil');

//Curso
Route::get('curso','CursoController@index');
Route::get('new_curso','CursoController@newcurso');

//Administrador
//crear instructores
Route::get('instructores','AdministradorController@instructor');
Route::get('empresas','AdministradorController@empresas');
Route::get('usuarios','AdministradorController@usuario');
Route::resource('administrador','AdministradorController');


//Instructor
Route::resource('instructor','InstructorController');

//empresas
Route::resource('empresa','EmpresaController');
//USUARIO
Route::resource('usuario','EstudianteController');
Route::get('miscursos','CursoController@miscursos');

//Categorias
Route::resource('categorias','CategoriaController');
Auth::routes();

Route::get('/home', 'HomeController@index');


//Curso
Route::get('curso','CursoController@index');
Route::get('perfil_curso/{id}','CursoController@perfil');
Route::get('new_curso','CursoController@newcurso');
Route::post('guardar_curso','CursoController@store');
Route::get('curso/{id}/editar','CursoController@edit');
Route::post('editando_curso/{id}','CursoController@update');
Route::get('eliminar_curso/{id}','CursoController@destroy');
Route::get('habilitar_curso/{id}','CursoController@habilitar');

Route::get('instructor_curso/{id}','CursoController@asignar');
Route::post('instructor/guardado', ['uses' => 'CursoController@guardado', 'as' => 'instructor.guardado']);

//Material de apoyo, se asocia con el curso
Route::get('subirmaterialdeapoyo_curso','CursoController@materialApoyoCrear');
Route::post('guardar_materialApoyo_curso','CursoController@guardarmaterial');
Route::get('material_curso/{id}/editar','CursoController@editarmaterial');
Route::post('editando_material_curso/{id}','CursoController@updatematerial');
Route::get('eliminar_material_curso/{id}','CursoController@destroymaterial');

//Modulo
Route::get('modulo','ModuloController@index');
Route::get('new_modulo','ModuloController@newmodulo');
Route::get('perfil_modulo/{id}','ModuloController@perfil');
Route::post('guardar_modulo','ModuloController@store');
Route::get('modulo/{id}/editar','ModuloController@edit');
Route::post('editando_modulo/{id}','ModuloController@update');
Route::get('eliminar_modulo/{id}','ModuloController@destroy');

//Material de apoyo, se asocia con el modulo
Route::get('subirmaterialdeapoyo_modulo','ModuloController@materialApoyoCrear');
Route::post('guardar_materialApoyo_modulo','ModuloController@guardarmaterial');
Route::get('material_modulo/{id}/editar','ModuloController@editarmaterial');
Route::post('editando_material_modulo/{id}','ModuloController@updatematerial');
Route::get('eliminar_material_modulo/{id}','ModuloController@destroymaterial');

//Materias
Route::get('materia','MateriaController@index');
Route::get('new_materia','MateriaController@newmateria');
Route::post('guardar_materia','MateriaController@store');
Route::get('materia/{id}/editar','MateriaController@edit');
Route::post('editando_materia/{id}','MateriaController@update');
Route::get('eliminar_materia/{id}','MateriaController@destroy');

//Material de apoyo, se asocia con la materias
Route::get('subirmaterialdeapoyo','MateriaController@materialApoyoCrear');
Route::post('guardar_materialApoyo','MateriaController@guardarmaterial');
Route::get('material/{id}/editar','MateriaController@editarmaterial');
Route::post('editando_material/{id}','MateriaController@updatematerial');
Route::get('eliminar_material/{id}','MateriaController@destroymaterila');

//Lecciones
Route::get('leccion','LeccionController@index');
Route::get('new_leccion','LeccionController@newleccion');
Route::post('guardar_leccion','LeccionController@store');
Route::post('finalizar_leccion','LeccionController@finalizar');
Route::get('leccion/{id}/editar','LeccionController@edit');
Route::post('editando_leccion/{id}','LeccionController@update');
Route::get('eliminar_leccion/{id}','LeccionController@destroy');
Route::get('perfil_leccion/{id}','LeccionController@perfil');

//Material de apoyo, se asocia con la leccion
Route::get('subirmaterialdeapoyo_leccion','LeccionController@materialApoyoCrear');
Route::post('guardar_materialApoyo_lecciono','LeccionController@guardarmaterial');
Route::get('material_leccion/{id}/editar','LeccionController@editarmaterial');
Route::post('editando_material_leccion/{id}','LeccionController@updatematerial');
Route::get('eliminar_material_leccion/{id}','LeccionController@destroymaterial');


//quiz
/*
Route::get('nuevoquiz','QuizController@create');
Route::get('quiz','QuizController@indexQuizLeccion');
Route::get('quizEdit/{id}','QuizController@edit');
Route::post('crearQuiz','QuizController@store');
*/

/*
 * Quiz leccion
 */

Route::get('quiz_leccion','QuizController@indexQuizLeccion');
Route::get('quiz_leccion_crear','QuizController@createQuizLeccion');
Route::post('quiz_leccion_guardar','QuizController@storeQuizLeccion');
Route::get('quiz_leccion_editar/{id}','QuizController@editQuizLeccion');
Route::get('perfil_quiz/{id}','QuizController@perfil');
Route::get('verificar_quiz/{id}/{user}','QuizController@comparativo');
Route::post('quiz_leccion_actualizar/{id}','QuizController@updateQuizLeccion');

//pregunta leccion
Route::post('quiz_preguta_crear/{id}','QuizController@guardarPregunta');
Route::post('quiz_pregunta_actualizar_leccion/{id}','QuizController@quizpreguntaleccionactualizar');
//Route::post('quiz_preguta_informaion','QuizController@quiz_preguta_informaion');
Route::get('eliminarPreguntaLeccion/{id}','QuizController@eliminarPreguntaLeccion');

//compra paypal
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));

Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

//CARRITO DE COMPRAS
Route::post('addcarrito','CarritoController@store');
Route::get('carrito','CarritoController@index');
Route::resource('cart','CarritoController');
//Route::get('payment/status','CarritoController@compras');

//Foros
Route::get('foros','ForoController@index');
Route::get('foro/{slug}','ForoController@foroIndividual');
Route::post('guardarComentariForo','ForoController@guardarComentariForo');
Route::post('actualizarComentariForo','ForoController@actualizarComentariForo');
Route::post('editarPost','ForoController@editarPost');
Route::post('eliminarPostForo','ForoController@eliminarPostForo');
//Route::resource('foritos','ForoController');

//obsequi de curso
Route::post('obsequiarCursoUsuario','EstudianteController@obsequioCurso');
Route::post('chatOnline','ChatController@index');
Route::post('chatUsuario','ChatController@create');

Route::post('responder_quiz','QuizController@respuesta_quiz');