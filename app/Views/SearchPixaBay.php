<html>
<head>
	<meta http-equiv="Cache-control" content="no-cache">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href= "../assets/SearchPixaBay.css">
</head>
<body>
    
	<div class="container">
		
		<div class="sidebar">
			<nav>
				<a href="#">Search<span>PixaBay</span></a>
				<img src="../assets/logo_square.png"/>
			</nav>
		</div>

		<div class="main-content" id="profile">
			<div class="panel-wrapper">
				<div class="panel-head">
					Search Here!
				</div>
				<div class="panel-body">
					<input type="text" name="keyword" oninput="validateKeyword(this)" class="search-input" placeholder="Enter Keyword to Search">
					<span class="rd-btn">
						<input type="radio" value="Image" id="image" name="choice" checked="checked">
						<label for="image">Image</label>
						<input type="radio" value="Video" id="video" name="choice">
						<label for="video">Video</label>
                    </span>
					<button id="search-btn" type="submit" class="button button-block"/>Search</button>
				</div>
			</div>
			<div class="panel-wrapper" id="search-results">
				<div class="panel-head">
					Search Results
				</div>
				<div class="panel-body">
					<div class="search-preview" id="search-preview">
					</div>
				</div>
			</div>
		</div>

		<script src="../assets/SearchPixaBay.js"></script>
</body>
</html>