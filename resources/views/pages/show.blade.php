@extends('layouts.layout')

@section('content')

  @include('comps.post-conv')
  <header><h1>POST LIST</h1></header>
  <div id="app" class="container">

      <post-box
      :name='"{{ $post -> name }}"'
      :desc='"{{ $post -> desc }}"'
      :date='"{{ $post -> date }}"'
      ></post-box>

  </div>
    <footer><p>Powered by Bool</p></footer>
@endsection
