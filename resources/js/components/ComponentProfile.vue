<template>
    <div>
        <div class="col-md-4 col-sm-6 col-xs-12 info-profile">
            <p><strong>Name</strong></p>
            <p>{{user.name}}</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 info-profile">
            <p><strong>Email</strong></p>
            <p>{{user.email}}</p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 info-profile">
            <p><strong>Phone</strong></p>
            <p>{{user.phone}}</p>
        </div>
    </div>
</template>

<script>
    export default {

        props: {
            user: {
                type: Object,
            },
        },
        data() {
            return {
                currenUser: {},
            }
        },
        methods: {
        },
        created() {
            // this.currenUser = this.$router.query.user
            console.log(this.user)
        }
    }
</script>

<style scoped>

</style>
