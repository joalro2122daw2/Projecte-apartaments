@extends('diseny')

@section('content')

    <h1>Llista d'apartaments</h1>
    <div class="mt-5">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td>#Codi únic</td>
                <td>Referencia catastral</td>
                <td>Ciutat</td>
                <td>Barri</td>
                <td>Nom del carrer</td>
                <td>Nombre al carrer</td>
                <td>Pis</td>
                <td>Nombre de llits</td>
                <td>Nombre d'habitacions</td>
                <td>Ascensor</td>
                <td>Calefacció</td>
                <td>Aire condicionat</td>
            </tr>
            </thead>
            <tbody>
            @foreach($apartament as $apart)
                <tr>
                    <td>{{$apart->Codi_unic}}</td>
                    <td>{{$empl->Referenciacatastral}}</td>
                    <td>{{$empl->Ciutat}}</td>
                    <td>{{$empl->Barri}}</td>
                    <td>{{$empl->Nomcarrer}}</td>
                    <td>{{$empl->Numerocarrer}}</td>
                    <td>{{$empl->Pis}}</td>
                    <td>{{$empl->Nombrellits}}</td>
                    <td>{{$empl->Nombrehabitacions}}</td>
                    <td>{{$empl->Ascensor}}</td>
                    <td>{{$empl->Calefaccio}}</td>
                    <td>{{$empl->Airecondicionat}}</td>
                    <td class="text-left">
                        <a href="{{ route('apartament.edit', $apartament ?? '' ->Codi_unic)}}" class="btn btn-success btn-sm">Edita</a>
                        <form action="{{ route('apartament.destroy', $apartament ?? '' ->Codi_unic)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <br><a href="{{ url('apartament/create') }}">Accés directe a la vista de creació d'empleats</a>
@endsection
