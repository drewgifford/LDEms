<!DOCTYPE html>
<html class="noSelect" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="United States Presidential, Senate, House, Governors and Primary interactive election maps. United Kingdom, Canada, Germany election maps.">
	<meta name="keywords" content="Map,Election,Political,Interactive,Simulator,Electoral,270,2020,Forecast,Historical,270towin,Voting,Vote,FiveThirtyEight">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta property="og:title" content="YAPms - Yet Another Political Map Simulator">
	<meta property="og:description" content="Interactive Political Maps">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:site_name" content="yapms.com">

	<meta property="og:image" content="http://www.yapms.com/app/res/yapms-96.png">
	<meta property="og:image:secure_url" content="https://www.yapms.com/app/res/yapms-96.png">

	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="yapms.com">
	<meta name="twitter:description" content="Interactive Political Maps">

	<meta property="twitter:image" content="https://www.yapms.com/app/res/yapms-96.png">
	
	<meta name="theme-color" content="#ffffff"/>
	<link rel="icon" href="https://www.yapms.com/favicon.ico" type="image/x-icon"/>
	<link rel="apple-touch-icon" href="./res/yapms-192.png"/>
	<link rel="shortcut icon" href="https://www.yapms.com/favicon.ico" type="image/x-icon"/>
	<link rel="manifest" href="./manifest.json">

	<title>YAPms - Yet Another Political Map Simulator</title>
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	     (adsbygoogle = window.adsbygoogle || []).push({
		  google_ad_client: "ca-pub-1660456925957249",
		  enable_page_level_ads: true
	     });
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132710089-1"></script>
	<script>
		var host = window.location.hostname;
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-132710089-1');
	</script>
	
	<link rel="icon" href="https://www.yapms.com/favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="https://www.yapms.com/favicon.ico" type="image/x-icon"/>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="./app/res/fontawesome/js/all.min.js"></script>
</head>

