@extends('layouts.default')
@section('content')
    <h1>You can manage the list here!</h1>





    <ul class="uk-sortable uk-grid uk-grid-small uk-grid-width-1-4" data-uk-sortable="{handleClass:'uk-sortable-handle'}">
        @foreach($catagories as $catagory)
            <li class="uk-grid-margin">
                <div class="uk-panel uk-panel-box">
                    <i class="uk-sortable-handle uk-icon uk-icon-arrows uk-margin-small-right"></i>
                    {{ $catagory->catagory_name }}
                    <a href="#" class="uk-icon-hover uk-icon-pencil uk-margin-small-left"></a>
                    <a href="#" class="uk-icon-hover uk-icon-close uk-margin-small-left"></a>
                </div>
            </li>

        @endforeach

    </ul>
@stop