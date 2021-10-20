import Vue from 'vue'
import Vuex from 'vuex'
import profile from './profile/index';
import auth from './auth/index';
import category from './category/index'
import todo from './todo/index'

Vue.use(Vuex);

export default new Vuex.Store({
    state: {},
    mutations: {},
    actions: {},
    modules: {
        profile,
        auth,
        category,
        todo

    }
});


