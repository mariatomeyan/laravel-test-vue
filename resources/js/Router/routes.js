const routes = [
    {
        path: '',
        component: () => import('../Pages/Home.vue'),
        name: 'home',
        children: [
            {
                path: '/home',
            }
        ]
    },
    {
        path: '/profile',
        component: () => import('../Pages/Profile.vue'),
        name: 'profile',
        meta: { requiresAuth: true }
    },
    {
        path: '*',
        component: () => import('../Pages/Error404.vue')
    }
]
export default routes;
