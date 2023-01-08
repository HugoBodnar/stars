import './bootstrap'
import { createApp } from 'vue'
import App from './App.vue'

const mountEl = document.querySelector("#app");
createApp(App, { stars: JSON.parse(mountEl.dataset.stars) }).mount("#app");
mountEl.removeAttribute('data-stars');
