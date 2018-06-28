@extends('templates.homeTemplate')
   @section('content')
   <div class="container card mt-5">
       <div class="col-md-4"></div>
       @if ($errors->any())
           <div class="alert alert-danger" style="margin-top: 20px;">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
       <form action="{{url('/register')}}" method="post" class="card-body">
           @csrf
           <div class="form-group">
               <label for="email_field">Digite seu nome: </label>
               <input type="text" class="form-control" name="name" id="text_field" placeholder="Digite seu nome ..." required />
           </div>
           <div class="form-group">
               <label for="email_field">Digite seu email: </label>
               <input type="email" class="form-control" name="email" id="email_field" placeholder="Digite seu email ..." required />
           </div>
           <div class="form-group">
               <label for="password_fiel">Digite sua senha:</label>
               <input type="password" class="form-control" name="password"  id="password_field" placeholder="Digite sua senha ..." required />
           </div>
           <div class="form-group">
               <label for="password_confirmation">Digite sua senha:</label>
               <input type="password" class="form-control" name="password_confirmation"  id="password_confirmation" placeholder="Digite sua senha novamente ..." required />
           </div>
           <button type="submit" class="btn btn-primary float-right"> Registrar </button>

               @if(session('aviso'))
                   {{ session('aviso') }}
               @endif

               <a href="{{url('registrar')}}"> Criar uma Conta </a>
       </form>
   </div>
   @endsection