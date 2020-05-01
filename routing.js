var indexPage = "home";
var errorPage = "404";
var parameter = "?";
var routing = {
    "home": "./views/home",
    "about": "./views/about",
    "u/user1": "./views/user1",
    "u/user2": "./views/user2",
    "404": "./views/404"
};

// ASSET JS //
var appjs = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js";
var jquery = document.createElement("script");
jquery.setAttribute("type", "text/javascript");
jquery.setAttribute("src", appsjs);
document.getElementsByTagName("head")[0].appendChild(jquery);

// Change "{}" to your options:
// https://github.com/sampotts/plyr/#options
const player = new Plyr('#player', {});
// Expose player so it can be used from the console
window.player = player;
