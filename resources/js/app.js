import { createApp,defineComponent } from 'vue';
import ElementPlus from 'element-plus';
import router from '../router/router';


const App = defineComponent({
   template: `
     <div>
       <router-view></router-view>
     </div>
   `,
 });

const app = createApp(App);

app.use(ElementPlus);
app.use(router);
app.mount("#app");