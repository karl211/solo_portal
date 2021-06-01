<template>
    <div class="login-wrapper mt-5">
        <div class="logo pl-3">
            <span>
                <img src="/images/solo.svg" alt="solo">
                <img src="/images/dot.svg" class="pos-20" alt="dot">
                <img src="/images/portal.svg" class="pos-1em" alt="portal">
            </span>
        </div>

        <p class="text-center">Login to your account</p>

        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text pl-2 pr-2 bg-white">
                        <img src="/images/user-icon.svg" class="" alt="user-icon">
                    </span>
                </div>
                <input type="username" class="form-control text-input pl-2 border-left-0" v-model="user.email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text pl-2 pr-2 bg-white">
                        <img src="/images/lock.svg" class="" alt="lock">
                    </span>
                </div>
                <input type="password" class="form-control text-input pl-2 border-left-0" v-model="user.password" id="exampleInputPassword1" placeholder="Password">
            </div>
        </div>
        <button type="submit" @click="login" class="btn btn-primary form-control mb-2 submit-button">Sign in</button>
        <button type="submit" @click="login" class="btn btn-primary form-control dark-button">Sign in with Foodics F5</button>
        <button type="submit" @click="singUp" class="btn btn-link form-control mt-3 btn-color">Create New Account</button>
    </div>
</template>

<script>
    import User from "../apis/User";

    export default {
        data() {
            return {
                user: {
                    email: '',
                    password: ''
                },
                errors: []
            }
        },
        methods: {
            // login() {
            //     this.$store.dispatch('User/loginUser', this.user);
            // },

            login() {
                User.login(this.user)
                .then(response => {
                    this.$store.commit("LOGIN", true);

                    // console.log(response.data.user.token);
                    localStorage.setItem("token", response.data.user.token);

                    window.location.replace('user')
                    // this.$router.push({ name: "Dashboard" });
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    }
                });

                // axios.post('/api/login', {
                //     email: user.email,
                //     password: user.password
                // })
                // .then(response => {
                //     if (response.data.user) {
                //         // save token
                //         localStorage.setItem('user', JSON.stringify(response.data.user));

                //         window.location.replace('/api/users')
                //     }
                // });
            },

            singUp() {
                window.location.replace('/api/register')
            }
        },
    }
</script>

<style lang="scss" scoped>
    .login-wrapper {
        margin: auto;
        height: 535px;
        width: 445px;
        border-radius: 18px;
        border-color: none;
        background: #fff;
        padding: 46px;
    }

    .submit-button {
        height: 44px;
        width: 351px;
        border-radius: 8px;
        background: #FF6B00;
    }

    .dark-button {
        height: 44px;
        width: 351px;
        border-radius: 8px;
        background: #32394C;
    }

    .text-input {
        height: 49px;
        border-radius: 8px;
        box-shadow: 0px 4px 26px 0px #0000001A;
    }

    .input-group-color {
        background: #fff;
    }

    .btn-color {
        color: #FF6B00;
    }
</style>