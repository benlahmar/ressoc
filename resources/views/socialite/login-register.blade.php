@extends("welcome")
@section("content")
<div class="container">
	<h1>Se connecter / S'enregistrer avec un compte social</h1>
	<p>
		<!-- Lien de redirection vers Google -->
		<a href="{{ route('socialite.redirect', 'google') }}" title="Connexion/Inscription avec Google"
         class="btn btn-link"  >Continuer avec Google</a>
	
		<!-- Lien de redirection vers Facebook -->
		<a href="{{ route('socialite.redirect', 'facebook') }}" title="Connexion/Inscription avec Facebook" class="btn btn-link"  >Continuer avec Facebook</a>

		<!-- Lien de redirection vers Github -->
		<a href="{{ route('socialite.redirect', 'github') }}" title="Connexion/Inscription avec Github" class="btn btn-link"  >Continuer avec Github</a>
	</p>
    <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="{{ route('socialite.redirect', 'google') }}" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>
</div>
@endsection