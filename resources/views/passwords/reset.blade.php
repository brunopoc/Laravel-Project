        @extends('templates.homeTemplate')
        
        @section('content')
        
        <div class="container card mt-5">
            <div class="panel panel-default">
                <form action="{{url('/password/reset')}}" method="post" class="card-body">
                    @csrf
                    <input name="token" type="hidden" value="{{$token}}">
                    <div class="form-group" style="padding-bottom:25px;">
                       <label for="email_field">Digite seu email: </label>
                        <input type="email" class="form-control" name="email" id="email_field" placeholder="Digite seu email ..." value="{{$email}}" required />
                       <div class="form-group">
                        <label for="password">Digite sua nova senha:</label>
                        <input type="password" class="form-control" name="password"  id="password" placeholder="Digite sua senha ..." required />
                       </div>
                       <div class="form-group">
                        <label for="password_confirmation">Confirme sua nova senha:</label>
                        <input type="password" class="form-control" name="password_confirmation"  id="password_confirmation" placeholder="Digite sua senha ..." required />
                       </div>
                       <button type="submit" style="margin-top:10px" class="btn btn-primary float-right"> Enviar </button>
                    </div>
                </form>
            </div>
        </div>
        @endsection