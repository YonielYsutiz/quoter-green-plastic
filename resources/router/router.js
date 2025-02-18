import { createRouter, createWebHistory } from 'vue-router'
import Users from '../js/components/Users.vue'
import Login from '../js/components/Login.vue' 

const routes = [
  { path: '/register', component: Users }, // Ruta de inicio
  { path: '/login', component: Login }, // Ruta para el login
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
