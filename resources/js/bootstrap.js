import Aos from 'aos';
import axios from 'axios';
window.axios = axios;
import { initAOS } from './modules/aos';
import { initTyped } from './modules/typed';
import Alpine from 'alpinejs';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

initAOS();
initTyped();

Alpine.start();