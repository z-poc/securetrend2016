var home_veg = new Waypoint({
    element: document.getElementById('services'),
    handler: function(direction) {
        window.history.pushState('', '', '#home')
    },
    offset: 100
});
var services = new Waypoint({
    element: document.getElementById('services'),
    handler: function(direction) {
        window.history.pushState('', '', '#services')
    },
    offset: 20
});
var services_veg = new Waypoint({
    element: document.getElementById('works'),
    handler: function(direction) {
        window.history.pushState('', '', '#services')
    },
    offset: 100
});
var projects = new Waypoint({
    element: document.getElementById('works'),
    handler: function(direction) {
        window.history.pushState('', '', '#works')
    },
    offset: 20
});
var projects_veg = new Waypoint({
    element: document.getElementById('contactus'),
    handler: function(direction) {
        window.history.pushState('', '', '#works')
    },
    offset: 100
});

var contactus = new Waypoint({
    element: document.getElementById('contactus'),
    handler: function(direction) {
        window.history.pushState('', '', '#contactus')
    },
    offset: 20
});