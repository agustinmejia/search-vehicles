@extends('voyager::master')

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <h2>Busqueda de vehículos</h2>
                        </div>
                        <div class="col-md-4" style="padding: 0px">
                            <form id="form-search" action="{{ url('admin/search') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control input-lg" placeholder="Número de Placa, Chasis o Motor" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-lg" style="margin: 0px; height: 46px; width: 50px" type="submit"><i class="voyager-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="div-results"></div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function(){
            $('#form-search').on('submit', function(e){
                e.preventDefault();
                $.post($('#form-search').attr('action'), $('#form-search').serialize(), function(res){
                    $('#div-results').html(res);
                });
            });
        });
    </script>
@stop
