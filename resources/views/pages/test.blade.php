@extends('layout.app')

@section('title')
  Test
@stop

@section('content')
  <div class="container">

    <div class="title">
      <h1>Test</h1>
      <p class="justify">{{ $u }}</p>
    </div>

    <hr>
    <a href="{{ url('/tem') }}"><b>T</b>ests <b>e</b>nvoi d'e<b>m</b>ails</a>

    <h1>

      {{--@component('mail::panel')--}}
      {{--This is the panel content.--}}
      {{--@endcomponent--}}

      {{--      <pre>{{ var_dump($testEmail) }}</pre>--}}
    </h1>

  </div>
@endsection

@section('footer')
  <script>console.log('Contact from script');</script>
@stop