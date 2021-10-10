@extends('layouts.app')
@section('content')

  {{--		Блок 1 категории специальностей--}}
  @section('cat')
    @include('partials.cat')
  @show
  {{--		Партнеры--}}
  @section('part')
    @include('partials.part')
  @show
  {{--		Статьи--}}
  @section('stat')
    @include('partials.stat')
  @show
  {{--		Почему с нами--}}
  @section('poch')
    @include('partials.poch')
  @show
  {{--		Лицензии--}}
  @section('lic')
    @include('partials.lic')
  @show
  {{--		Accordion--}}
  @section('acord')
    @include('partials.acord')
  @show
  {{--		Обратная связь--}}
  @section('ob-sv')
    @include('partials.ob-sv')
  @show

@endsection