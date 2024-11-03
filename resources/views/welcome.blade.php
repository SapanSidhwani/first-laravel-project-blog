<h1>
    {{ __('welcome.heading') }}
</h1>
<h2>
    {{ __('welcome.greeting', ['name' => 'Sapan']) }}
</h2>
<a href="{{url('/home')}}">{{ __('welcome.home') }}</a>
<a href="{{url('/about')}}">{{ __('welcome.about') }}</a>
<a href="{{url('/contact-us')}}">{{ __('welcome.contact') }}</a>

