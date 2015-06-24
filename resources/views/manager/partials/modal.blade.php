<!-- Add catagory modal begin -->
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
<!-- Add catagory modal end -->

<!-- Edit catagory modal begin -->
<div id="modalEditCatagory" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">
    <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close"></button>
        <div class="uk-modal-header">
            <h2>Rename the Catagory: </h2>
        </div>
        <form method="post" action="/catagory/edit" id="form-edit-catagory" class="uk-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="catagory_id" name="catagory_id" type="hidden" value="">
            <label class="uk-form-label" for="catagory_name">New Catagory Name: </label>
            <div class="uk-form-controls">
                <input id="catagory_name" name="catagory_name" class="uk-form-width-large" type="text"
                       placeholder="Your new catagory name here.">
            </div>
            <div class="uk-modal-footer uk-text-right zc-modal-form-footer">
                <button type="button" class="uk-button uk-modal-close">Cancel</button>
                <button type="button" class="uk-button uk-button-primary" onclick="onEditCatagorySubmit()">Submit</button>
            </div>
        </form>

    </div>
</div>
<!-- Edit catagory modal end -->

<!-- Delete catagory modal begin -->
<div id="modalDeleteCatagory" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: scroll;">
    <div class="uk-modal-dialog">
        <button type="button" class="uk-modal-close uk-close"></button>
        <div class="uk-modal-header">
            <h2>Confirmation</h2>
        </div>
        <p>Are you sure to delete the catagory: </p>
        <form method="post" action="/catagory/delete" id="formDeleteCatagory" class="uk-form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="delCatagoryId" name="catagory_id" type="hidden" value="">
            <input id="delCatagoryName" name="catagory_name" type="hidden" value="">
            <div class="uk-modal-footer uk-text-right zc-modal-form-footer">
                <button type="button" class="uk-button uk-modal-close">Cancel</button>
                <button type="submit" class="uk-button uk-button-danger">Delete</button>
            </div>
        </form>
    </div>
</div>
<!-- Delete catagory modal end -->