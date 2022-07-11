
// this file is for horizontal navigation elements especially in work section

//function 1
$('#work1').ready(function () {
	//Templates section images
	$.ajax({
		type: 'POST',
		url: 'main PHP files/imagesSrc.php',
		cache: false,
		dataType: 'json',
		data: { folder: 'TemplatesImages' },
		success: function (argument) {
			let x1 = [], x2 = [];
			let farr = $('[id^="fimg"]');
			for (let i = 0; i < argument.a.length; i++) 
			{
				x1[i] = document.createElement('img');
				x1[i].src = argument.a[i];
				x1[i].id = "ffimg" + (i+1).toString();//farr[i].id;
				x2[i] = farr[i];
				x2[i].appendChild(x1[i]);
			}

			let x3 = [], x4 = [];
			let sarr = $('[id^="simg"]');
			for (let i = 0; i < argument.b.length; i++) 
			{
				x3[i] = document.createElement('img');
				x3[i].src = argument.b[i];
				x3[i].id = "ssimg" + (i+1).toString();
				x4[i] = sarr[i];
				x4[i].appendChild(x3[i]);
			}

			let x5 = [], x6 = [];
			let insparr = $('[id^="inspImg"]');
			for (let i = 0; i < argument.c.length; i++) 
			{
				x5[i] = document.createElement('iframe');
				x5[i].src = argument.c[i];
				x5[i].id = "inspIimg" + (i+1).toString();
				x5[i].setAttribute('width', window.innerWidth - 150);
				x5[i].setAttribute('height', (56.25/100)*(window.innerWidth - 150));

				x6[i] = insparr[i];
				x6[i].appendChild(x5[i]);

				/*//x6[i] = insparr[i];
				src = '../' + argument.c[i];
				alert(insparr[i].id);
				insparr[i].load(src);
				$('#inspImg1').load(src);*/
			}
		}
	});
	// every time arranges the elements in random order
	$('#work1a2i').ready(function () {
		let arr = $('#work1a2i .container');
		let arrLen = arr.length;
		for (var i = 0; i < arrLen; i++) {
			let val = Math.floor(Math.random() * arrLen) + 1;
			arr[i].style.order = val;
		}
	});

	$('#work1b2i').ready(function () {
		let arr = $('#work1b2i .container');
		let arrLen = arr.length;
		for (var i = 0; i < arrLen; i++) {
			let val = Math.floor(Math.random() * arrLen) + 1;
			arr[i].style.order = val;
		}
	});
}).click(function (event) { // Click function for Work1 section
	var pos = $('#work1a2').scrollLeft();
	var pos2 = $('#work1b2').scrollLeft();
	
	if (event.target.matches('#Ahead1, #Ahead1 i'))
		$('#work1a2').scrollLeft(pos + 700);
	else if (event.target.matches('#Back1, #Back1 i'))
		$('#work1a2').scrollLeft(pos - 700);
	else if (event.target.matches('#Ahead2, #Ahead2 i'))
		$('#work1b2').scrollLeft(pos2 + 700);
	else if (event.target.matches('#Back2, #Back2 i'))
		$('#work1b2').scrollLeft(pos2 - 700);
	else {
		const eleId = event.target.id;
		// display code for form templates
		let arr = $('[id^="ffimg"]');
		const arrLen = (arr.length);
		for (let i = 0; i < arrLen; i++) {
			if (eleId == arr[i].id) {
				//alert(22);
				$.ajax({
					type: 'GET',
					url: 'main PHP files/formsCode.php',
					dataType: 'json',
					contentType: 'application/json',
					data: { 'index': i, 'elementId': eleId },
					success: function (argument) {
						let ida = "#fmcf" + (i+1).toString();
						//alert(ida);
						$(ida).empty();
						if ($(ida).length == 1) {
							let x = document.createElement('iframe');
							x.src = argument.a;
							$(ida).append(x);;
							/*$('<iframe>', {
								src: argument.a,
								scrolling: no,
							}).appendTo(ida);*/
						}
						let idb = "#fmc" + (i+1).toString();
						//alert(idb);
						$(idb).slideDown();
						let idc = idb + "c1";
						//alert(idc);
						$(idc).html(argument.b);
						let idd = idb + "c2";
						//alert(idd);
						$(idd).html(argument.c);
						//let idc = idb + "c1";
						//$(idc).html(argument.b);
					}
				});
				break;
			}
		}
		// display codes for search templates
		let arr2 = $('[id^="ssimg"]');
		const arr2Len = (arr2.length);
		for (let i = 0; i < arr2Len; i++) {
			if (eleId == arr2[i].id) {
				//alert(33);
				$.ajax({
					type: 'GET',
					url: 'main PHP files/searchsCode.php',
					dataType: 'json',
					contentType: 'application/json',
					data: { 'index': i, 'elementId': eleId },
					success: function (argument) {
						let ida = "#smcf" + (i+1).toString();
						//alert(ida);
						$(ida).empty();
						if ($(ida).length == 1) {
							let x = document.createElement("iframe");
							x.src = argument.a;
							let src = $(ida);
							src.append(x);
						}
						let idb = "#smc" + (i+1).toString();
						//alert(idb);
						$(idb).slideDown();
						let idc = idb + "c1";
						//alert(idc);
						$(idc).html(argument.b);
						let idd = idb + "c2";
						//alert(idd);
						$(idd).html(argument.c);
						//let idc = idb + "c1";
						//$(idc).html(argument.b);
					}
				});
				break;
			}
		}
	}
});

$('#work2').ready(function () {
	// body...
	$('#work2b2').load('canva/canvaWork.php');
	/*let arr = $('#work2b2 .canvaWork');
	let arrLen = arr.length;
	alert(arrLen);
	for (var i = 0; i < arrLen; i++) {
		let val = Math.floor(Math.random() * arrLen) + 1;
		arr[i].style.order = val;
	}*/
});

$('[id ^= "cmc"]').ready(function () {
	// body...
	let x = document.createElement('img');
	x.src = "https://drive.google.com/file/d/1zV0UH8tCJJGCK2SesbhtPxlF9uQOqXWP/preview";
	let src = $("#cmcf3");
	src.append(x);

	x = document.createElement('img');
	x.src = "https://drive.google.com/file/d/1j0z4aI-5jejLi9G4g4oYIkgN7O2vR8xa/preview";
	src = $('#cmcf2');
	src.append(x);

	x = document.createElement('img');
	x.src = 'https://drive.google.com/file/d/1GXHUSbCM4AhWy_eawCdi5bSoQSwt_BJK/preview';
	src = $('#cmcf1');
	src.append(x);

	x = document.createElement('img');
	x.src = 'https://drive.google.com/file/d/15SDXJ0PtwWNtHXUwV5fKaDKoQlcF2-o0/preview';
	src = $('#cmcf4');
	src.append(x);

	x = document.createElement('img');
	x.src = "https://drive.google.com/file/d/1BbEwhSucvD7tbGU4j3aack_kRty7FR9_/preview";
	src = $('#cmcf5');
	src.append(x);
});

