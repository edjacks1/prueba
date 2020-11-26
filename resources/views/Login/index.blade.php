@extends('Layout.index')

@section('content')
    <div class="container h-100" >
        <div class="d-flex justify-content-md-center align-items-center vh-100" >
            <div class="card p-5">
                <form action="{{route('login.auth')}}" method="post">

                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="emailInput">Correo electronico</label>
                                <input type="email" class="form-control" id="emailInput" name="email" required>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="passwordInput">Contraseña</label>
                                <input type="text" class="form-control" id="passwordInput" name="password" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%"> Logearme </button>
                </form>
            </div>
        </div>     
    </div> 
@endsection