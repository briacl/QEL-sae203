@extends('templates.main')
@section('content')

    @if(!empty($jsondata))
        <table>
            <tbody>
                @foreach($jsondata as $item)
                    <tr>
                        <td>{{ $item->nom }}</td>  <!-- Remplace "nom" par les attributs de tes données -->
                        <td>{{ $item->autre_attribut }}</td> <!-- Si tu as d'autres attributs à afficher -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucune donnée trouvée dans la base de données.</p>
    @endif

@endsection