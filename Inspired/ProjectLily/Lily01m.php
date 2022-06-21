

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project Lily 01 M</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="../ProjectLilyStyles/Lily01Style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<div class="main">
		<div class="Btn">
			<button onclick="window.history.back();" title="Go Back">
				<i class="material-icons" title="Go Back">arrow_backward</i>
			</button>
		</div>

		<div class="pageContent">
			<div class="showMain" id="showMainId">
				<div class="showDesc" id="showDescId">
					<h1>Movie Title</h1>
					<p>Eng | 2021 | U</p>
					<p>Available Audios: TBD, TBD<br>Available Subtitles: TBD, TBD</p>

					<div class="showDescBtn">
						<button>Watch Movie</button>
						<button><i class="material-icons">library_add</i></button>
						<button><i class="material-icons">share</i></button>
					</div>
				</div>

				<div class="showPost" id="showPostId">
					<img src="../Posters/Cropped/Originals.png">
				</div>
			</div>

			<div class="categoryBtn" id="showCategoryBtnid">
				<button id="trai" title="Click to view Trailers and Extras" style="background-color: #123456;">Clips & Info</button>
				<button id="more" title="Click to view More Like This">More Like This</button>
			</div>	

			<div class="clipInfo" id="clipInfoId" style="display: flex;">
				<div class="sInfo" id="sInfoId">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>

				<div class="sClip" id="sClipId">
					<div class="categoryContentTile" id="cTile"><p>Clip 1: No Description</p></div>
					<div class="categoryContentTile" id="cTile"><p>Clip 2: No Description</p></div>
				</div>
			</div>

			<div class="moreLike" id="moreLikeId">
				<div class="categoryContentTile">
					<div  id="cat1z1" class="thumbnail" title="click to view this"></div>
					<div class="middle">
						<div class="text">
							<p>Content 1</p>
						</div>
					</div>
				</div>

				<div class="categoryContentTile">
					<div  id="cat1z2" class="thumbnail" title="click to view this"></div>
					<div class="middle">
						<div class="text">
							<p>Content 2</p>
						</div>
					</div>
				</div>

				<div class="categoryContentTile">
					<div  id="cat1z3" class="thumbnail" title="click to view this"></div>
					<div class="middle">
						<div class="text">
							<p>Content 3</p>
						</div>
					</div>
				</div>

				<div class="categoryContentTile">
					<div  id="cat1z4" class="thumbnail" title="click to view this"></div>
					<div class="middle">
						<div class="text">
							<p>Content 4</p>
						</div>
					</div>
				</div>

				<div class="categoryContentTile">
					<div  id="cat1z5" class="thumbnail" title="click to view this"></div>
					<div class="middle">
						<div class="text">
							<p>Content 5</p>
						</div>
					</div>
				</div>

				<div class="categoryContentTile">
					<div  id="cat1z6" class="thumbnail" title="click to view this"></div>
					<div class="middle">
						<div class="text">
							<p>Content 6</p>
						</div>
					</div>
				</div>

				<div class="categoryContentTile">
					<div  id="cat1z7" class="thumbnail" title="click to view this"></div>
					<div class="middle">
						<div class="text">
							<p>Content 7</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$('img').bind('contextmenu', function(e){ return false;});

		$('#showCategoryBtnid button').click(function (ele) {
			var z = ele;
			if (ele.target.matches('#epi'))
				z.id = 'epi';
			if (ele.target.matches('#trai'))
				z.id = 'trai';
			if (ele.target.matches('#more'))
				z.id = 'more';
			var ids = document.querySelectorAll("#showEpsId, #clipInfoId, #moreLikeId");
			var idsArray = [...ids];
			var x = document.getElementById('showCategoryBtnid');
			var y = x.getElementsByTagName('button');
			for (var i = 0, j = 0; i < y.length, j < idsArray.length ; i++, j++) 
			{
				y[i].style.backgroundColor = "transparent";
				idsArray[j].style.display = "none";
				if (y[i].id == z.id && i == j) 
				{
					y[i].style.backgroundColor = '#123456';
					idsArray[j].style.display = "flex";
				}
			}
		});

		$(document).ready(function() {
			$.ajax({
				type: 'GET',
				url: 'Inspired/ProjectLilyAjaxHandeler.php',
				cache: false,
				dataType: 'json',
				data: { fname: 'poster'},
				success: function (datal) 
				{
					var el = [], x1 = [];
					var arr = $('[id^="cat1z"]');
					var i, j;
					for (i = 0; i < datal.length; i++) 
					{
						el[i] = document.createElement('img').cloneNode();
						el[i].src = datal[i];
						x1[i] = arr[i];
						x1[i].appendChild(el[i]);
					}
				}
			});

			$.ajax({
				type: 'GET',
				url: 'Inspired/ProjectLilyAjaxHandeler.php',
				cache: false,
				dataType: 'json',
				data: { fname: 'channelPost'},
				success: function (datal) 
				{
					alert(datal);
					var x1= [], x2 = [];
					var narr = $('[id^="cTile"]');
					for (var i = 0; i < datal.length; i++) 
					{
						x1[i] = document.createElement('img');
						x1[i].src = datal[i];
						x2[i] = narr[i];
						x2[i].appendChild(x1[i]);
					}
				}
			});
		});	
	</script>
</body>
</html>