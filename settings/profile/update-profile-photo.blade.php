<spark-update-profile-photo :user="user" inline-template>
    <div>
        <div class="card card-info" v-if="user">
            <h5 class="card-header text-white">Profile Photo</h5>

            <div class="card-block">
                <div class="alert alert-danger" v-if="form.errors.has('photo')">
                    @{{ form.errors.get('photo') }}
                </div>

                <form class="form-horizontal" role="form">
                    <!-- Photo Preview-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>

                        <div class="col-md-6">
                            <span role="img" class="profile-photo-preview"
                                :style="previewStyle">
                            </span>
                        </div>
                    </div>

                    <!-- Update Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>

                        <div class="col-md-6">
                            <label type="button" class="btn btn-primary btn-upload" :disabled="form.busy">
                                <span>Select New Photo</span>

                                <input ref="photo" type="file" class="form-control" name="photo" @change="update">
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</spark-update-profile-photo>
