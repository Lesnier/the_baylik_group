<template>
    <div id="be-contractor" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Join Baylik</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="input-field">
                                <label for="name">Full Name</label>
                                <input v-model="form.name" type="text" name="name" id="name" class="form-control"
                                       placeholder="Full Name...">
                                <small class="custom-danger-alert" v-for="error in errors.name">{{ error }}</small>
                            </div>
                            <div class="input-field">
                                <label for="email">Email</label>
                                <input v-model="form.email" type="email" name="email" id="email" class="form-control"
                                       placeholder="Your Email...">
                                <small class="custom-danger-alert" v-for="error in errors.email">{{ error }}</small>
                            </div>
                            <div class="input-field">
                                <label for="phone">Phone</label>
                                <input v-model="form.phone" type="text" name="phone" id="phone" class="form-control"
                                       placeholder="Your Phone...">
                                <small class="custom-danger-alert" v-for="error in errors.phone">{{ error }}</small>
                            </div>
                            <div class="input-field">
                                <label for="lic">Agent License</label>
                                <input v-model="form.lic" type="text" name="lic" id="lic" class="form-control"
                                       placeholder="Your License...">
                                <small class="custom-danger-alert" v-for="error in errors.lic">{{ error }}</small>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button id="close-modal-contractor" type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" @click="save()">Join Me</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    phone: '',
                    lic: '',
                    roll: 'contractor',
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                errors: {}
            }
        },
        methods: {
            save() {
                axios.post('/public/save_contractor', this.form).then(response => {
                    swal({
                        title: "Good job!",
                        text: response.data.message,
                        icon: "success",
                        button: "Ok!",
                    });
                    this.cleanForm();
                    this.closeModalContractor();
                }).catch(err => {
                    if (err.response.status === 422) {
                        this.errors = err.response.data.errors;
                    } else {
                        swal({
                            title: "Error!",
                            text: err + ' - Contact us to help you!',
                            icon: "error",
                            button: "Ok!",
                            dangerMode: true,
                        });
                        this.cleanForm();
                        this.closeModalContractor();
                    }
                });
            },
            cleanForm() {
                this.form.name = '';
                this.form.email = '';
                this.form.phone = '';
                this.form.lic = '';
                this.errors = {};
            },
            closeModalContractor() {
                document.querySelector('#close-modal-contractor').click();
            }
        }

    }
</script>

<style scoped>
    .custom-danger-alert {
        font-size: 12px;
        color: red;

    }
</style>
