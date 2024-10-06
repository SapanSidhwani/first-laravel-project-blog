@include ('partials.header', ['parent' => "Home Page"])
@php
$name = 'John';
@endphp

<!-- `:` when you want to pass a PHP expression (array, variable, object, or function call). -->
<!-- <x-alert-message :name="$name" /> -->

<!-- For String  -->
<x-alert-message name="John Cena" />
<h1>Home Page</h1>
@include ('partials.footer')