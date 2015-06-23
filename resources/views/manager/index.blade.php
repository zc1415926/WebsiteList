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





    <ul id="catagorySortable" class="uk-sortable uk-grid uk-grid-small uk-grid-width-1-4" data-uk-sortable="{handleClass:'uk-sortable-handle'}">
        @foreach($catagories as $catagory)
            <li class="uk-grid-margin">
                <div class="uk-panel uk-panel-box">
                    <i class="uk-sortable-handle uk-icon uk-icon-arrows uk-margin-small-right"></i>
                    <span id="{{ $catagory->id }}">{{ $catagory->catagory_name }}</span>
                    <a href="#" class="uk-icon-hover uk-icon-pencil uk-margin-small-left"
                       onclick="onEditCatatoryClicked('{{ $catagory->catagory_name }}')"></a>
                    <a href="#" class="uk-icon-hover uk-icon-close uk-margin-small-left"
                       onclick="onDeleteCatagoryClicked('{{ $catagory->id }}', '{{ $catagory->catagory_name }}')"></a>
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
        $("#catagorySortable").bind("change.uk.sortable", function(data){
            UIkit.notify("you have changed the order of catagories", 'warning');
            //console.log($('.uk-panel.uk-panel-box').index($('.uk-panel.uk-panel-box:contains("Download")')););
            var catagoryArr = new Array();


            $(".uk-panel.uk-panel-box span").each(function(){
                catagoryArr.push({'id' : $(this).attr('id'), 'txt' : $(this).text()});
                //console.log($(this).text());
            });

            catagoryArr.pop();//不知道为什么会多出最后一个项，与前边的某一个项重复

            catagoryArr.forEach(function(catagory){
                console.log(catagory['id'] + ": " + catagory['txt']);
               // console.log("??");
            });
            //console.log(catagoryArr);
        });

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
        function onDeleteCatagoryClicked(catagoryId, catagory_name)
        {
            $('#modalDeleteCatagory p').text("Are you sure to delete the catagory: " + catagory_name);
            $('#delCatagoryId').attr('value', catagoryId);
            $('#delCatagoryName').attr('value', catagory_name);
            UIkit.modal("#modalDeleteCatagory").show();
        }
    </script>
@stop