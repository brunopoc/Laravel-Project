        @extends('templates.homeTemplate')
        
        @section('content')
        
        <div class="container card mt-5">
            <div class="panel panel-default">
                @if (session('status'))
                        <div class="alert alert-success" role="alert" style="margin-top: 10px;">
                            {{ session('status') }}
                        </div>
                @endif
                <form action="{{ route('password.email') }}" method="post" class="card-body">
                    @csrf
                    <div class="form-group" style="padding-bottom:25px;">
                       <label for="email_field">Digite seu email: </label>
                       <input type="email" class="form-control" name="email" id="email_field" placeholder="Digite seu email ..." required />
                       
                       @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                       
                       <button type="submit" style="margin-top:10px" class="btn btn-primary float-right"> Enviar </button>
                    </div>
                </form>
            </div>
        </div>
        @endsection