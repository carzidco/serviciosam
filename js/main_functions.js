$(document).ready(function(e)
{
	var checkExist = setInterval(function() {
		if ($('#mainAccessMenu').length) {
			setActivePage();
		}
	}, 100); // check every 100ms

	$("#createProduct").click(function(e)
	{
		uploadedImage();
	});
});

$(window).bind("load", function() {
	setActivePage();
});

function setActivePage()
{
	var currentPage = window.location.pathname.split('/')[window.location.pathname.split('/').length -1]
	$("#mainAccessMenu li").each(function(e)
	{
		var listElement = $(this).find("a").attr("href");
		if(listElement == currentPage)
		{
			if(!$(this).hasClass("active"))
			{
				$(this).addClass("active");
			}
		}
		else
		{
			if($(this).hasClass("active"))
			{
				$(this).removeClass("active");
			}
		}
	});
}

function uploadedImage()
{
	$.ajax({
		url: 'Product.php',
		type: 'post',
		data: { "create": "1"},
		success: function(response) { alert(response); }
	});
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