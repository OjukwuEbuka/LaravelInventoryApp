<div id="confirmModal" class="modal">

<button class="modal-close waves-effect waves-light btn-flat right" id="close">
    <i class="material-icons">close</i>
</button>

<div class="modal-content">

    <div class="progress hide">
        <div class="indeterminate {{$school->themeColor ?: 'blue' }}"></div>
    </div>

    <div class="row">
        <!-- Header -->
        <div class="valign-wrapper mb-5">
           <h2 class="center" id="confirmQuery"></h2>
        </div>
    </div>
    <div class="row center">
        <button type="submit" class="btn green"  id="yesConfirm">YES</button>
        <button type="submit" class="btn red"  id="noConfirm">NO</button>
    </div>
</div>
</div>