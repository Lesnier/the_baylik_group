<template>
    <div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="seller in sellerList " :key="seller.id">
                        <td>{{ seller.infoUser.name }}</td>
                        <td>{{ seller.infoUser.email }}</td>
                        <td>{{ seller.infoUser.phone }}</td>
                        <td>{{ seller.address }}</td>
                    </tr>
                </tbody>
            </table>
            <div v-show="isLoading" class="loading">
                <p>Loading...</p>
            </div>
        </div>
        <nav aria-label="...">
            <ul class="pagination">
                <li v-for="(link,index) in linksPaginations"
                    :class="{'active':link.active, 'disabled':((link.url === null) && (allPagination.current_page === linksPaginations.length - 2 || allPagination.current_page === 1))}">
                    <a @click="getSellerList(link.url)" href="javascript: void(0);" :aria-label="link.label">
                        <span v-html="link.label" aria-hidden="true"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                sellerList: [],
                linksPaginations: [],
                allPagination: {},
                isLoading: false
            }
        },
        methods: {
            getSellerList(url = '/sellers-list') {
                if (url != null) {
                    this.isLoading = true;
                    axios.get(url).then(response => {
                        console.log(response);
                        this.allPagination = response.data.list;
                        this.sellerList = response.data.list.data;
                        this.linksPaginations = response.data.list.links;
                        this.isLoading = false;
                    });
                }
            }
        },
        mounted() {
            this.getSellerList();
        }
    }
</script>

<style scoped>

</style>
