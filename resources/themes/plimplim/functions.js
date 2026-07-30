import { initModal, initMap } from "../components";

//load functions
document.addEventListener('DOMContentLoaded', () => {
    initModal('open-modal-rsvp','modal-map');
    initMap('modal-map', [3.451646,-76.531985]);

});