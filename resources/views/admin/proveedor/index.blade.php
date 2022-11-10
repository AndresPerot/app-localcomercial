<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
        <div class="container p-4">
                 <div class="card border-info">
                    <h1>Ingreso Proveedores</h1>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/sell') }}" class="navbar-brand">Ingreso Nuevo Proveedor</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/sell') }}" class="navbar-brand">Mostrar Proveedor</a>
                 </div>                            
            </div>
        </div> 
    </body>
</html>