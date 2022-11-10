<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
            <div class="container p-4">
            <table class="table">
                    <th>
                    <h1>Usuarios Activos</h1>
                    </th>
                    <th>
                    <br>
                    <div class="card border-info">
                    <button type="button" class="btn btn-success">+ Agregar usuario</button>
                    </th>
                 </div>   
                </div>
                 </table>             
            </div>
            <div class="container p-4">
                 <table class="table">
                 <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Accion</th>
                    </tr>
                </thead>
                    <ul>
                        @foreach ($users as $users)
                            <tbody>
                                <tr>
                                <th scope="row">{{$users->id}}</th>
                                <td>{{ $users-> name}}</td>
                                <td>{{ $users-> lastname}}</td>
                                <td>
                                    <button type="button" onclick="location.href = '/admin/user/index/{{$users->id}}' " class="btn btn-success">Ver</button>
                                    <button type="button" class="btn btn-secondary">Editar</button>
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </td>
                                </tr>
                            </tbody>
                           
                        @endforeach
                        
                    </ul>
                    </table>
                 </div>               
            </div>
        </div> 
    </body>
</html>