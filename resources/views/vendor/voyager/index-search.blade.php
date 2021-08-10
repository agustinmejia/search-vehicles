
<div class="col-md-12">
    <div class="panel panel-bordered">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>N&deg; de caso</th>
                            <th>Denunciante</th>
                            <th>Oficial asignado</th>
                            <th>Localidad</th>
                            <th>Clase</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($complaint as $item)
                            <tr>
                                <td>{{ str_pad($item->id, 6, "0", STR_PAD_LEFT) }}</td>
                                <td>{{ $item->person->name.' '.$item->person->first_name.' '.$item->person->last_name }}</td>
                                <td>{{ $item->assigned->name }}</td>
                                <td>{{ $item->city->name }} <br> <small>{{ $item->city->province->name.' - '.$item->city->province->state }}</small> </td>
                                <td>{{ $item->vehicle->vehicles_type->vehicles_class->name }}</td>
                                <td>
                                    <ul>
                                        <li><b>Tipo</b>: {{ $item->vehicle->brand->name.' '.$item->vehicle->vehicles_type->name }}</li>
                                        <li><b>Nro de placa</b>: {{ $item->vehicle->plate_number ?? 'S/N' }}</li>
                                        <li><b>Nro de chasis</b>: {{ $item->vehicle->chassis_code }}</li>
                                        <li><b>Nro de motor</b>: {{ $item->vehicle->engine_code }}</li>
                                    </ul>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <h3 class="text-muted text-center">No se encontraron resultados</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>