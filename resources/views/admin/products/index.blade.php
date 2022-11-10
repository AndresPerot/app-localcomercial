<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradmin')
     
        <div class="container p-4">
                 <div class="card border-info">
                    <h1>Mantencion Productos</h1>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/admin/products/register') }}" class="navbar-brand">Ingreso Nuevo Producto</a>
                 </div>
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/admin/products/show') }}" class="navbar-brand">Mostrar Productos</a>
                 </div>                            
            </div>
        </div> 
    </body>
</html>