<body>
	<div id="info">
		<div id="topbar">
			<h1> YAPms - Yet Another Political Map Simulator </h1>
		</div>

		<div id="welcome" class="infobox">

			<p>
				YAPms is a tool for creating and sharing political maps
			</p>

			<p>
				<b>Supported Browsers:</b>
				Chrome, Firefox and Opera
			</p>
			
			<p> 
				<b>Contact Email:</b>
				<a style="color:blue;" href="mailto:bugreport@yapms.com">bugreport@yapms.com</a> 
			</p>
		</div>
        
        <br>

		<a href="https://play.google.com/store/apps/details?id=com.fishstudio.yapms&hl=en_GB">
			<div class="infobox link android">
				<b><i class="fab fa-android"></i></b> Android
			</div>
		</a>

		<a href="https://discord.gg/WQh5fHU">
			<div class="infobox link">
				<i class="fab fa-discord"></i> Discord
			</div>
		</a>
		
		<a href="https://www.reddit.com/r/YAPms/">
			<div class="infobox link reddit">
				<i class="fab fa-reddit"></i> Reddit
			</div>
		</a>
	</div>
	<h2 class="header"> United States Maps </h2>

	<div class="map-type-box">	
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> 2020 National Elections Maps	
	</div>

	<div class="map-button-box">	
		<a href="./app/?t=USA_2020_presidential">
			<div class="map-button">
				<i class="fas fa-user"></i> Presidential
			</div>
		</a>
		
		<a href="./app/?t=USA_2020_gubernatorial">
			<div class="map-button">
				<i class="fas fa-square"></i> Governors
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_2020_senatorial">
			<div class="map-button">
				<i class="fas fa-chevron-up"></i> Senate
			</div>
		</a>
		<a href="./app/?t=USA_congressional">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> House
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">	
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> 2020 Presidential Primaries
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_2020_democratic_primary">
			<div class="map-button">
				<i class="fas fa-democrat"></i> Democratic
			</div>
		</a>
		<a href="./app/?t=USA_2020_republican_primary">
			<div class="map-button">
				<i class="fas fa-republican"></i> Republican
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">	
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> 2020 Presidential Forecasts
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_2020_cook">
			<div class="map-button">
				Cook Political Report
			</div>
		</a>
		<a href="./app/?t=USA_2020_inside">
			<div class="map-button">
				Inside Elections
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_2020_sabatos">
			<div class="map-button">
				Sabatos Crystal Ball
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">	
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> Current Congressional Maps
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_current_senate">
			<div class="map-button">
				<i class="fas fa-chevron-up"></i> Senate
			</div>
		</a>
		<a href="./app/?t=USA_current_house">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> House
			</div>
		</a>
	</div>
	</div>

	<div class="map-type-box">	
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> Blank Maps
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_senate">
			<div class="map-button">
				<i class="fas fa-chevron-up"></i> Senate
			</div>
		</a>
		<a href="./app/?t=USA_governors">
			<div class="map-button">
				<i class="fas fa-square"></i> Governors
			</div>
		</a>
		<a href="./app/?t=USA_county">
			<div class="map-button">
				<i class="fas fa-border-all"></i> County
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">	
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> Other Presidential Maps	
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_takeall">
			<div class="map-button">
				<i class="fas fa-user"></i> Presidential Take All
			</div>
		</a>
		<a href="./app/?t=USA_proportional">
			<div class="map-button">
				<i class="far fa-user-circle"></i>  Presidential Proportional
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_2024_projection">
			<div class="map-button">
				<i class="far fa-user"></i> 2024 Estimates
			</div>
		</a>
		<a href="./app/?t=USA_split_maine">
			<div class="map-button">
				<i class="fas fa-user"></i> Presidential (split Maine)
			</div>
		</a>
	</div>
	</div>

	<br>
	<h2 class="header"> United States Historical Maps </h2>

	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> Presidential - Post-WW2
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_2016_presidential">
			<div class="map-button">
				2016
			</div>
		</a>
		<a href="./app/?t=USA_2012_presidential">
			<div class="map-button">
				2012
			</div>
		</a>
		<a href="./app/?t=USA_2008_presidential">
			<div class="map-button">
				2008
			</div>
		</a>
		<a href="./app/?t=USA_2004_presidential">
			<div class="map-button">
				2004
			</div>
		</a>
		<a href="./app/?t=USA_2000_presidential">
			<div class="map-button">
				2000
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_1996_presidential">
			<div class="map-button">
				1996
			</div>
		</a>
		<a href="./app/?t=USA_1992_presidential">
			<div class="map-button">
				1992
			</div>
		</a>
		<a href="./app/?t=USA_1988_presidential">
			<div class="map-button">
				1988
			</div>
		</a>
		<a href="./app/?t=USA_1984_presidential">
			<div class="map-button">
				1984
			</div>
		</a>
		<a href="./app/?t=USA_1980_presidential">
			<div class="map-button">
				1980
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_1976_presidential">
			<div class="map-button">
				1976
			</div>
		</a>
		<a href="./app/?t=USA_1972_presidential">
			<div class="map-button">
				1972
			</div>
		</a>
		<a href="./app/?t=USA_1968_presidential">
			<div class="map-button">
				1968
			</div>
		</a>
		<a href="./app/?t=USA_1964_presidential">
			<div class="map-button">
				1964
			</div>
		</a>
		<a href="./app/?t=USA_1960_presidential">
			<div class="map-button">
				1960
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_1956_presidential">
			<div class="map-button">
				1956
			</div>
		</a>
		<a href="./app/?t=USA_1952_presidential">
			<div class="map-button">
				1952
			</div>
		</a>
		<a href="./app/?t=USA_1948_presidential">
			<div class="map-button">
				1948
			</div>
		</a>
		<a href="./app/?t=USA_1944_presidential">
			<div class="map-button">
				1944
			</div>
		</a>
		</div>
	</div>

	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> Presidential - Pre-WW2
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_1940_presidential">
			<div class="map-button">
				1940
			</div>
		</a>
		<a href="./app/?t=USA_1936_presidential">
			<div class="map-button">
				1936
			</div>
		</a>
		<a href="./app/?t=USA_1932_presidential">
			<div class="map-button">
				1932
			</div>
		</a>
		<a href="./app/?t=USA_1928_presidential">
			<div class="map-button">
				1928
			</div>
		</a>
		<a href="./app/?t=USA_1924_presidential">
			<div class="map-button">
				1924
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_1920_presidential">
			<div class="map-button">
				1920
			</div>
		</a>
		<a href="./app/?t=USA_1916_presidential">
			<div class="map-button">
				1916
			</div>
		</a>
		<a href="./app/?t=USA_1912_presidential">
			<div class="map-button">
				1912
			</div>
		</a>
		<a href="./app/?t=USA_1908_presidential">
			<div class="map-button">
				1908
			</div>
		</a>
		<a href="./app/?t=USA_1904_presidential">
			<div class="map-button">
				1904
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_1900_presidential">
			<div class="map-button">
				1900
			</div>
		</a>
		<a href="./app/?t=USA_1896_presidential">
			<div class="map-button">
				1896
			</div>
		</a>
		<a href="./app/?t=USA_1892_presidential">
			<div class="map-button">
				1892
			</div>
		</a>
		<a href="./app/?t=USA_1888_presidential">
			<div class="map-button">
				1888
			</div>
		</a>
		<a href="./app/?t=USA_1884_presidential">
			<div class="map-button">
				1884
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_1880_presidential">
			<div class="map-button">
				1880
			</div>
		</a>
		<a href="./app/?t=USA_1876_presidential">
			<div class="map-button">
				1876
			</div>
		</a>
		<a href="./app/?t=USA_1872_presidential">
			<div class="map-button">
				1872
			</div>
		</a>
		<a href="./app/?t=USA_1868_presidential">
			<div class="map-button">
				1868
			</div>
		</a>
		<a href="./app/?t=USA_1864_presidential">
			<div class="map-button">
				1864
			</div>
		</a>
	</div>
    </div>

	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> Presidential Counties
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_2016_presidential_county">
			<div class="map-button">
				2016
			</div>
		</a>
	</div>
	</div>

	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/usa.svg" height="20px"> Blank Maps
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_congressional">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> Congress 2011-2020
			</div>
		</a>
		<br>
		<a href="./app/?t=USA_congressional_2008">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> Congress 2006-2010
			</div>
		</a>
	</div>	
	</div>

	<br>
	<h1 class="header"> Other Country Maps </h1>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/aus.svg" height="20px"> Australia
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Australia_states">
			<div class="map-button">
				<i class="fas fa-square"></i> States
			</div>
		</a>
		<a href="./app/?t=Australia_house_of_representatives">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> House of Representatives
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/bra.svg" height="20px"> Brazil	
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Brazil_deputies">
			<div class="map-button">
				<i class="fas fa-chevron-circle-down"></i> Chamber of Deputies
			</div>
		</a>
	</div>
	</div>

	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/can.svg" height="20px"> Canada
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Canada_provinces">
			<div class="map-button">
				<i class="fas fa-square"></i> Provinces
			</div>
		</a>
		<a href="./app/?t=Canada_house_of_commons">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> House of Commons
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/fra.svg" height="20px"> France
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=France_national_assembly">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> National Assembly
			</div>
		</a>
	</div>
	</div>

	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/ger.svg" height="20px"> Germany
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Germany_states">
			<div class="map-button">
				<i class="fas fa-square"></i> States
			</div>
		</a>
		<a href="./app/?t=Germany_bundestag">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> Bundestag
			</div>
		</a>
		
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/ita.svg" height="20px"> Italy
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Italy_states">
			<div class="map-button">
				<i class="fas fa-square"></i> States
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/ire.svg" height="20px"> Ireland
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Ireland_dail_eireann">
			<div class="map-button">
				<i class="fas fa-chevron-circle-down"></i> Dáil Éireann
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/ned.svg" height="20px"> Netherlands	
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Netherlands_provinces">
			<div class="map-button">
				<i class="fas fa-chevron-circle-down"></i> Provinces
			</div>
		</a>
		<a href="./app/?t=Netherlands_gemeenten">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> Gemeeten
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/rus.svg" height="20px"> Russia	
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Russia_federal_council">
			<div class="map-button">
				<i class="fas fa-chevron-up"></i> Federation Council
			</div>
		</a>
		<a href="./app/?t=Russia_duma">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> Duma
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/esp.svg" height="20px"> Spain
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=Spain_constituencies">
			<div class="map-button">
				<i class="fas fa-chevron-circle-down"></i> Congress of Deputies
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/ukd.svg" height="20px"> United Kingdom
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=UnitedKingdom_house_of_commons">
			<div class="map-button">
				<i class="fas fa-chevron-down"></i> House of Commons
			</div>
		</a>
	</div>
	</div>
	
	<h1 class="header"> Trans-National Maps </h1>
	
	<div class="map-type-box">
	<div class="map-type-header"> Joined countries
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=USA_Canada">
			<div class="map-button">
				<i class="fas fa-square"></i> USA/Canada
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/un.svg" height="20px"> United Nations
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=World">
			<div class="map-button">
				<i class="fas fa-square"></i> Countries
			</div>
		</a>
	</div>
	</div>
	
	<div class="map-type-box">
	<div class="map-type-header">
		<img src="app/res/flags/eu.svg" height="20px"> European Union
	</div>
	<div class="map-button-box">	
		<a href="./app/?t=EuropeanUnion">
			<div class="map-button">
				<i class="fas fa-chevron-circle-down"></i> Parliament
			</div>
		</a>
	</div>
	</div>

	<script>
		if('serviceWorker' in navigator) {
			navigator.serviceWorker
			.register('./sw.js')
			.then(function(a) {
				console.log('SW: registered');
			}, function(err) {
				console.log('SW: register error... ', err);
			});
		}
	</script>
</body>
</html>
