@extends('layouts.app')

@section('content')
  <example-component :laravel_version="{{ json_encode(Illuminate\Foundation\Application::VERSION) }}"></example-component>
@endsection
