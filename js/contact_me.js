$(function() {

    $('#contactForm input, #contactForm textarea').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            $('#signUpButton').attr('disabled', true).html('Zpracovávám...');
        },
        filter: function() {
            return $(this).is(':visible');
        }
    });

    $('a[data-toggle="tab"]').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
});
