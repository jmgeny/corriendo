            {{ $athletes->links() }} 
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>dni</th>
                    <th>email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($athletes as $athlete)
                      <tr>
                        <td>{{ $athlete->apellido }}</td>
                        <td>{{ $athlete->nombre }}</td>
                        <td>{{ $athlete->dni }}</td>
                        <td>{{ $athlete->email }}</td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $athletes->links() }}
{{--             {{ $atletas->links() }} 
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>dni</th>
                    <th>email</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($atletas as $atleta)
                      <tr>
                        <td>{{ $atleta->apellido }}</td>
                        <td>{{ $atleta->nombre }}</td>
                        <td>{{ $atleta->dni }}</td>
                        <td>{{ $atleta->email }}</td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $atletas->links() }} --}}