var easterEggKeys = new Array('j','i','b','b','y');
var easterEggCurrent = 0;

$(window).keydown(function(e){
	var key = String.fromCharCode(e.keyCode).toLowerCase();
	if (easterEggKeys[easterEggCurrent].toLowerCase() == key) {
		easterEggCurrent++;
		if (easterEggCurrent >= easterEggKeys.length) {
			$('body').append('<div style="position:fixed;bottom:0;right:0;z-index:999;text-align:right;"><img onclick="setTimeout(\'lightning()\',100)" src="'+HABARI_URL+'/system/admin/images/pasaka.png"><marquee style="font-size:2em; color:red;"><b>OMG! PONIES!!</b></marquee></div>');
easterEggCurrent = 0;
		}
	}
	else {
		easterEggCurrent = 0;
	}
});

var flash = 0
var ogbck = 0;
function lightning() {
	flash = flash+1;
	ogbck = $('body').css('background');

	if ( flash == 1 ) { $('body').css('background','white'); setTimeout("lightning()",100); }
	if ( flash == 2 ) { $('body').css('background','black'); setTimeout("lightning()",90); }
	if ( flash == 3 ) { $('body').css('background','red'); setTimeout("lightning()",85); }
	if ( flash == 4 ) { $('body').css('background','blue'); setTimeout("lightning()",80); }
	if ( flash == 5 ) { $('body').css('background','purple'); setTimeout("lightning()",75); }
	if ( flash == 6 ) { $('body').css('background','white'); setTimeout("lightning()",70); }
	if ( flash == 7 ) { $('body').css('background','black'); setTimeout("lightning()",65); }
	if ( flash == 8 ) { $('body').css('background','red'); setTimeout("lightning()",60); }
	if ( flash == 9 ) { $('body').css('background','blue'); setTimeout("lightning()",50); }
	if ( flash == 10 ) { $('body').css('background','purple'); setTimeout("lightning()",40); }
	if ( flash == 11 ) { $('body').css('background','black'); setTimeout("lightning()",30); }
	if ( flash == 12 ) { $('body').css('background','white'); setTimeout("lightning()",25); }
	if ( flash == 13 ) { $('body').css('background','red'); setTimeout("lightning()",20); }
	if ( flash == 14 ) { $('body').css('background','blue'); setTimeout("lightning()",10); }
	if ( flash == 15 ) { $('body').css('background','purple'); setTimeout("lightning()",5); }
	if ( flash == 16 ) { $('body').css('background','white'); setTimeout("lightning()",1); }
	if ( flash == 17 ) { $('body').css('background','black'); setTimeout("lightning()",1); }
	if ( flash == 18 ) { $('body').css('background','blue'); setTimeout("lightning()",1); }
	if ( flash == 19 ) { $('body').css('background','purple'); setTimeout("lightning()",1); }
	if ( flash == 20 ) { flash = 0; $('body').css('background',ogbck); }
}
