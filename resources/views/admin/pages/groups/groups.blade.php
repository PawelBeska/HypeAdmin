@extends('admin.master')
@section('header')
    @include('admin.global.header.header')
@endsection

@section('sidebar')
    @include('admin.global.body.sidebar')
@endsection

@section('container')
    @include('admin.components.groups.groups')
@endsection