import { createRouter, createWebHistory } from 'vue-router'
import systemRoutes from './routes/systemRoutes'

const routes = [
  ...systemRoutes,
  {path: '/:pathMatch(.*)*', redirect: '/'}
];

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
