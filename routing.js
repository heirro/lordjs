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

var plyrapp = "https://cdn.plyr.io/3.6.1/demo.js";
var plyrjs = document.createElement("script");
plyrjs.setAttribute("type", "text/javascript");
plyrjs.setAttribute("src", plyrapp);
document.getElementsByTagName("head")[0].appendChild(plyrjs);
