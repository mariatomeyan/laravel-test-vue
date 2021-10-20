import VueRouter from 'vue-router';
import routes from './routes.js';
import store from '../Store/index'
const router = new VueRouter({
    mode: 'history',
    routes
})



router.beforeEach((to, from, next) => {
    if (to.matched.some((record) => record.meta.requiresAuth) && !store.getters['auth/isAuth'])
       next( '/login')
    else next()
})
export default router;
