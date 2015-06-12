@extends('master')
@section('content')
<div id="app">
  @{{ message | reverse }}
</div>
@endsection