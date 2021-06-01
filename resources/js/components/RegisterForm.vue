<template>
    <div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="username" class="form-control" v-model="user.first_name" id="first_name" aria-describedby="emailHelp" placeholder="Enter username">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="username" class="form-control" v-model="user.last_name" id="last_name" aria-describedby="emailHelp" placeholder="Enter username">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="username" class="form-control" v-model="user.email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" v-model="user.password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" v-model="user.c_password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" @click="register" class="btn btn-primary">Submit</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    email: '',
                    password: '',
                    c_password: '',
                    first_name: '',
                    last_name: ''
                }
            }
        },
        methods: {
            register() {
                this.$store.dispatch('User/registerUser', this.user);
            }
        },
    }
</script>
