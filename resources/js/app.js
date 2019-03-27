try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Vue = require('vue');

const token = document.head.querySelector('meta[name="csrf-token"]');

if (token) window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
else console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');

window.logout = (event) => {
    event.preventDefault(); 
    document.getElementById('logout-form').submit();
}
