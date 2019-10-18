require('./bootstrap');
window.Vue = require('vue');
const $ = require('jquery');


function init() {

  token = $('meta[name="csrf-token"]').attr('content');
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token;

  new Vue({
    el: '#app'
  });
}

$(document).ready(init);
