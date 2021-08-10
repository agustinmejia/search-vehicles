@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', 'Añadir Denuncia')

@section('page_header')
    <h1 class="page-title">
        <i class="voyager-news"></i>
        Añadir Denuncia
    </h1>
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('complaints.store') }}" method="post">
                    @csrf
                    <div class="panel panel-bordered">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Persona Denunciante</label>
                                    <select name="person_id" class="form-control select2" required>
                                        <option value="">-- Selecciona a la persona denunciante --</option>
                                        @foreach (\App\Models\Person::where('deleted_at', NULL)->get() as $person)
                                        <option value="{{ $person->id }}">{{ $person->name }} {{ $person->first_name }} {{ $person->last_name }} - CI:{{ $person->dni }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Vehículo</label>
                                    <select name="vehicle_id" class="form-control select2" required>
                                        <option value="">-- Selecciona el vehículo --</option>
                                        @foreach (\App\Models\Vehicle::with('brand', 'vehicles_type')->where('deleted_at', NULL)->get() as $vehicle)
                                        <option value="{{ $vehicle->id }}">{{ $vehicle->brand->name }} {{ $vehicle->vehicles_type->name }}, {{ $vehicle->chassis_code }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Cuidad</label>
                                    <select name="city_id" class="form-control select2" required>
                                        <option value="">-- Selecciona la ciudad del hecho --</option>
                                        @foreach (\App\Models\City::with('province')->where('deleted_at', NULL)->get() as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}, {{ $city->province->name }} - {{ $city->province->state }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Oficial Asignado</label>
                                    <select name="assigned_id" class="form-control select2" required>
                                        <option value="">-- Selecciona al ofical asignado al caso --</option>
                                        @foreach (\App\Models\User::all() as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Tipo de Denuncia</label>
                                    <select name="type" class="form-control" required>
                                        <option value="Robo">Robo</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6" style="margin: 0px">
                                            <label>Fecha del Hecho</label>
                                            <input type="date" class="form-control" name="date" value="{{ date('Y-m-d') }}" required>
                                        </div>
                                        <div class="col-md-6" style="margin: 0px">
                                            <label>Hora del Hecho</label>
                                            <input type="time" class="form-control" name="time" value="{{ date('H:i') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Dirección del Hecho</label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Zona del Hecho</label>
                                    <input type="text" class="form-control" name="address_zone" required>
                                </div>
                                <div class="col-md-12">
                                    <label>Detalles</label>
                                    <textarea name="details" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label>Observaciones</label>
                                    <textarea name="description" class="form-control richTextBox"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            <button type="submit" class="btn btn-primary">Guardar <i class="voyager-check"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $(document).ready(function(){
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="description"]',
            }

            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@stop
