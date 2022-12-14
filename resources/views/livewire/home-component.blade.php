<div>
    @if($ae_participante == 0)
        <center>
            <h4 style="color: #007A9B;">{{ __('Listado de Participantes') }}</h4>
        </center>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="color: #007A9B;">{{ __('#') }}</th>
                        <th scope="col" style="color: #007A9B;">{{ __('Referido') }}</th>
                        <th scope="col" style="color: #007A9B;">{{ __('Nombre') }}</th>
                        <th scope="col" style="color: #007A9B;">{{ __('# Cédula') }}</th>
                        <th scope="col" style="color: #007A9B;">{{ __('Telefono') }}</th>
                        <th scope="col" style="color: #007A9B;">{{ __('Email') }}</th>
                        <th scope="col" style="color: #007A9B;">{{ __('Ciudad') }}</th>
                        <th scope="col" style="color: #007A9B;">{{ __('Comprobante') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vl_participantesList as $itm)
                        <tr  style="color: #090329;" >
                            <th scope="row">{{ $itm->id}}</th>
                                @if($itm->statusReferido == 2)
                                    <td class="text-center" style="color: #000000;">{{ __('NO')}}</td>
                                @else
                                    <td class="text-center" style="color: #90cb19;" >
                                        <div class="row">
                                            <div class="col-sm-12" style="color: #90cb19;" >
                                                {{ __('Sí')}}
                                            </div>
                                            <div class="col-sm-12" style="color: #000000;">
                                                {{ $itm->cedulaReferido}}
                                            </div>
                                        </div>
                                    </td>
                                @endif
                            <td>{{ $itm->nombre}}</td>
                            <td>{{ $itm->cedula}}</td>
                            <td>{{ $itm->numCelular}}</td>
                            <td>{{ $itm->mail}}</td>
                            <td>{{ $itm->ciudadResidencia}}</td>
                            <td>
                                <img src="{{ asset($itm->urlTicket) }}" alt="" width="100px" >
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
    @endif
    
</div>
