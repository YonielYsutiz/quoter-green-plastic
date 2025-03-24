import { createRouter, createWebHistory } from 'vue-router'
import Users from '../js/components/Users.vue'
import Login from '../js/components/Login.vue'
import Order from '../js/components/order.vue' 

const routes = [
  { path: '/register', component: Users },
  { path: '/login', component: Login },
  { path: '/order', component: Order },
]

const router = createRouter({
  history: createWebHistory('/quoter/'),
  routes
})

export default router
