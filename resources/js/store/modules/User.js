import axios from "axios";

const state = {
    login: false,
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
        
    },

    registerUser({}, user) {
        axios.post('/api/register', user)
        .then(response => {
            console.log(response.data);
        });
    },
};

const mutations = {
    LOGIN(state, status) {  
        state.login = status;
        state.user = {};
    },

    AUTH_USER(state, user) {
        state.auth.user = user;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations,
}