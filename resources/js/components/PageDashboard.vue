<template>
    <div>
        <div class="col-md-4">
            <div class="list-group dashboard-menu">
                <router-link :to="{name:'profile', params:{ user: user }}" active-class="active"
                             class="list-group-item">
                    Perfil
                </router-link>
                <router-link :to="{name:'contractors', params:{ haspub: haspub  }}" active-class="active" class="list-group-item">Contractor List
                </router-link>
                <router-link :to="{name:'sellers', params:{ haspub: haspub  }}"  active-class="active" class="list-group-item">Seller List</router-link>
                <router-link :to="{name:'buyers', params:{ haspub: haspub  }}"  active-class="active" class="list-group-item">Buyer List</router-link>
            </div>
            <div class="form-group dashboard-menu">
                <select class="form-control" @change="navigation($event)">
                    <option :selected="this.$router.history.current.fullPath.includes('/profile') " value="profile">Profile
                    </option>
                    <option :selected="this.$router.history.current.fullPath.includes('/contractors-list')"
                            value="contractors">Contractors List
                    </option>
                    <option :selected="this.$router.history.current.fullPath.includes('/sellers-list')" value="sellers">
                        Seller List
                    </option>
                    <option :selected="this.$router.history.current.fullPath.includes('/buyers-list')" value="buyers">
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
            haspub:{
                type:Number
            }
        },
        methods: {
            navigation($event) {
                this.$router.push( { name:  $event.target.value, params:{ haspub: this.haspub  } });
            }
        },
        mounted() {
            this.$router.push({name: 'profile', params: {user: this.user}});
        }
    }
</script>

<style scoped>

</style>
