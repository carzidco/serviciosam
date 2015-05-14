/*
 * jQuery File Upload Plugin JS Example 8.9.1
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/* global $, window */

$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: 'server/php/'
    });

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    if (window.location.hostname === 'blueimp.github.io') {
        // Demo settings:
        $('#fileupload').fileupload('option', {
            url: '//jquery-file-upload.appspot.com/',
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            maxFileSize: 5000000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        });
        // Upload server status check for browsers with CORS support:
        if ($.support.cors) {
            $.ajax({
                url: '//jquery-file-upload.appspot.com/',
                type: 'HEAD'
            }).fail(function () {
                $('<div class="alert alert-danger"/>')
                    .text('Upload server currently unavailable - ' +
                            new Date())
                    .appendTo('#fileupload');
            });
        }
    } else {
        // Load existing files:
        $('#fileupload').addClass('fileupload-processing');
        $.ajax({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: $('#fileupload').fileupload('option', 'url'),
            dataType: 'json',
            context: $('#fileupload')[0]
        }).always(function () {
            $(this).removeClass('fileupload-processing');
        }).done(function (result) {
            $(this).fileupload('option', 'done')
                .call(this, $.Event('done'), {result: result});
        });
    }

});

function addAction()
{
    var imgCounter = $("#imgCounter").val();
    var template = "";

    switch(imgCounter)
    {
        case "0":
        template = $(".template-upload").find(".name")[0];
        $("#productImage").val(template.innerText);
        $("#image").val(template.innerText);
        $("#imgCounter").val("1");
        break;
        /*case "1":
        template = $(".template-upload").find(".name")[1];
        $("#productImageBig").val(template.innerText);
        $("#imgCounter").val("2");
        break;*/
        default:
        alert('La cantidad de imagenes necesarias no debe ser excedida');
        break;
    }
    allowedImages();
}

function allowedImages()
{
    var imgCounter = parseInt($("#imgCounter").val());
    if(imgCounter == 1)
    {
        $(".btn-addfiles").hide();
        $(".btn-default").show();
    }
    else
    {
        $(".btn-addfiles").show();
        $(".btn-default").hide();
    }
}


function cancelAction()
{   
    var imgCounter = parseInt($("#imgCounter").val());

    switch(imgCounter)
    {
        case 1:
        case 2:
            imgCounter--;
            $("#imgCounter").val(imgCounter);
        break;
    }
    allowedImages();
    $("#image").val("");
}

function addFieldValidation(inputClass)
{
    var elements = document.getElementsByTagName(inputClass);
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Este campo no puede quedar sin información");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
}

document.addEventListener("DOMContentLoaded", function() {
    addFieldValidation("INPUT");
    addFieldValidation("TEXTAREA");
})

function getBaseUrl(isMaintenance)
{
    var host = location.hostname + "/";
    var path = window.location.pathname.split('/');
    var i;
    var limit = isMaintenance ? 1 : 2;

    for(var i=1; i < path.length - limit ; i=i+1)
    {
        host = host + path[i] + "/";
    }

    return host;

}
