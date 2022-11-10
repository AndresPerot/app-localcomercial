<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials/head')
    <body>
        @include('partials/navbaradmin')
         <div class="container p-4">
            <form action="register" method="POST" class="card border-info">
                @csrf 
                
                <div class="card-body">
                 <input 
                    type = "text"
                    name = "nombreproductos"
                    class = "form-control mb-2"
                    placeholder = "Nombre..." 
                    min =3
                    max=50
                 />
                 
                 <input 
                    type = "number"
                    name = "stockproductos"
                    class = "form-control mb-2"
                    placeholder = "Stock..." 
                    min=11
                    max=11
                    
                 />
                 
                 <input 
                    type = "number"
                    name = "precioproductos"
                    class ="form-control mb-2"
                    placeholder = "Precio..." 
                 />

                 <input 
                    type = "text"
                    name = "proveedoridproductos"
                    class = "form-control mb-2"
                    placeholder = "Proveedor..." 
                 />
                 <button 
                   class ="btn btn-info"
                   >Crear Usuario
                 </button>
                </div>
             </div>  
            
        </div>
    </body>
</html>