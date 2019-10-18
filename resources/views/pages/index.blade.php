@extends('layouts.layout')

@section('content')

  @include('comps.post-conv')
  <header><h1>POST LIST</h1></header>
  <div id="app" class="container">
    @foreach ($posts as $post)
      <post-box
      :name='"{{ $post -> name }}"'
      :date='"{{ $post -> date }}"'
      ></post-box>
    @endforeach

  </div>
    <footer><p>Powered by Bool</p></footer>
@endsection
