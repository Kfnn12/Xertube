<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="header__content">
					<a href="/" class="header__logo" style="font-size:25px;font-family:tahoma;font-weight:bold;">
						<span style="color:#ffd80e;">FILM</span><span style="color:#fff;">ATO</span>
					</a>

					<ul class="header__nav">
						<li class="header__nav-item">
							<a class="header__nav-link" href="/">Home</a>
						</li>

						<li class="header__nav-item">
							<a href="/recent" class="header__nav-link">All Movies</a>
						</li>
					</ul>

					<div class="header__auth">
						<form action="/search" class="header__search" method="GET">
							<input class="header__search-input" name="q" type="text" value="" placeholder="search movies by name...">
							<button class="header__search-button" type="button">
								<i class="icon ion-ios-search"></i>
							</button>
							<button class="header__search-close" type="button">
								<i class="icon ion-md-close"></i>
							</button>
						</form>

						<button class="header__search-btn" type="button">
							<i class="icon ion-ios-search"></i>
						</button>
					</div>
					
					<!-- header menu btn -->
					<button class="header__btn" type="button">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- end header menu btn -->					
				</div>
			</div>
		</div>
	</div>
</header>