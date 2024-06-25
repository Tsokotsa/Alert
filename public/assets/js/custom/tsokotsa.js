var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})


// Time Schedule
$("#schedule_dt").flatpickr({
  enableTime: true,
  dateFormat: "Y-m-d H:i",
});

// Test-Sms Mask
Inputmask({
  //"mask" : "(8) 999 9999"
  "mask" : "(8*{2,1}) 999 9999",
  definitions: {
    "*": {
        validator: '[2-7]',
        cardinality: 1,
        casing: "lower"
    }
}
}).mask("#test-sms");

// Test-sms Text area maximum chars
$('#sms-text').maxlength({
  warningClass: "badge badge-primary",
  limitReachedClass: "badge badge-success"
});

$('#telegram-text').maxlength({
  warningClass: "badge badge-primary",
  limitReachedClass: "badge badge-success"
});



// Test-Email form
var quill = new Quill('#test-email-editor', {
  modules: {
      toolbar: [
          [{
              header: [1, 2, false]
          }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
      ]
  },
  placeholder: 'This is a test e-mail',
  theme: 'snow' // or 'bubble'
});
