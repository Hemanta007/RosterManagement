<h1>hello</h1>

<p>
	please click the following link to activate your account,

	<a href="{{ env ('APP_URL') }}/activate/{{ $user->email}}/{{ $code}}">activate account</a>
</p>