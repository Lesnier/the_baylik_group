<template>
    <div id="be-buyer" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Join Buyer</h4>
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
                            <div class="input-field" style="margin-top: 20px">
                                <div style="display: flex; justify-content: space-between; flex-direction: row">
                                    <label>Price Point</label>
                                    <p>{{  new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(form.punto_precio ) }}</p>
                                </div>
                                <input v-model="form.punto_precio" type="range" class="form-range form-control" min="10000"
                                       max="5000000" step="10" id="punto_precio" name="punto_precio"
                                       placeholder="Your Point Price...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="close-modal-buyer" type="button" class="btn btn-default" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-blue btn-effect" @click="saveSeller()">Join Me</button>
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
                    punto_precio: 1000,
                    roll: 'seller',
                    _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                errors: {}
            }
        },
        methods: {
            saveSeller() {
                axios.post('/public/save_buyer', this.form).then(response => {
                    swal({
                        title: "Good job!",
                        text: response.data.message,
                        icon: "success",
                        button: "Ok!",
                    });
                    this.cleanFormBuyer();
                    this.closeModalBuyer();
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
                        this.cleanFormBuyer();
                        this.closeModalBuyer();
                    }
                });
            },
            cleanFormBuyer() {
                this.form.name = '';
                this.form.email = '';
                this.form.phone = '';
                this.form.punto_precio = '';
                this.errors = {};
            },
            closeModalBuyer() {
                document.querySelector('#close-modal-buyer').click();
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
