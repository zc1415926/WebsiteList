@extends('layouts.default')
@section('content')

    <h1>You can manage lists of {{ $catagory_name }} catagory here!</h1>

    <ul id="catagorySortable" class="uk-sortable uk-grid uk-grid-small uk-grid-width-1-4" data-uk-sortable="{handleClass:'uk-sortable-handle'}">
        @foreach($lists as $list)
            <li class="uk-grid-margin">
                <div class="uk-panel uk-panel-box">
                    <i class="uk-sortable-handle uk-icon uk-icon-arrows uk-margin-small-right"></i>
                    <span id="{{ $list->id }}">{{ $list->list_item_name }}</span>
                    <a href="#" class="uk-icon-hover uk-icon-pencil uk-margin-small-left"
                       onclick="onEditListItemClicked('{{ $list->id }}', '{{ $list->list_item_name }}')"></a>
                    <a href="#" class="uk-icon-hover uk-icon-close uk-margin-small-left"
                       onclick="onDeleteListItemClicked('{{ $list->id }}', '{{ $list->list_item_name }}')"></a>
                </div>
            </li>

        @endforeach

        <li class="uk-grid-margin">
            <div class="uk-panel uk-panel-box">
                <a href="#" class="uk-icon-hover uk-icon-small uk-icon-plus uk-margin-small-left"
                   onclick="onAddListItemClicked()"></a>
            </div>
        </li>
    </ul>

@stop