

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Project Lily 03 S</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="../ProjectLilyStyles/Lily03Style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<div class="navigation">
		<div class="navBtn" id="navBtnId">
			<button title="Home Page" id="b1"><i>Service Logo</i></button>
			<button title="Click..." id="b2">Shows</button>
			<button title="Click..." id="b3">Movies</button>
			<button title="Click..." id="b4">News</button>
			<button title="Click..." id="b5">Premium</button>
		</div>
		<div class="other">
			<div class="search" id="searchContainerId">
				<form>
					<input type="search" name="search" id="searchId" placeholder="Search..." autocomplete="off" style="display: none;">
					<span><i class="material-icons" id="searchButtonId" title="Search Bar">search</i></span>
				</form>
			</div>
			<button id="b6"><i class="material-icons" id="b6">account_circle</i></button>
		</div>
	</div>
	<div class="menu" id="idMenu">
		<button title="Click to view your account" id="menuB1"><i class="material-icons">account_circle</i>Your Account</button>
		<button title="Click to view settings" id="menuB2"><i class="material-icons">settings</i>Settings</button>
		<button title="Click to login/logout" id="menuB3"><i class="material-icons">login</i>Log In</button>
		<button title="Click to view help section" id="menuB4"><i class="material-icons">help</i>Help</button>
	</div>
	<div class="main">
		<div class="categoryBtn" id="showCategoryBtnid">
			<button id="inf" title="Click to view Info" style="background-color: #346751; color: #ecdbba;">Info</button>
			<button id="epi" title="Click to view Episodes">Episodes</button>
			<button id="trai" title="Click to view Trailers and Extras">Clips & Extras</button>
			<button id="more" title="Click to view More Like This">More Like This</button>
		</div>
		<div class="pageContent">
			<div class="showMain" id="showMainId">
				<div class="showDesc" id="showDescId">
					<h1>Show Title</h1>
					<p>Eng<br>2020 | A</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="showDescBtn">
						<button title="Play"><i class="material-icons" title="Play">play_arrow</i></button>
						<button title="Add to Watchlist"><i class="material-icons" title="Add to Watchlist">add</i></button>
						<button title="Share"><i class="material-icons" title="Share">share</i></button>
					</div>
				</div>

				<div class="showPost" id="showPostId">
					<img src="../Posters/Cropped/Originals.png">
				</div>
			</div>

			<div class="showEp" id="showEpId">
				<div class="showSeason">
					<select name="seasonSelect" id="seasonSelectId" form="">
					  <option value="season1">Season 1</option>
					  <option value="season2">Season 2</option>
					  <option value="season3">Season 3</option>
					</select>
				</div>
				<div class="showEps" id="showEpsId">
					<div class="categoryContentTile" id="cTile1"><p>E1: No Description</p></div>
					<div class="categoryContentTile" id="cTile2"><p>E2: No Description</p></div>
					<div class="categoryContentTile" id="cTile3"><p>E3: No Description</p></div>
					<div class="categoryContentTile" id="cTile4"><p>E4: No Description</p></div>
					<div class="categoryContentTile" id="cTile5"><p>E5: No Description</p></div>
					<div class="categoryContentTile" id="cTile6"><p>E6: No Description</p></div>
					<div class="categoryContentTile" id="cTile7"><p>E7: No Description</p></div>
					<div class="categoryContentTile" id="cTile8"><p>E8: No Description</p></div>
				</div>
			</div>

			<div class="clipInfo" id="clipInfoId">
				<div class="sInfo" id="sInfoId">
					<p>Available Audios: TBD, TBD<br>AvailableSubtitles: TBD, TBD</p>
				</div>

				<div class="sClip" id="sClipId">
					<div class="categoryContentTile" id="cTile"><p>Clip 1: No Description</p></div>
					<div class="categoryContentTile" id="cTile"><p>Clip 2: No Description</p></div>
					<div class="categoryContentTile" id="cTile"><p>Clip 3: No Description</p></div>
					<div class="categoryContentTile" id="cTile"><p>Clip 4: No Description</p></div>
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
	<footer>
		<h2>This is a Footer.</h2>
	</footer>

	<script>
		$('#searchContainerId').keypress( function(event) {
    		if (event.which == '13') 
      			event.preventDefault();
		});

		window.onclick = function (event) {
			if (event.target.matches('#b6')) 
			{
				$('#idMenu').slideToggle(300);
			}
			else if (event.target.matches('#searchButtonId ,#searchId'))
			{	
				$('#searchId').show(300);
				$('#searchContainerId').css({'border': '3px solid black', 'border-top': '3px solid black'});
				$('#searchButtonId').hide(300);
			}
			else
			{
				$('#idMenu').slideUp(300);
				$('#searchId').hide(300);
				$('#searchContainerId').css('border-color', 'transparent');
				$('#searchButtonId').show(300);
			}
		};


		$('img').bind('contextmenu', function(e){ return false;});

		$('#showCategoryBtnid button').click(function (ele) {
			var z = ele;
			if (ele.target.matches('#inf'))
				z.id = 'inf';
			if (ele.target.matches('#epi'))
				z.id = 'epi';
			if (ele.target.matches('#trai'))
				z.id = 'trai';
			if (ele.target.matches('#more'))
				z.id = 'more';
			var ids = document.querySelectorAll("#showMainId, #showEpId, #clipInfoId, #moreLikeId");
			var idsArray = [...ids];
			var x = document.getElementById('showCategoryBtnid');
			var y = x.getElementsByTagName('button');
			for (var i = 0, j = 0; i < y.length, j < idsArray.length ; i++, j++) 
			{
				y[i].style.backgroundColor = "transparent";
				y[i].style.color = 'black';
				idsArray[j].style.display = "none";
				if (y[i].id == z.id && i == j) 
				{
					y[i].style.backgroundColor = '#346751';
					y[i].style.color = '#ecdbba';
					idsArray[j].style.display = "flex";
				}
			}
		});

		$(document).ready(function() {
			$.ajax({
				type: 'GET',
				url: '../ProjectLilyAjaxHandeler.php',
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
				url: '../ProjectLilyAjaxHandeler.php',
				cache: false,
				dataType: 'json',
				data: { fname: 'channelPost'},
				success: function (datal) 
				{
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