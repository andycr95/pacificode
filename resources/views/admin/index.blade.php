@extends('admin.layouts.layout')

@section('content')
    <transition name="slide-fade">
        <router-view :key="$route.fullPath"></router-view>
    </transition>
@endsection
