@extends('layouts.master')

@section('javascript')

    @include('layouts._datepicker')
    @include('layouts._typeahead')
    @include('item_lookups._js_item_lookups')

@stop

@section('content')

    <div id="div-loan-edit">

        @include('loans._edit')

    </div>

@stop
