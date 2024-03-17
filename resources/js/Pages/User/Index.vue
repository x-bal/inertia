<template>

    <div class="d-flex justify-content-between mb-3">
        <h1 class="page-header">{{ title }}</h1>

        <a href="#modal-dialog" class="btn btn-primary h-100" data-bs-toggle="modal"><i class="fas fa-plus"></i> Tambah User</a>

        <div class="modal fade" id="modal-dialog" v-if="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form Data User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <form @submit.prevent="submit">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" v-model="user.username" id="username" class="form-control" v-bind:class="{ 'is-invalid': errors.username }">

                            <div class="invalid-feedback" v-if="errors.username">{{ errors.username }}</div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" v-model="user.name" id="name" class="form-control" v-bind:class="{ 'is-invalid': errors.name }">

                            <div class="invalid-feedback" v-if="errors.name">{{ errors.name }}</div>
                        </div>

                        <div class="form-group mb-3" v-if="!password">
                            <label for="password">Password</label>
                            <input type="password" v-model="user.password" id="password" class="form-control" v-bind:class="{ 'is-invalid': errors.password }">

                            <div class="invalid-feedback" v-if="errors.password">{{ errors.password }}</div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="level">Level</label>
                            <select v-model="user.level" id="level" class="form-control" v-bind:class="{ 'is-invalid': errors.level }">
                                <option value="Administrator">Administrator</option>
                                <option value="User">User</option>
                            </select>

                            <div class="invalid-feedback" v-if="errors.level">{{ errors.level }}</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-white" data-bs-dismiss="modal" @click="closeModal">Close</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">{{ title }}</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <form action="" class="row mb-3 justify-content-between">
                <div class="form-group col-md-2 d-flex">
                    <span class="align-self-center me-2">Show</span> <input type="text" v-model="searchLimit" id="limit" class="form-control w-25 text-center" @keyup="changeLimit"> <span class="align-self-center ms-2">Entries</span>
                </div>

                <div class="form-group col-md-2">
                    <input type="text" v-model="searchKeyword" id="keyword" class="form-control" placeholder="Search..." @keyup="search">
                </div>
            </form>

            <table class="table table-striped table-hover align-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users.data" :key="user.id">
                        <td>{{ user.id }}</td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.level }}</td>
                        <td>
                            <a href="#modal-dialog" class="text-success" data-bs-toggle="modal" @click="edit(user)"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="row mt-3 justify-content-between">
                <div class="col-md-4">
                    <span>Showing {{ users.from }} to {{ users.to }} of {{ users.total }} entries</span>
                </div>

                <div class="col-md-6">
                    <div class="pagination float-end">
                        <!-- Previous Page Link -->
                        <div class="page-item">
                            <Link class="page-link" :href="users.first_page_url">« First</Link>
                        </div>

                        <!-- Page Number Links -->
                        <div class="page-item" :class="{ 'active': link.active }" v-for="(link, index) in users.links.slice(1, -1)" :key="index">
                            <Link :href="link.url + '&keyword=' + searchKeyword + '&limit=' + searchLimit" class="page-link">{{ link.label }}</Link>
                        </div>

                        <!-- Next Page Link -->
                        <div class="page-item">
                            <Link class="page-link" :href="users.last_page_url">Last »</Link>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'

export default {
    components: {
        Link
    },
    data() {
        return {
            user: {},
            modal: true,
            password : false,
            searchKeyword : this.keyword,
            searchLimit : this.limit
        }
    },

    methods : {
        closeModal() {
            const modal = document.getElementById('modal-dialog');
            if (modal) {
                modal.classList.remove('show');
                modal.style.display = 'none';
                document.body.classList.remove('modal-open');
                const backdrop = document.getElementsByClassName('modal-backdrop')[0];
                if (backdrop) {
                    backdrop.remove();
                }
                this.user = {}
            }
        },

        submit() {
            if(this.password) {
                this.$inertia.put('/users/' + this.user.id, this.user, {
                    onSuccess: () => {
                        this.closeModal()
                    }
                })
            }else{
                this.$inertia.post('/users', this.user, {
                    onSuccess: () => {
                        this.closeModal()
                    }
                })
            }
        },

        edit(user) {
            this.password = true
            this.user = user
        },

        search() {
            const query = { keyword: this.searchKeyword, limit: this.searchLimit };
            this.$inertia.get("/users", query, { replace: true, preserveState: true });
        },

        changeLimit() {
            const query = { keyword: this.searchKeyword, limit: this.searchLimit };
            this.$inertia.get("/users", query, { replace: true, preserveState: true });
        }
    },

    props: {
        title: String,
        users: Object,
        errors: Object,
        limit: String,
        keyword: String,
    }
}
</script>

<style>

</style>
