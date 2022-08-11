<template>
    <div>
        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Phone</th>
                        <th>Licencia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="contractor in contractorList " :key="contractor.id">
                        <td>{{ contractor.infoUser.name }}</td>
                        <td>{{ contractor.infoUser.email }}</td>
                        <td>{{ contractor.infoUser.phone }}</td>
                        <td>{{ contractor.licencia }}</td>
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
                    <a @click="getContractorList(link.url)" href="javascript: void(0);" :aria-label="link.label">
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
                contractorList: [],
                linksPaginations: [],
                allPagination: {},
                isLoading: false
            }
        },
        methods: {
            getContractorList(url = '/contractors-list') {
                if (url != null) {
                    this.isLoading = true;
                    axios.get(url).then(response => {
                        console.log(response);
                        this.allPagination = response.data.list;
                        this.contractorList = response.data.list.data;
                        this.linksPaginations = response.data.list.links;
                        this.isLoading = false;
                    });
                }
            }
        },
        mounted() {
            this.getContractorList();
        }
    }
</script>

<style scoped>
    .loading {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
</style>
