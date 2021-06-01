import axios from "axios";

const state = {
    user: {}
};
const getters = {
    getuser({}, user) {
        axios.post('/api/register', {
            email: user.email,
            password: user.password,
            c_password: user.c_password,
            first_name: user.first_name,
            last_name: user.last_name
        })
        .then(response => {
            console.log(response.data);
        });
    },
};
const actions = {
    loginUser({}, user) {
        axios.post('/api/login', {
            email: user.email,
            password: user.password
        })
        .then(response => {
            if (response.data.user) {
                // save token
                localStorage.setItem('user', JSON.stringify(response.data.user));

                window.location.replace('/api/users')
            }
        });
    },

    registerUser({}, user) {
        axios.post('/api/register', {
            email: user.email,
            password: user.password,
            c_password: user.c_password,
            first_name: user.first_name,
            last_name: user.last_name
        })
        .then(response => {
            console.log(response.data);
        });
    },
};
const mutations = {};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,
}