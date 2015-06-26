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
                       onclick="onEditCatatoryClicked('{{ $catagory->id }}', '{{ $catagory->catagory_name }}')"></a>
                    <a href="#" class="uk-icon-hover uk-icon-close uk-margin-small-left"
                       onclick="onDeleteCatagoryClicked('{{ $catagory->id }}', '{{ $catagory->catagory_name }}')"></a>
                    <a href="/lists/{{ $catagory->id }}" class="uk-icon-hover uk-icon-arrow-right uk-margin-small-left"
                       onclick=""></a>
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




        var catagoryArr = new Array();

        $("#catagorySortable").bind("change.uk.sortable", function(data){
            //UIkit.notify("you have changed the order of catagories", 'warning');



            $(".uk-panel.uk-panel-box span").each(function(){
                catagoryArr.push({'id' : $(this).attr('id'), 'txt' : $(this).text()});
                //console.log($(this).text());
            });

            //不知道为什么会多出最后一个项，与前边的某一个项重复
            catagoryArr.pop();
            /*for(var i=0; i<catagoryArr.length-1; i++)
            {
                console.log("id: " + catagoryArr[i]['id'] + " new order: " + i);
            }*/

            var strConfirm = "Save new catagory order?" +
                     "<a onclick='onCancelSaveCatagoryClicked()' class='uk-icon-small uk-icon-hover uk-icon-close uk-margin-large-left uk-margin-small-right '></a>" +
                     "<a onclick='onSaveCatagoryClicked()' class='uk-notify-message-danger uk-icon-small'><i class='uk-icon-check'></i></a>";

            UIkit.notify.closeAll();
            UIkit.notify_dialog.closeAll();
            UIkit.notify_dialog(strConfirm, {timeout: 0, status: 'danger'});
        });

        function onSaveCatagoryClicked()
        {
            UIkit.notify_dialog.closeAll();

            $.ajax({
                type: "post",
                url: "/catagory/reorder",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                data: {'order': catagoryArr},

                success: function(data)
                {
                    UIkit.notify('Success to reorder the catagory!', 'success');
                    //console.log(data);
                    //document.write(data);
                },
                error: function(data)
                {
                    UIkit.notify('Error to reorder the catagory!', 'danger');
                    console.log('reorder error!');
                    console.log(data);
                }
            })
        }

        function onCancelSaveCatagoryClicked()
        {
            UIkit.notify_dialog.closeAll();
            location.reload();
        }

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
        function onEditCatatoryClicked(catagory_id, catagory_name)
        {
            $('#modalEditCatagory h2').text("Reanem the Catagory: " + catagory_name);
            $('#modalEditCatagory #catagory_name').val(catagory_name);
            $('#modalEditCatagory #catagory_id').val(catagory_id);
            $('#form-edit-catagory .uk-button-primary').attr('onclick', 'onEditCatagorySubmit("'+catagory_name.toString()+'")')
            UIkit.modal("#modalEditCatagory").show();
        }

        function onEditCatagorySubmit(catagory_name)
        {
            //文本框里的文字
            if($('#modalEditCatagory #catagory_name').val() == catagory_name)
            {
                UIkit.notify("New name is same as the old one!", 'warning');
            }
            else
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