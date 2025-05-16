import { createRouter, createWebHistory } from 'vue-router'


import systemRoutes from './routes/systemRoutes'

const routes = [
  ...systemRoutes,
  {
    path: '/:pathMatch(.*)*',
    redirect: '/',
    meta: {
      hidden: true
    }
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
  const token = localStorage.getItem('token');

  if (requiresAuth && !token) {
    return next({ name: 'login' });
  }

  if (to.name === 'login' && token) {
    return next({ name: 'Home Page' });
  }

  next();
});


export default router
