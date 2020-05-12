@extends('layouts.app')

@section('title')
Nova Chance - Login
@endsection()

@section('defineActive')
    <li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li><a href="/aovivo">CULTO AO VIVO</a></li>
	<li><a href="/contato">CONTATO</a></li>
@endsection()

@section('css')
	<link rel="stylesheet" type="text/css" href="/styles/contato.css">
    <link rel="stylesheet" type="text/css" href="/styles/contato_responsive.css">
@endsection()

@section('content')

<!-- Home -->

    <div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/contact.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">Nova Chance</div>
					<div class="home_title">Registre-se</div>
				</div>
			</div>
		</div>
    </div>
    
    <!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Form -->
				<div class="col-lg-12">
					<div class="contact_form_container" style="max-width=200%;text-align:center;position:relative;">
						<div class="contact_title">Crie sua nova conta:</div>
						<!--<form action="{{ route('register') }}" method="POST" class="contact_form" id="contact_form">
                            @csrf

                            <div>
                                <input type="text" style="width:100%;" class="contact_input @error('name') is-invalid @enderror" name="name" placeholder="Nome" autocomplete="name" required="required" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="email" style="width:100%;" class="contact_input @error('email') is-invalid @enderror" name="email" placeholder="E-mail" autocomplete="email" required="required" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <input type="password" style="width:100%;" class="contact_input @error('password') is-invalid @enderror" name="password" placeholder="Senha" required="required">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="password" style="width:100%;" class="contact_input" name="password_confirmation" placeholder="Confirme sua senha" required autocomplete="new-password">
                               
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                
                            </div>
							
                            <div style="text-align:center;">
                                <button onclick="alert('Olá, por favor aguarde o lançamento do site oficial para que seja possível criar novas contas.')" style="display:inline-block;" type="submit"class="contact_button">Criar</button>
                                
                                @if (Route::has('password.request'))
                                    <a style="display:inline-block;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
						</form>-->


                        <form action="/home" method="GET" class="contact_form" id="contact_form">

                            <div>
                                <input type="text" style="width:100%;" class="contact_input @error('name') is-invalid @enderror"  placeholder="Nome" autocomplete="name" required="required" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="email" style="width:100%;" class="contact_input @error('email') is-invalid @enderror"  placeholder="E-mail" autocomplete="email" required="required" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <input type="password" style="width:100%;" class="contact_input @error('password') is-invalid @enderror" placeholder="Senha" required="required">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input type="password" style="width:100%;" class="contact_input"  placeholder="Confirme sua senha" required autocomplete="new-password">
                               
                            </div>
							
                            <div style="text-align:center;">
                                <button onclick="alert('Olá, por favor aguarde o lançamento do site oficial para que seja possível criar novas contas.')" style="display:inline-block;" type="submit"class="contact_button">Criar</button>
                               
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
    
                
@endsection

@section('js')
<script src="/js/contato.js"></script>
@endsection()






