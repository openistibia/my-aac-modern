$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});

$(document).popover({selector: "span[data-action=popover]", trigger: "hover", html: true, container: "body"})

$(document).ready(function () {
	var url = window.location;
	$('ul.nav a[href="' + url + '"]').parent().addClass('active');
	$('ul.nav a').filter(function () {
		return this.href == url;
	}).parent().addClass('active').parent().parent().addClass('active');
});

$('img').click(function(){
	$('.selected').removeClass('selected');
	$(this).addClass('selected');
});

function updateServerSaveTimer()
{
	secondsToServerSave -= 1;
	if (secondsToServerSave < 0) {
		secondsToServerSave = 86400;
	}

	var hours = Math.floor(secondsToServerSave / 3600);
	var str;
	if (hours != 1) {
		str = hours + " hours, ";
	} else {
		str = "1 hour, ";
	}

	str += Math.floor((secondsToServerSave % 3600) / 60) + " min and " + (secondsToServerSave % 60) + " sec.";
	document.getElementById('timeToServerSave').textContent = str;
}

$(function updateServerSaveTimer() {
	setInterval('updateServerSaveTimer()', 1000);
});

// toggle masked texts with readable texts
function ToggleMaskedText(a_TextFieldID)
{
  var m_DisplayedText = document.getElementById('Display' + a_TextFieldID).innerHTML;
  var m_MaskedText = document.getElementById('Masked' + a_TextFieldID).innerHTML;
  var m_ReadableText = document.getElementById('Readable' + a_TextFieldID).innerHTML;
  if (m_DisplayedText == m_MaskedText) {
    document.getElementById('Display' + a_TextFieldID).innerHTML = document.getElementById('Readable' + a_TextFieldID).innerHTML;
    document.getElementById('Button' + a_TextFieldID).textContent = 'Hide';
  } else {
    document.getElementById('Display' + a_TextFieldID).innerHTML = document.getElementById('Masked' + a_TextFieldID).innerHTML;
    document.getElementById('Button' + a_TextFieldID).textContent = 'Show';

  }
}

$(document).ready(function() {
  $('.computer.only .dropdown.item')
    .popup({
      inline     : true,
      hoverable  : true,
      position   : 'bottom left',
      delay: {
        show: 300,
        hide: 800
      }
    })
  ;
  $('.ui.dropdown').dropdown();
  $('.ui.accordion').accordion();

  // bind "hide and show vertical menu" event to top right icon button 
  $('.ui.toggle.button').click(function() {
    $('.ui.vertical.menu').toggle("250", "linear")
  });
});

  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 4000
    })
  });
