import LoginPage from "@/views/System/LoginPage.vue";
import homePage from "@/views/System/homePage.vue";
import RegisterCard from "@/views/System/RegisterCard.vue";
import SettingsLayout from "@/layouts/SettingsLayout.vue";

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
  },
  {
    path: '/Settings',
    name: 'Configurações',
    component: SettingsLayout,
    redirect: '/Settings/Card',
    meta: {
      requiresAuth: true,
    },
    children: [
      {
        path: 'Card',
        name: 'Cartões',
        component: RegisterCard,
        meta: {
          requiresAuth: true,
        },
      }
    ]
  },
]