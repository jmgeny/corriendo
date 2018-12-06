<h1>Eventos</h1>
{{ $eventos->links() }}
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Organizador</th>
                    <th>Deporte</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Inscribirse</th>
                    <th>Lista</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($eventos as $evento)
                      <tr>
                        <td>{{ $evento->organizer->nombre }}</td>
                        <td>{{ $evento->sport->nombre }}</td>
                        <td>{{ $evento->nombre }}</td>
                        <td>{{ $evento->fecha }}</td>
                        <td><a href="{{ url('evento/buscardni',$evento->id ) }}"><button class="btn btn-primary">Inscribirse</button></a></td>
                        <td><a href="{{ url('evento/inscriptos',$evento->id ) }}"><button class="btn btn-primary">Lista</button></a></td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
{{ $eventos->links() }}            