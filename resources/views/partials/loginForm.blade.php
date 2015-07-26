<!--
<form action="/auth/login" method="post" class="navbar-form navbar-right" role="form">
	<div class="form-group">
		<input type="text" placeholder="Email" class="form-control">
	</div>
	<div class="form-group">
		<input type="password" placeholder="Password" class="form-control">
	</div>
	<button type="submit" class="btn btn-success">Sign in	</button>
</form>
-->

<div id="navbar" class="navbar-collapse collapse navbar-right">
     <a href="./auth/login">Log in</a> <a href="./auth/register">Register{{ $logged }}</a>
</div>

