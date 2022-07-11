//import * from "mainScript2.js";

// The date time function
function display_date() {

	var x = new Date();
	//changeMode(x);
	var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
	hours = x.getHours( ) % 12;
	hours = hours ? hours : 12;
	hours = hours.toString().length ==1 ? 0+hours.toString() : hours;

	var minutes = x.getMinutes().toString();
	minutes = minutes.length ==1 ? 0+minutes : minutes;
	
	var seconds = x.getSeconds().toString();
	seconds = seconds.length == 1 ? 0+seconds : seconds;
	
	var month = (x.getMonth()).toString();
	month = month.length == 1 ? 0+month : month;
	
	var dt = x.getDate().toString();
	dt = dt.length == 1 ? 0+dt : dt;
	
	var monthName = [ "January","Februrary","March","April","May","June","July","August","September","October","November","December" ];
	for (var i = 0; i < monthName.length; i++) 
	{
		if (i == month) 
		{
			var x1 = monthName[i] + " " + dt + ", " + x.getFullYear();					
		}
	}

	//var x1 = month + "/" + dt + "/" + x.getFullYear();
	x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
	
	$('[id="nav1b"]').text(x1);
	display_datetime();
}
function display_datetime()
{
	var refresh=1000; // Refresh rate in milli seconds
	mytime=setTimeout('display_date()',refresh);
}


let images = [], x = -1;

function displayPreviousImage() 
{
    x = (x <= 0) ? images.length - 1 : x - 1;
    document.getElementById("home2bi").src = images[x];
}
function displayNextImage() 
{
    x = (x === images.length - 1) ? 0 : x + 1;
    document.getElementById("home2bi").src = images[x];
}

// Function For Home Page Images
function homeImageFunc() {

	let img = document.createElement('img');
	//img.src = "main Images/YA.png";
	img.id = "home2bi";
	
	$.ajax({
		type: 'POST',
		url: 'main PHP files/imagesSrc.php',
		cache: false,
		dataType: 'json',
		data: { folder: 'main Images' },
		success: function (argument) {
			var arrayy = argument;
			$('#home2bi').prop('src', argument[0]);
			let len = argument.length;
			for (var i = argument.length - 1; i >= 0; i--) {
				images[i] = argument[i];
			}
		}
	});

	let src = document.getElementById('home2b');
	src.appendChild(img);

	$('img, video').bind('contextmenu', function (e) { return false; });
}

// function for removing some styles if device is not touch screen
function touchOrNot() {
	if (( 'ontouchstart' in window ) || ( navigator.maxTouchPoints > 0 ) || ( navigator.msMaxTouchPoints > 0 )) {
		//alert(9);
		$('#mainBody').find('*').removeClass('home2Btn-hover nav1a-hover nav2-hover nav3-hover work2b1-hover aheadBack-hover');
	}
}

// fucntion for displaying quotes
function quotesL() {
	$.ajax({
		type: "POST",
		url: "main PHP files/quotes.php",
		data: { get_quote: "quote" },
		success: function(response)
		{
			$('#quotez').html(response);
		}
	});
	//$('#quotez').load('quotes.php');
}

//funtion for navigation in Bio section
function wView(ele, ele2) {
	let ids = document.querySelectorAll('#bio1, #bio2, #bio3, #bio4');
	let idsArray = [...ids];

	let ids2 = document.querySelectorAll('#nav3_Btn1, #nav3_Btn2, #nav3_Btn3, #nav3_Btn4');
	let idsArray2 = [...ids2];

	for (let i = 0, j = 0; i < idsArray.length, j < idsArray2.length; i++, j++) {
		idsArray[i].style.display = 'none';
		idsArray2[j].setAttribute('style', 'background-color: var(--color1); color: var(--color4)');
		if (ele2 == idsArray[i].id && i == j) {
			idsArray[i].style.display = 'block';
			idsArray2[j].setAttribute('style','background-color: var(--color4); color: var(--color1)');
		}
	}
}

// function for navigation in work section
function wView2(ele, ele2) {
	// body...
	let ids3 = document.querySelectorAll('#work1, #work2, #work3, #work4, #work5');
	let idsArray3 = [...ids3];

	let ids4 = document.querySelectorAll('#nav2_Btn1, #nav2_Btn2, #nav2_Btn3, #nav2_Btn4, #nav2_Btn5');
	let idsArray4 = [...ids4];

	for (let i = 0, j = 0; i < idsArray3.length, j < idsArray4.length; i++, j++) {
		idsArray3[i].style.display = 'none';
		idsArray4[j].setAttribute('style', 'background-color: var(--color1); color: var(--color4)');
		if (ele2 == idsArray3[i].id && i == j) {
			idsArray3[i].style.display = 'block';
			idsArray4[j].setAttribute('style','background-color: var(--color4); color: var(--color1)');
		}
	}
}

// feedback form handeler function
function feedbackFormHandeler(arg) {
	arg.preventDefault(); // avoid to execute the actual submit of the form.
	var badWords = [
		"fuck", "stfu", "crap", "shit", "trash", "bitch", "bc", "bullshit", "cuss", "hell", "curse", "getlost", "moth", "fath", "douche", "abuse"
	];
	let name = $("[name='Name']").val().toLowerCase();
	let msg = $("[name='Message']").val().toLowerCase();
	let email = $('[name = "E-mail"]').val();
	let web = $('[name = "website"]').val();
	
	if ($.inArray(name, badWords) !== -1 || $.inArray(msg, badWords) !== -1) 
	{
		alert("You Message contains bad words, Kindly remove them.");
	}
	else 
	{
    	$.ajax({
    		type: "POST",
    		url: 'main PHP files/feedbackFormHandeler.php',
    		data: { 'Name': name, 'E-mail': email, 'Message': msg, 'website': web},
    		success: function(datal)
    		{
		       	$("input[type='text'], input[type='email'], textarea").val('');
		       	alert(datal);
    		}
    	});
    }
}

