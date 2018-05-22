@extends('layouts.app')
@section('title', 'Page Title')
@section('sidebar')
   @parent
<p>This refers to the master sidebar.</p>
@endsection
@section('content')
<p>This is my body content.</p>
@endsection