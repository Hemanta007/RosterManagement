<h1>hello</h1>

<p>
	please click the following link to reset your password,

	<a href="{{ env ('APP_URL') }}/reset/{{ $user->email}}/{{ $code}}">click here</a>
</p>