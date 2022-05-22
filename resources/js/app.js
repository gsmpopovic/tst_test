require('./bootstrap');

import { createApp } from 'vue';
import example from './components/ExampleComponent.vue';

let app=createApp({})
app.component('example-component' , example);

app.mount("#app")