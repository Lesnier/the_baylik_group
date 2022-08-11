<template>
    <div>
        <div class="col-md-4">
            <div class="list-group dashboard-menu">
                <router-link :to="{name:'profile', params:{ user: user }}" active-class="active"
                             class="list-group-item">
                    Perfil
                </router-link>
                <router-link to="/contractors-list" active-class="active" class="list-group-item">Contractor List
                </router-link>
                <router-link to="/sellers-list" active-class="active" class="list-group-item">Seller List</router-link>
                <router-link to="/buyers-list" active-class="active" class="list-group-item">Buyer List</router-link>
            </div>
            <div class="form-group dashboard-menu">
                <select class="form-control" @change="navigation($event)">
                    <option :selected="this.$router.history.current.fullPath === '/profile'" value="profile">Profile
                    </option>
                    <option :selected="this.$router.history.current.fullPath === '/contractors-list'"
                            value="contractors-list">Contractors List
                    </option>
                    <option :selected="this.$router.history.current.fullPath === '/sellers-list'" value="sellers-list">
                        Seller List
                    </option>
                    <option :selected="this.$router.history.current.fullPath === '/buyers-list'" value="buyers-list">
                        Buyer List
                    </option>
                </select>
            </div>
        </div>
        <div class="col-md-8">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PageDashboard",
        props: {
            user: {
                type: Object,
            },
        },
        methods: {
            navigation($event) {
                this.$router.push('/' + $event.target.value);
            }
        },
        mounted() {
            this.$router.push({name: 'profile', params: {user: this.user}});
        }
    }
</script>

<style scoped>

</style>
