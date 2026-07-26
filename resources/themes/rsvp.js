export function initRsvp() {
    const container = document.getElementById('rsvp');

    if (!container) {
        return;
    }

    //get date
    const target = new Date(container.dataset.date);

    //get containers
    const content_weekday = document.getElementById('rsvp-weekday');
    const content_date = document.getElementById('rsvp-date');
    const content_time = document.getElementById('rsvp-time');

    //set data
    updateRsvp(target, content_weekday, content_date, content_time);
    
}

function updateRsvp(target, content_weekday,content_date, content_time){
    const weekday = new Intl.DateTimeFormat('es-ES', {
        weekday: 'long'
    }).format(target);

    const month = new Intl.DateTimeFormat('es-ES', {
        month: 'long'
    }).format(target);

    const year = target.getFullYear();

    const time = new Intl.DateTimeFormat('en-US', {
        hour: 'numeric',
        minute: '2-digit',
        hour12: true
    }).format(target);

    content_weekday.textContent = weekday;
    content_date.textContent = `${target.getDate()} de ${month} de ${year}`;
    content_time.textContent = time;
}