// feedback form styling function
function feedbackFormStyle(arg) {
	if (arg.target.matches('#f1 input')) {
		$('#f1').css('border-color', 'var(--color5)');
		$('#f2, #f3').css('border-color', 'var(--color3)');
	}
	else if (arg.target.matches('#f2 input')) {
		$('#f2').css('border-color', 'var(--color5)');
		$('#f1, #f3').css('border-color', 'var(--color3)');
	}
	else if (arg.target.matches('#f3 textarea')) {
		$('#f3').css('border-color', 'var(--color5)');
		$('#f1, #f2').css('border-color', 'var(--color3)');
	}
	else {
		$('#f1, #f2, #f3').css('border-color', 'var(--color3)');
	}
}

// To be executed after the document has been ready
$(document).ready(function () {
	$.ajaxSetup({cache: false});
	main();
});

// The main function
function main() {
	$.ajaxSetup({cache: false});
	display_datetime();
	homeImageFunc();

	$('#home2').click(function (event) {				
		if (event.target.matches('#home2a, #home2a i')) 
			displayPreviousImage();
		else if (event.target.matches('#home2c, #home2c i')) 
			displayNextImage();
		else
		{

		}
	});

	touchOrNot();

	$('#nav1').click(function (event) {
		//$('#searchDisplay').slideUP('fast');
		if (event.target.matches('#nav1a_Btn1, #nav1a_Btn1 i')) {
			$('#bio, #work').hide();
			$('#home').slideDown();
		}
		else if (event.target.matches('#nav1a_Btn2, #nav1a_Btn2 i')) {
			$('#home, #work').hide();
			$('#bio').slideDown();
		}
		else if (event.target.matches('#nav1a_Btn3, #nav1a_Btn3 i')) {
			$('#home, #bio').hide();
			$('#work').slideDown();
		}
		else if (event.target.matches('#searchBar1a, #searchBar1a_Btn1')) {
			$('#searchBar1a').show(300);
			$('#nav1c').css('border', '2px solid var(--color5)');
			$('#searchBar1a_Btn1').hide(300).css({'color':'var(--color2)', 'cursor':'default'});
		}
		else
		{
			$('#searchBar1a').hide(300).val('');
			$('#nav1c').css('border', '2px solid var(--color1)');
			$('#searchBar1a_Btn1').show(300).css({'color':'var(--color1)', 'cursor':'pointer'});
		}
	});

	// calling navigation function for bio section
	$('#nav2').click( function (event) {
		if (event.target.matches('#nav2_Btn1')) {
			wView2('nav2_Btn1', 'work1');
		}
		else if (event.target.matches('#nav2_Btn2')) {
			wView2('nav2_Btn2', 'work2');
		}
		else if (event.target.matches('#nav2_Btn3')) {
			wView2('nav2_Btn3', 'work3');
		}
		else if (event.target.matches('#nav2_Btn4')) {
			wView2('nav2_Btn4', 'work4');
		}
		else if (event.target.matches('#nav2_Btn5')) {
			wView2('nav2_Btn5', 'work5');
		}
		else {

		}
	});

	// calling navigation function for work section
	$('#nav3').click( function (event) {
		if (event.target.matches('#nav3_Btn1')) {
			wView('nav3_Btn1', 'bio1');
		}
		else if (event.target.matches('#nav3_Btn2')) {
			wView('nav3_Btn2', 'bio2');
		}
		else if (event.target.matches('#nav3_Btn3')) {
			wView('nav3_Btn3', 'bio3');
		}
		else if (event.target.matches('#nav3_Btn4')) {
			wView('nav3_Btn4', 'bio4');
		}
		else {

		}
	});

	// filters section for canva work section
	$('#work2b1').click( function (event) {
		$('#logoId, #posterId, #othersId').show();
		$('#allBtn, #postersBtn, #logosBtn, #othersBtn').css({'color': 'var(--color4)', 'background-color': 'var(--color1)'});
		if (event.target.matches('#allBtn')) {
			$('#logoId, #posterId, #othersId').show();
			$('#allBtn').css({'color': 'var(--color1)', 'background-color': 'var(--color4)'});
		}
		else if (event.target.matches('#logosBtn')) {
			$('#logoId').show();
			$('#posterId, #othersId').hide();
			$('#logosBtn').css({'color': 'var(--color1)', 'background-color': 'var(--color4)'});
		}
		else if (event.target.matches('#othersBtn')) {
			$('#othersId').show();
			$('#posterId, #logoId').hide();
			$('#othersBtn').css({'color': 'var(--color1)', 'background-color': 'var(--color4)'});
		}
		else if (event.target.matches('#postersBtn')) {
			$('#posterId').show();
			$('#othersId, #logoId').hide();
			$('#postersBtn').css({'color': 'var(--color1)', 'background-color': 'var(--color4)'});
		}
		else {

		}
	});

	// what happen while typing something in search bar
	$('#searchBar1').keypress( function (argument) {
		if (event.which == '13')
			event.preventDefault();
	});

	// calling feedback handeler function
	$('#feedback2').submit(function (arg) { feedbackFormHandeler(arg); });
	$('#feedback').click(function (arg) { feedbackFormStyle(arg); });

	quotesL();
	setInterval(quotesL, 20000);

	$('img, video').bind('contextmenu', function (e) { return false; });
}