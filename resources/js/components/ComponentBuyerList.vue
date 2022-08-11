<template>
    <div>
        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Phone</th>
                        <th>Point Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="buyer in buyerList " :key="buyer.id">
                        <td>{{ buyer.infoUser.name }}</td>
                        <td>{{ buyer.infoUser.email }}</td>
                        <td>{{ buyer.infoUser.phone }}</td>
                        <td>{{  new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format( buyer.punto_precio ) }}</td>
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
                    <a @click="getBuyerList(link.url)" href="javascript: void(0);" :aria-label="link.label">
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
                buyerList: [],
                linksPaginations: [],
                allPagination: {},
                isLoading: false
            }
        },
        methods: {
            getBuyerList(url = 'public/buyers-list') {
                if (url != null) {
                    this.isLoading = true;
                    axios.get(url).then(response => {
                        console.log(response);
                        this.allPagination = response.data.list;
                        this.buyerList = response.data.list.data;
                        this.linksPaginations = response.data.list.links;
                        this.isLoading = false;
                    });
                }
            }
        },
        mounted() {
            this.getBuyerList();
        }
    }
</script>

<style scoped>

</style>
