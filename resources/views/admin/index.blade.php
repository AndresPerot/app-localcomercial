<!DOCTYPE html>
<html lang="en">
 @include('partials/head')
    <body >
        @include('partials/navbaradminhome')
     
            <div class="container p-4">
                 <div class="card border-info">
                    <h1>Bienvenidos</h1>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('/mantencion/sell') }}" class="navbar-brand">Sala Ventas</a>
                 </div>               
            </div>
            <div class="container p-4">
                 <div class="card border-info">
                 <a href="{{ url('admin/mantencion') }}" class="navbar-brand">Mantencion Productos</a>
                 </div>               
            </div>
        </div> 
    </body>
</html>