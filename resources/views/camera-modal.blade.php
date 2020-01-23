<div id="profile-photo-camera-modal" class="modal fade" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('Take a picture')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" v-if="form.errors.has('photo')">
                    @{{ form.errors.get('photo') }}
                </div>

                <div id="profile-photo-camera-preview"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default float-left" :disabled="form.busy" data-dismiss="modal">{{__('Cancel')}}</button>
                <button type="button" class="btn btn-primary" :disabled="form.busy" @click="takePicture">{{__('Take Picture')}}</button>
            </div>
        </div>
    </div>
</div>