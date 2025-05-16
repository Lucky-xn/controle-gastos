import LoginPage from "@/views/system/LoginPage.vue";
import homePage from "@/views/system/homePage.vue";


export default [
  {
    path: '/',
    name: 'login',
    component: LoginPage,
    meta: {
      requiresAuth: false,
    }
  },
  {
    path: '/HomePage',
    name: 'Home Page',
    component: homePage,
    meta: {
      requiresAuth: true,
    }
  }
]