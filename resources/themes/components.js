//component modal
export function initModal(btn_id, modal_id) {
    const modal = document.getElementById(modal_id);
    const btn_open = document.getElementById(btn_id);

    if (!modal) {
        return;
    }

    //open Modal
    if (btn_open) {
        btn_open.addEventListener('click', () => {
            openModal(modal, map);
        });
    }

    document.getElementById('close-modal')
        .addEventListener('click', ()=>{
            closeModal(modal);
        });

    document.getElementById('btn-close')
        .addEventListener('click', ()=>{
            closeModal(modal);
        });

    // Cerrar al hacer clic en el fondo
    modal.querySelector('.absolute')
        .addEventListener('click', ()=>{
            closeModal(modal);
        });
}


function openModal(modal) {
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    //create event
    const evento = new CustomEvent('modalOpen');
    window.dispatchEvent(evento);
}

function closeModal(modal) {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

//component map
export function initMap(modal_id, location=[0,0]) {
    const lat = parseFloat(location[0]);
    const lng = parseFloat(location[1]);
    const modal = document.getElementById(modal_id);
    if (!modal) {
        return;

    }

    const container_modal = modal.querySelector('#modal-content');
    if (!container_modal) {
        return;
    }

    container_modal.innerHTML = `<div id="map" class="w-full rounded-lg" style="height:24rem;"></div>`;

    const container = document.getElementById('map');
    if (!container) {
        return;
    }

    const container_modal_function = modal.querySelector('#modal-function');
    if(container_modal_function){
        container_modal_function.innerHTML = `<a
            id="btn-google-maps"
            target="_blank"
            class="rounded-lg bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
            Abrir en Google Maps
        </a>`;

        const btnGoogleMaps = container_modal_function.querySelector('#btn-google-maps');

        btnGoogleMaps.addEventListener('click', (e) => {
            e.preventDefault();
            openGoogleMaps(lat, lng);
        });
    }

    const map = L.map(container).setView([lat, lng], 16);

    //listen event modal
    window.addEventListener('modalOpen', function() {
        // delay 100ms
        setTimeout(() => {
            map.invalidateSize();
        }, 100);
    });

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map);


}

function openGoogleMaps(lat, lng){
    window.open(
        `https://www.google.com/maps/dir/?api=1&destination=${lat},${lng}`,
        '_blank'
    );
}

