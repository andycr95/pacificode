@extends('admin.layouts.layout')

@section('content')
    <transition>
        <router-view :key="$route.fullPath"></router-view>
    </transition>
@endsection
