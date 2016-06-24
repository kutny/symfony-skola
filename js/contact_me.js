var bucketName = 'symfony-skola';
var awsRegion = 'eu-west-1';

AWS.config.region = awsRegion;

function getExtensionFromFilename(filename)
{
    return filename.split('.').pop();
}

function saveFileToS3(file, targetFilePath, successCallback, errorCallback)
{
    var putObjectParams = {
        Bucket: bucketName,
        Key: targetFilePath,
        ContentType: file.type,
        Body: file
    };

    var s3 = new AWS.S3();
    s3.makeUnauthenticatedRequest('putObject', putObjectParams, function(err, data) {
        if (err) {
            errorCallback(err);
        }
        else {
            successCallback(data);
        }
    });
}

function submitValidatedForm($form) {
    $form.attr('cv-already-uploaded', 1);
    $form.submit();
}

$(function() {

    $('#contactForm input, #contactForm textarea').jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            if ($form.attr('cv-already-uploaded')) {
                return;
            }

            event.preventDefault();

            $('#signUpButton').attr('disabled', true).html('Zpracovávám...');

            var email = $('#email').val();

            var cvFile = document.getElementById('cv').files[0];
            var targetFilePath = email + '/cv.' + getExtensionFromFilename(cvFile.name);

            var cvUploadedCallback = function(data) {
                var targetFileUrl = 'https://s3-' + awsRegion + '.amazonaws.com/' + bucketName + '/' + targetFilePath;
                $('#cvUrl').val(targetFileUrl);

                submitValidatedForm($form);
            };

            var cvUploadFailedCallback = function() {
                submitValidatedForm($form);
            };

            saveFileToS3(cvFile, targetFilePath, cvUploadedCallback, cvUploadFailedCallback);
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
