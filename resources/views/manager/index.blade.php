@extends('layouts.default')
@section('content')
    <script>
        //var validatorCatagoryName;
        $(document).ready(function()
        {
            $.validator.messages.required = "";
            //validatorCatagoryName =
            $('#form-edit-catagory').validate(
                    {
                        rules:
                        {
                            'catagory_name':"required"

                        }
                    }
            );
        });
    </script>

    <h1>You can manage the list here!</h1>





    <ul class="uk-sortable uk-grid uk-grid-small uk-grid-width-1-4" data-uk-sortable="{handleClass:'uk-sortable-handle'}">
        @foreach($catagories as $catagory)
            <li class="uk-grid-margin">
                <div class="uk-panel uk-panel-box">
                    <i class="uk-sortable-handle uk-icon uk-icon-arrows uk-margin-small-right"></i>
                    {{ $catagory->catagory_name }}
                    <a href="#" class="uk-icon-hover uk-icon-pencil uk-margin-small-left"
                       onclick="onEditCatatoryClick('{{ $catagory->id }}', '{{ $catagory->catagory_name }}')"></a>
                    <a href="#" class="uk-icon-hover uk-icon-close uk-margin-small-left"></a>
                </div>
            </li>

        @endforeach

    </ul>

    <div id="modalEditCatagory" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">
        <div class="uk-modal-dialog">
            <button type="button" class="uk-modal-close uk-close"></button>
            <div class="uk-modal-header">
                <h2>Rename the Catagory: </h2>
            </div>
            <form method="post" action="/catagory/edit" id="form-edit-catagory" class="uk-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input id="catagory_id" name="catagory_id" type="hidden" value="{{ $catagory->id }}">
                <label class="uk-form-label" for="catagory_name">New Catagory Name: </label>
                <div class="uk-form-controls">
                    <input id="catagory_name" name="catagory_name" class="uk-form-width-large" type="text"
                           placeholder="Your new catagory name here.">
                </div>
                <div class="uk-modal-footer uk-text-right zc-modal-form-footer">
                    <button type="button" class="uk-button uk-modal-close">Cancel</button>
                    <button type="button" class="uk-button uk-button-primary" onclick="onRenameCatagorySubmit()">Submit</button>
                </div>
            </form>

        </div>
    </div>

    <script>
        function onRenameCatagorySubmit()
        {
            if($('#form-edit-catagory').valid())
            {
                $('#form-edit-catagory').submit();
            }
            else
            {
                UIkit.notify("Please fill the form correctly!", 'danger');
            }

        }

        //UIkit.modal("#modalEditCatagory").show();
        function onEditCatatoryClick(catagoryId, catagory_name)
        {
            $('#modalEditCatagory h2').text("Reanem the Catagory: " + catagory_name);
            UIkit.modal("#modalEditCatagory").show();
        }
    </script>
@stop