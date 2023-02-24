import { createApp } from "vue";
import App from "./components/App.vue";

import './main.css';

let shadowContainer = document.createElement('div');
document.body.appendChild(shadowContainer);
let shadow = shadowContainer.attachShadow({ mode: 'closed' });

let container = document.createElement('div');
container.id = 'changelog-widget';
shadow.appendChild(container);

let style = document.createElement('link');

style.href = 'https://roadmap.test/js/changelog-widget/main.css';
style.type = 'text/css';
style.rel = 'stylesheet';

shadow.appendChild(style);

const app = createApp(App);
app.mount(container);
