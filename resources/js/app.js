require('./bootstrap');
require('leaflet/dist/leaflet.js');


let map = L.map('map').setView([3.854213494326459, 11.50114188187485], 15);

L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    minZoom: 10,
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    accessToken: 'your.mapbox.access.token'
}).addTo(map);

let marker = L.marker([3.854213494326459, 11.50114188187485]).addTo(map);
marker.bindPopup('<b>Oburo</b>');