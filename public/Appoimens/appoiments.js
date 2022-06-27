let $hours, $date, $user;
let iOption;
const noHoursAlert = `<div class="alert alert-danger" role="alert">
<strong>Lo sentimos!</strong> No se encontraron horas disponibles en el dia seleccionado.!</div>`;
$(function () {
    $hours = $('#hours');
    $date = $('#datepicker');
    $user = $('#user');
    $date.change(loadHours);
});
function loadHours() {
    const selectedDate = $date.val();
    const userId = $user.val();
    const url = `/api/schedule/hours?date=${selectedDate}&user_id=${userId}`;
    $.getJSON(url, displayHours);
}
function displayHours(data) {
    console.log(data);
    if (!data || data.length === 0) {
        $hours.html(noHoursAlert);
        return;
    }

    let htmlHours = '';
    iOption = 0;
    if (data) {
        console.log(data);
        const intervals = data;
        intervals.forEach(interval => {
            htmlHours += getRadioIntervalHtml(interval);
        });
    }

    $hours.html(htmlHours);
}
function getRadioIntervalHtml(interval) {
    const text = `${interval.start} - ${interval.end}`;
//     return `<div class="custom-control custom-radio mb-3">
//     <input type="radio" id="interval${iRadio}" name="scheduled_time" class="custom-control-input" value="${interval.start}" required>
//     <label class="custom-control-label" for="interval${iRadio++}">${text}</label>
//   </div>`;

return `
<option id=interval${iOption} value="${interval.start}" for="interval${iOption++}">${text}</option>`
}