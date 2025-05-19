import LoginPage from "@/views/System/LoginPage.vue";
import homePage from "@/views/System/homePage.vue";
import Settings from "@/views/System/Settings.vue";
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
    meta: {
      requiresAuth: true,
    },
    children: [
      {
        path: '/Settings/Card',
        name: 'Cartões',
        component: Settings,
        meta: {
          requiresAuth: true,
        },
      }
    ]
  },
]