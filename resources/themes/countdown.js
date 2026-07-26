export function initCountdown() {
    const container = document.getElementById('countdown');

    if (!container) {
        return;
    }

    //get date
    const target = new Date(container.dataset.date);

    //get containers
    const content_days = document.getElementById('countdown-days');
    const content_hours = document.getElementById('countdown-hours');
    const content_minutes = document.getElementById('countdown-minutes');
    const content_seconds = document.getElementById('countdown-seconds');

    //set data
    updateCountdown(target, content_days, content_hours, content_minutes, content_seconds);

    //each 1seg
    setInterval(() => {
        updateCountdown(
            target,
            content_days,
            content_hours,
            content_minutes,
            content_seconds
        );
    }, 1000);
}

function updateCountdown(target, content_days, content_hours, content_minutes, content_seconds) {
    const now = new Date();
    let diff = Math.floor((target - now) / 1000);

    if (diff <= 0) {
        console.log("Event started");
        return;
    }

    const days = Math.floor(diff / 86400);
    diff %= 86400;

    const hours = Math.floor(diff / 3600);
    diff %= 3600;

    const minutes = Math.floor(diff / 60);
    const seconds = diff % 60;

    content_days.textContent = days;
    content_hours.textContent = hours;
    content_minutes.textContent = minutes;
    content_seconds.textContent = seconds;
}