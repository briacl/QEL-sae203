@extends('templates.main')
@section('content')

  <h1>Dematt</h1>

  <h1>Données de la seconde base de données</h1>

  <p>ici est le <a href="{{ url('apiServeurweb') }}">lien</a> vers le résultat de l'API.</p>

  @if(!empty($data))
      <table>
          <tbody>
              @foreach($data as $item)
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