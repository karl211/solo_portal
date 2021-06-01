<template>
    <div class="register-wrapper mt-2">
        <div class="logo pl-3">
            <span>
                <img src="/images/solo.svg" alt="solo">
                <img src="/images/dot.svg" class="pos-20" alt="dot">
                <img src="/images/portal.svg" class="pos-1em" alt="portal">
            </span>
        </div>

        <p class="text-center">Register for a new account</p>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text pl-2 pr-2 bg-white">
                                <img src="/images/user-icon.svg" class="" alt="user-icon">
                            </span>
                        </div>
                        <input type="username" class="form-control text-input pl-2 border-left-0" v-model="user.first_name" id="first_name" aria-describedby="emailHelp" placeholder="Enter first name">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text pl-2 pr-2 bg-white">
                                <img src="/images/user-icon.svg" class="" alt="user-icon">
                            </span>
                        </div>
                        <input type="username" class="form-control text-input pl-2 border-left-0" v-model="user.last_name" id="last_name" aria-describedby="emailHelp" placeholder="Enter last name">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text pl-2 pr-2 bg-white">
                        <img src="/images/email.svg" class="" alt="email">
                    </span>
                </div>
                <input type="username" class="form-control text-input pl-2 border-left-0" v-model="user.email" id="email" aria-describedby="emailHelp" placeholder="Enter your email address">
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
                <input type="password" class="form-control text-input pl-2 border-left-0" v-model="user.password" id="exampleInputPassword1" placeholder="Enter your password">
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text pl-2 pr-2 bg-white">
                        <img src="/images/lock.svg" class="" alt="lock">
                    </span>
                </div>
                <input type="password" class="form-control text-input pl-2 border-left-0" v-model="user.password" id="exampleInputPassword1" placeholder="Re enter your password">
            </div>
        </div>

        <div class="form-group">
            <label for="email">Concept Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text pl-2 pr-2 bg-white">
                        <img src="/images/food.svg" class="" alt="food">
                    </span>
                </div>
                <input type="username" class="form-control text-input pl-2 border-left-0" v-model="user.concept_name" id="concept_name" aria-describedby="emailHelp" placeholder="Enter your restaurant name">
            </div>
        </div>

        <div class="form-group">
            <label for="email">Country</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text pl-2 pr-2 bg-white">
                        <img src="/images/globe.svg" class="" alt="globe">
                    </span>
                </div>
                <input type="username" class="form-control text-input pl-2 border-left-0" v-model="user.country" id="country" aria-describedby="emailHelp" placeholder="Enter your country">
            </div>
        </div>

        <div class="form-group">
            <label for="email">Mobile Number</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text pl-2 pr-2 bg-white">
                        <img src="/images/mobile.svg" class="" alt="mobile">
                    </span>
                </div>
                <input type="username" class="form-control text-input pl-2 border-left-0" v-model="user.email" id="email" aria-describedby="emailHelp" placeholder="Enter your mobile number">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" @click="register" class="btn btn-primary form-control mb-2 submit-button">Register</button>
            <button type="submit" @click="register" class="btn btn-link form-control mt-0 btn-color">Create New Account</button>
        </div>
    </div>

    <!-- <div>
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
    </div> -->
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

<style lang="scss" scoped>
    .register-wrapper {
        margin: auto;
        height: 934px;
        width: 605px;
        border-radius: 18px;
        border-color: none;
        background: #fff;
        padding: 46px;
    }

    .submit-button {
        height: 44px;
        border-radius: 8px;
        background: #FF6B00;
    }

    .text-input {
        height: 49px;
        border-radius: 8px;
        box-shadow: 0px 4px 26px 0px #0000001A;
    }

    .btn-color {
        color: #FF6B00;
    }
</style>
