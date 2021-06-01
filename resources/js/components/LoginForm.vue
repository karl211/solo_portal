<template>
    <div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="username" class="form-control" v-model="user.email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
            <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" v-model="user.password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" @click="login" class="btn btn-primary">Submit</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            login() {
                this.$store.dispatch('User/loginUser', this.user);
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>