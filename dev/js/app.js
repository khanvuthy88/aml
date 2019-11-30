try{
    window.$ = window.jQuery = require('jquery');
    require("current-device").default;
}catch (e) {}