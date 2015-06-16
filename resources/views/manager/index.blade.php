@extends('layouts.default')
@section('content')
    <h1>You can manage the list here!</h1>





    <ul class="uk-sortable uk-grid uk-grid-small uk-grid-width-1-4" data-uk-sortable="{handleClass:'uk-sortable-handle'}">
        @foreach($catagories as $catagory)
            <li class="uk-grid-margin">
                <div class="uk-panel uk-panel-box">
                    <i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>
                    {{ $catagory->catagory_name }}
                </div>
            </li>

        @endforeach


        <li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 10</div></li>
        <li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 3</div></li><li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 4</div></li>
        <li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 5</div></li>
        <li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 6</div></li>
        <li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 2</div></li><li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 7</div></li>
        <li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 8</div></li>
        <li class="uk-grid-margin"><div class="uk-panel uk-panel-box"><i class="uk-sortable-handle uk-icon uk-icon-bars uk-margin-small-right"></i>Item 9</div></li>

    </ul>
@stop