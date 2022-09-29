@extends('layout')

@section('content')
@include($page, ['pdfView' => true])
@endsection