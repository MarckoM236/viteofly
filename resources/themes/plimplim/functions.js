import { initModal, initMap } from "../components";

//load functions
document.addEventListener('DOMContentLoaded', () => {
    const locationElement = document.getElementById('location');
    const location = locationElement.getAttribute('data-location');
    const [latitud, longitud] = location.split(',').map(Number);
    
    initModal('open-modal-rsvp','modal-map');
    initMap('modal-map', [latitud, longitud]);

    //listen submit event
    const form = document.getElementById('form-confirmation');
    form.addEventListener('submit', async (event) => {

        event.preventDefault(); 
        const data = new FormData(form);
        const url = form.action; 

        await sendConfirmation(data, url);

    });
});

//send confirmation
async function sendConfirmation(data, url) {
    
    try {
        const response = await fetch(url, {
            method: 'POST',
            body: data 
        });

        if (response.ok) {
            const res = await response.json();
            if(res.success) {
                alert(res.message);
                window.location.reload();
            }
            
        } else {
            console.error('Error en el servidor:', res.message);
        }

    } catch (error) {
        console.error('Error de red:', error);
    }


}