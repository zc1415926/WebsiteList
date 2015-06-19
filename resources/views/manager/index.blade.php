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
                    <span>{{ $catagory->catagory_name }}</span>
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

    @include('manager.partials.modal')

    <script>
        /**
         * Add catagory section
         *
         * @param catagory_name
         */
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

        /**
         * Edit catagory section
         *
         * @param catagory_name
         */
        function onEditCatatoryClicked(catagory_name)
        {
            $('#modalEditCatagory h2').text("Reanem the Catagory: " + catagory_name);
            UIkit.modal("#modalEditCatagory").show();
        }

        function onEditCatagorySubmit()
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

        /**
         * Delete catagory section
         *
         * @param catagory_name
         */
        function onDeleteCatagoryClicked(catagory_name)
        {
            $('#modalDeleteCatagory p').text("Are you sure to delete the catagory: " + catagory_name);
            UIkit.modal("#modalDeleteCatagory").show();
        }
    </script>
@stop