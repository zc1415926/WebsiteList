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

    <!-- Add list item modal begin -->
    <div id="modalAddListitem" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">
        <div class="uk-modal-dialog">
            <button type="button" class="uk-modal-close uk-close"></button>
            <div class="uk-modal-header">
                <h2>Add New List Item</h2>
            </div>
            <form method="post" action="/listitem/add" id="formAddListitem" class="uk-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="category_id" value="{{ $catagory_id }}">

                <label class="uk-form-label" for="txtListitemName">New List Item Name: </label>
                <div class="uk-form-controls">
                    <input id="txtListitemName" name="txtListitemName" class="uk-form-width-large" type="text"
                           placeholder="Enter your new list item name here.">
                </div>

                <label class="uk-form-label" for="txtListitemUrl">New List Item URL: </label>
                <div class="uk-form-controls">
                    <input id="txtListitemUrl" name="txtListitemUrl" class="uk-form-width-large" type="text"
                           placeholder="Enter your new list item url here.">
                </div>

                <div class="uk-modal-footer uk-text-right zc-modal-form-footer">
                    <button type="button" class="uk-button uk-modal-close">Cancel</button>
                    <button type="button" class="uk-button uk-button-primary" onclick="onAddListitemSubmit()">Add</button>
                </div>
            </form>

        </div>
    </div>
    <!-- Add list item modal end -->

    <script>
        function onAddListItemClicked()
        {
            UIkit.modal("#modalAddListitem").show();
        }
        function onAddListitemSubmit()
        {
            if($('#formAddListitem').valid())
            {
                $('#formAddListitem').submit();
            }
            else
            {
                UIkit.notify("Please check the info you entered!", 'danger');
            }
        }

        /**
         * JQueryValidation part
         */
        $(document).ready(function()
        {
            $.validator.messages.required = "";

            $('#formAddListitem').validate(
                    {
                        rules:
                        {
                            //这里填的是input中的name属性值
                            'txtListitemName':"required",
                            'txtListitemUrl':"required"
                        }
                    }
            );

        });
    </script>
@stop