import {createApp} from 'vue';
import Users from './components/Users.vue'; 

const app = createApp({
   components : {Users}  
});

app.mount('#app');