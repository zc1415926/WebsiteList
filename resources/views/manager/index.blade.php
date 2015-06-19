@extends('layouts.default')
@section('content')
    <script>
        //var validatorCatagoryName;
        $(document).ready(function()
        {
            $.validator.messages.required = "";
            //validatorCatagoryName =formDeleteCatagory
            $('#form-edit-catagory').validate(
                    {
                        rules:
                        {
                            'catagory_name':"required"

                        }
                    }
            );
            $('#formAddCatagory').validate(
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
                       onclick="onEditCatatoryClicked('{{ $catagory->catagory_name }}')"></a>
                    <a href="#" class="uk-icon-hover uk-icon-close uk-margin-small-left"
                       onclick="onDeleteCatagoryClicked('{{ $catagory->catagory_name }}')"></a>
                </div>
            </li>

        @endforeach

        <li class="uk-grid-margin">
            <div class="uk-panel uk-panel-box">
                <a href="#" class="uk-icon-hover uk-icon-small uk-icon-plus uk-margin-small-left"
                   onclick="onAddCatagoryClicked()"></a>
            </div>
        </li>
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

    <div id="modalAddCatagory" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">
        <div class="uk-modal-dialog">
            <button type="button" class="uk-modal-close uk-close"></button>
            <div class="uk-modal-header">
                <h2>Add New Catagory</h2>
            </div>
            <form method="post" action="/catagory/add" id="formAddCatagory" class="uk-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="uk-form-label" for="catagory_name">New Catagory Name: </label>
                <div class="uk-form-controls">
                    <input id="catagory_name" name="catagory_name" class="uk-form-width-large" type="text"
                           placeholder="Enter your new catagory name here.">
                </div>
                <div class="uk-modal-footer uk-text-right zc-modal-form-footer">
                    <button type="button" class="uk-button uk-modal-close">Cancel</button>
                    <button type="button" class="uk-button uk-button-primary" onclick="onAddCatagorySubmit()">Add</button>
                </div>
            </form>

        </div>
    </div>

    <div id="modalDeleteCatagory" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">
        <div class="uk-modal-dialog">
            <button type="button" class="uk-modal-close uk-close"></button>
            <div class="uk-modal-header">
                <h2>Confirmation</h2>
            </div>
            <p>Are you sure to delete the catagory: </p>
            <form method="post" action="/catagory/delete" id="formDeleteCatagory" class="uk-form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="catagory_id" type="hidden" value="{{ $catagory->id }}">
                <input name="catagory_name" type="hidden" value="{{ $catagory->catagory_name }}">
                <div class="uk-modal-footer uk-text-right zc-modal-form-footer">
                    <button type="button" class="uk-button uk-modal-close">Cancel</button>
                    <button type="submit" class="uk-button uk-button-danger">Delete</button>
                </div>
            </form>

        </div>
    </div>

    <script>

        function onDeleteCatagoryClicked(catagory_name)
        {
            $('#modalDeleteCatagory p').text("Are you sure to delete the catagory: " + catagory_name);
            UIkit.modal("#modalDeleteCatagory").show();
        }

        function onAddCatagoryClicked()
        {
            UIkit.modal("#modalAddCatagory").show();
        }

        function onAddCatagorySubmit()
        {
            if($('#formAddCatagory').valid())
            {
                $('#formAddCatagory').submit();
            }
            else
            {
                UIkit.notify("Please enter you catagory name!", 'danger');
            }
        }

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
        function onEditCatatoryClicked(catagory_name)
        {
            $('#modalEditCatagory h2').text("Reanem the Catagory: " + catagory_name);
            UIkit.modal("#modalEditCatagory").show();
        }
    </script>
@stop