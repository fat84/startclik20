@extends('layouts.app')
@section('content')
                @if($message=Session::has('message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        {{Session::get('message')}}
                    </div>
                @endif
                <div class="content-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper"><h6 class="element-header">BIENVENIDO</h6>
                                <div class="element-box">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@stop