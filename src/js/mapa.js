if(document.querySelector('#mapa')) {

const lat = -32.9391953;
const lng = -60.6360828;
const zoom = 16 ;

    const map = L.map('mapa').setView([lat, lng], zoom);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([lat, lng]).addTo(map)
    .bindPopup(`<h2 class="mapa__heading">DevWebCamp</h2>
    <p class="mapa__texto">Centro Cultural Parque España, Rosario, Argentina</p>`)
    .openPopup();DevWebCamp
}