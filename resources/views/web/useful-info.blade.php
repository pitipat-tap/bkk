@extends("..layouts.head")


@section("specific_css")
{!! Html::style("css/useful-info.css") !!}
@stop


@section("specific_js_head")

@stop


@section("body")

@include("web.top-menu")

<div class="banner-page-title">FAQ</div>
<div class="body-section">
	<div id="magellan-menu" class="row">
		<ul class="vertical menu" data-magellan>
			<li><a href="#importantCalls">Important Calls</a></li>
			<li><a href="#embassies">Embassies</a></li>
			<li><a href="#consulates">Consulates</a></li>
		</ul>
	</div>
	<div class="sections">
		<section id="importantCalls" data-magellan-target="importantCalls">
			<table>
				<tbody>
					<caption>Telephone Services</caption>
					<tr>
						<td>Directory Assistance</td>
						<td>1133 (Bangkok), 183 (upcountry)</td>
					</tr>
					<tr>
						<td>Long Distance Service</td>
						<td>100</td>
					</tr>
					<tr>
						<td>IDD</td>
						<td>001 + country code + area code + phone number</td>
					</tr>
					<tr>
						<td>AT&T Direct Service</td>
						<td>001-999-1111-1</td>
					</tr>


				</tbody>
			</table>
			<table>
				<tbody>
					<caption>Emergency Calls</caption>
					<tr>
						<td>Mobile Police</td>
						<td>191</td>
					</tr>
					<tr>
						<td>Fire Brigades</td>
						<td>199</td>
					</tr>
					<tr>
						<td>Tourist Police</td>
						<td>1155</td>
					</tr>
					<tr>
						<td>Police General Hospital</td>
						<td>0 2207 6000</td>
					</tr>
					<tr>
						<td>Tourist Service Centre</td>
						<td>1672</td>
					</tr>
					<tr>
						<td>Highway Police</td>
						<td>1193, 0 2354 6007</td>
					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					<caption>Other Useful Numbers</caption>
					<tr>
						<td><b>Suvarnabhumi International Airport</b></td>
						<td>0 2132 1888</td>
					</tr>
					<tr>
						<td> - Departure Info</td>
						<td>0 2132 9324 to 7</td>
					</tr>
					<tr>
						<td> - Arrival Info</td>
						<td>0 2132 9328 to 9</td>
					</tr>
					<tr>
						<td> - Help Desk</td>
						<td>0 2132 3888</td>
					</tr>
					<tr>
						<td> - Flight Info</td>
						<td>0 2132 0000</td>
					</tr>
					<tr>
						<td> - Public Transport Center</td>
						<td>0 2132 9100</td>
					</tr>
					<tr>
						<td> - Limousine</td>
						<td>0 2134 2323 to 5</td>
					</tr>
					<tr>
						<td>State Railway of Thailand</td>
						<td>1690</td>
					</tr>
					<tr>
						<td>CAT Telecom</td>
						<td>0 2104 3000</td>
					</tr>
					<tr>
						<td><b>Air-conditioned Bus Stations</b></td>
						<td></td>
					</tr>
					<tr>
						<td>- East</td>
						<td>0 2391 8097, 0 2391 2504</td>
					</tr>
					<tr>
						<td>- North & Northeast	</td>
						<td>0 2936 2852 to 66</td>
					</tr>
					<tr>
						<td>- South	</td>
						<td>0 2894 6122</td>
					</tr>
					<tr>
						<td>Immigration Division</td>
						<td>0 2141 9889</td>
					</tr>
					<tr>
						<td>Port Authority of Thailand</td>
						<td>0 2269 3000</td>
					</tr>
					<tr>
						<td>Board of Investment	</td>
						<td>0 2553 8111</td>
					</tr>
					<tr>
						<td>BTS Hotline	</td>
						<td>0 2617 6000</td>
					</tr>
					<tr>
						<td>MRT	</td>
						<td>0 2354 2000</td>
					</tr>
				</tbody>
			</table>
			<table>
				<tbody>
					<caption>Tourism Authority of Thailand (TAT)</caption>
					<tr>
						<td>Head Office</td>
						<td>0 2250 5500</td>
					</tr>
					<tr>
						<td>Ayutthaya</td>
						<td>0 3524 6076 to 7</td>
					</tr>
					<tr>
						<td>Bangkok	</td>
						<td>0 2250 5500 # 2991 to 5</td>
					</tr>
					<tr>
						<td>Chiang Mai</td>
						<td>0 5324 8604, 0 5324 8607, 0 5330 2500</td>
					</tr>
					<tr>
						<td>Chiang Rai</td>
						<td>0 5371 7433, 0 5370 0051 to 2</td>
					</tr>
					<tr>
						<td>Chumphon</td>
						<td>0 7750 1831 to 2, 0 7750 2775 to 6</td>
					</tr>
					<tr>
						<td>Hat Yai</td>
						<td>0 7424 3747, 0 7423 1055, 0 7423 8518</td>
					</tr>
					<tr>
						<td>Kanchanaburi</td>
						<td>0 3451 1200, 0 3451 2500</td>
					</tr>
					<tr>
						<td>Khon Kaen</td>
						<td>0 4322 7714 to 6</td>
					</tr>
					<tr>
						<td>Krabi</td>
						<td>0 7562 2163, 0 7561 2811 to 2</td>
					</tr>
					<tr>
						<td>Loei</td>
						<td>0 4281 2812</td>
					</tr>
					<tr>
						<td>Lop Buri</td>
						<td>0 3677 0096 to 7</td>
					</tr>
					<tr>
						<td>Maehongson</td>
						<td>0 5361 2982 to 3</td>
					</tr>
					<tr>
						<td>Nakhon Nayok</td>
						<td>0 3731 2282, 0 3731 2284</td>
					</tr>
					<tr>
						<td>Nakhon Phanom</td>
						<td>0 4251 3490 to 1</td>
					</tr>
					<tr>
						<td>Nakhon Ratchasima</td>
						<td>0 4421 3666, 0 4421 3030</td>
					</tr>
					<tr>
						<td>Nakhon Si Thammarat</td>
						<td>0 7534 6515 to 6</td>
					</tr>
					<tr>
						<td>Narathiwat</td>
						<td>0 7352 2411</td>
					</tr>
					<tr>
						<td>Pattaya</td>
						<td>0 3842 8750, 0 3842 7667, 0 3842 3990</td>
					</tr>
					<tr>
						<td>Phang Nga</td>
						<td>0 7648 1900 to 2</td>
					</tr>
					<tr>
						<td>Phetchaburi</td>
						<td>0 3247 1005 to 6</td>
					</tr>
					<tr>
						<td>Phitsanulok</td>
						<td>0 5525 2742 to 3, 0 5525 9907</td>
					</tr>
					<tr>
						<td>Phrae</td>
						<td>0 5452 1118, 0 5452 1127</td>
					</tr>
					<tr>
						<td>Phuket</td>
						<td>0 7621 1036, 0 7621 2213</td>
					</tr>
					<tr>
						<td>Prachuap Khirikhan (Hua Hin)</td>
						<td>0 3251 3885, 0 3251 3854, 0 3851 3871</td>
					</tr>
					<tr>
						<td>Rayong</td>
						<td>0 3865 5420 to 1, 0 3864 4585</td>
					</tr>
					<tr>
						<td>Samui</td>
						<td>0 7742 0504, 0 7742 0722</td>
					</tr>
					<tr>
						<td>Samutsongkhram</td>
						<td>0 3475 2847 to 8</td>
					</tr>
					<tr>
						<td>Sukhothai</td>
						<td>0 5561 6228 to 9</td>
					</tr>
					<tr>
						<td>Suphanburi</td>
						<td>0 3553 5789, 0 3553 6030, 0 3553 6189</td>
					</tr>
					<tr>
						<td>Surat Thani</td>
						<td>0 7728 8817 to 9</td>
					</tr>
					<tr>
						<td>Surin</td>
						<td>0 4451 4447 to 8</td>
					</tr>
					<tr>
						<td>Tak</td>
						<td>0 5551 4341 to 3</td>
					</tr>
					<tr>
						<td>Trang</td>
						<td>0 7521 5867, 07521 1058, 0 7521 1085</td>
					</tr>
					<tr>
						<td>Trat</td>
						<td>0 3959 7259 to 60</td>
					</tr>
					<tr>
						<td>Ubon Ratchathani</td>
						<td>0 4524 3770, 0 4525 0714</td>
					</tr>
					<tr>
						<td>Udon Thani</td>
						<td>0 4232 5406 to 7</td>
					</tr>
					<tr>
						<td>Uthai Thani</td>
						<td>0 5651 4651 to 2</td>
					</tr>
				</tbody>
			</table>	
		</section>
		<section id="embassies" data-magellan-target="embassies">
			<table>
				<tbody>
					<caption>Embassies</caption>
					<tr>
						<td><b>Country</b></td>
						<td><b>Address (Bangkok)</b></td>
						<td><b>Tel.</b></td>
						<td><b>Visa</b></td>
					</tr>
					<tr>
						<td>Apostolic Nunciature</td>
						<td>217/1 Sathon Tai Rd.</td>
						<td>0 2212 5853 to 4</td>
						<td>–</td>
					</tr>
					<tr>
						<td>Argentina</td>
						<td>6 Fl., No. 1, Glas Haus Bldg., Suite 1601, Sukhumwit 25, Sukhumwit Rd.</td>
						<td>2259 0401,<br>0 2259 9198</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Australia</td>
						<td>37 Sathon Tai Rd.</td>
						<td>0 2344 6300</td>
						<td>2344 6400</td>
					</tr>
					<tr>
						<td>Austria</td>
						<td>14 Soi Nandha, Sathon Tai Rd.</td>
						<td>0 2303 6057 to 9</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Bahrain</td>
						<td>Sathon Nakhon Tower, 31st Fl., 100/66-67 North Sathon Rd., Bangrak</td>
						<td>0 2636 7892 to 6,<br>0 2636 9467 to 9</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Bangladesh</td>
						<td>47/8 Ekkamai Soi 30, Sukhumwit 63 Rd.</td>
						<td>0 2390 5107 to 8</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Belgium</td>
						<td>17/F Sathon City Tower, 175 Sathon Tai Rd.</td>
						<td>0 2679 5454</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Bhutan</td>
						<td>375/1 Soi Ratchadanivej,<br>
						Pracha-Uthit Rd., Huai Kwang</td>
						<td>0 2274 4740 to 2</td>
						<td>–</td>
					</tr>
					<tr>
						<td>Brazil</td>
						<td>34 Fl., Lumpini Tower, Rama IV Rd.</td>
						<td>0 2679 8567 to 8,<br>
						0 2285 6080</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Brunei</td>
						<td>12 Soi Ekkamai 2, Sukhumwit 63 Rd. ,Prakhanong Nua</td>
						<td>0 2714 7395 to 9</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Cambodia</td>
						<td>518/4 Pracha Uthit Rd., Ramkhamhaeng 39</td>
						<td>0 2957 5851 to 2</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Canada</td>
						<td>15th Fl., Abdulrahim Place,<br>
						990 Rama 4 Rd.</td>
						<td>0 2636 0540</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Chile</td>
						<td>193/67 Lake Rajada Office Complex, 17th Fl., Unit A, Ratchadapisek Rd.</td>
						<td>0 2260 0045 to 8</td>
						<td>-</td>
					</tr>
					<tr>
						<td>China</td>
						<td>57 Ratchadaphisek Rd., Dindang</td>
						<td>0 2245 0088</td>
						<td>0 2245 7032 to 3</td>
					</tr>
					<tr>
						<td>Cuba</td>
						<td>Mela Mansion Apt. 7A, 7th Fl., Sukhumwit 27</td>
						<td>0 2665 2803,<br>
						0 2661 6563</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Czech Republic</td>
						<td>71/6 Ruam Ruedi Soi 2,<br>
						Phloenchit Rd.</td>
						<td>0 2250 9223 to 4</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Denmark</td>
						<td>10 Soi Atthakan Prasit, Sathon Tai Rd.</td>
						<td>0 2343 1100</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Egypt</td>
						<td>31st Fl., Sorachai Bldg., Sukhumwit 63 Rd.</td>
						<td>0 2726 9831 to 3</td>
						<td>-</td>
					</tr>
					<tr>
						<td>EU</td>
						<td>Kian Gwan House II, 19th Fl., Rama IV Rd.</td>
						<td>0 2305 2600,<br>
						0 2305 2700</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Finland</td>
						<td>16th Fl., Amarin Tower,<br>
						500 Phloenchit Rd.</td>
						<td>0 2250 8801</td>
						<td>-</td>
					</tr>
					<tr>
						<td>France</td>
						<td>CAT Bldg., 23rd Fl. Charoenkrung Rd.</td>
						<td>0 2627 2100</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Germany</td>
						<td>9 Sathon Tai Rd.</td>
						<td>0 2287 9000</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Greece</td>
						<td>9th Fl., YWCA Bldg., South Sathon Rd.</td>
						<td>0 2679 1462</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Hungary</td>
						<td>20th Fl., Oak Tower, President Park Condo., 99 Sukhumwit 24</td>
						<td>0 2661 1150 to 2</td>
						<td>0 2661 1155</td>
					</tr>
					<tr>
						<td>India</td>
						<td>46 Soi Prasanmit, Sukhumwit 23</td>
						<td>0 2258 0300 to 6</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Indonesia</td>
						<td>600-602 Phetburi Rd.</td>
						<td>0 2252 3135 to 9</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Iran</td>
						<td>215 Soi 49-11 (Soi Klang), Sukhumwit Rd., Khlongton Nua, Wattana</td>
						<td>0 2390 0871 to 3</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Israel</td>
						<td>25th Fl., Ocean Tower II, 75 , Sukhumwit 19, Asoke</td>
						<td>0 2204 9200</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Italy</td>
						<td>399 Nang Linchi Rd., Thungmahamek</td>
						<td>0 2250 4970</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Japan</td>
						<td>177 Witthayu Rd., Lumphini, Pathumwan</td>
						<td>0 2696 3000,<br>0 2207 8500</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Kazakhstan</td>
						<td>Suite 4301, 43rd Fl., JTC Bldg.,<br>
						919/501 Silom</td>
						<td>0 2234 6365 to 6</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Kenya</td>
						<td>62 Thong Lor Soi 5, Sukhumwit 55 Rd.</td>
						<td>0 2712 5721,<br>0 2185 3682 to 3</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Korea</td>
						<td>(DPR) 14 Muban Suanlaemthong 2, Phattanakan Rd.</td>
						<td>0 2319 2686</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Korea</td>
						<td>(ROK) 23 Thiamruammit Rd.,<br>Huai Kwang</td>
						<td>0 2247 7537 to 39</td>
						<td>0 2247 7540 to 1</td>
					</tr>
					<tr>
						<td>Kuwait</td>
						<td>24A Fl., Sathon Nakorn Tower,<br>100/44 Sathon Nua Rd.</td>
						<td>0 2636 6600,<br>0 2636 7461<br>to 3</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Laos</td>
						<td>520, 502/1-3 Pracha-Uthit Rd., Wangthonglang</td>
						<td>0 2539 6679,<br>0 2539 6667 to 8</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Luxembourg</td>
						<td>Q. House Lumphini, 17th Fl., South Sathon Rd.</td>
						<td>0 2677 7360</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Malaysia</td>
						<td>33-35 Sathon Tai Rd., Sathon</td>
						<td>0 2629 6800</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Mexico</td>
						<td>20th Fl., Thai Wah Tower 1,<br>21/60-62 South Sathon Rd.</td>
						<td>0 2285 0995</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Mongolia</td>
						<td>100/3 Soi Ekkamai 22, Sukhumwit 63 Rd., Khlongton Nua, Wattana</td>
						<td>0 2381 1400,<br>0 2392 1011</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Morocco</td>
						<td>12th Fl., Sathon City Tower, 175 South Sathon Rd., Sathon</td>
						<td>0 2679 5604 to 6</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Myanmar</td>
						<td>132 Sathon Nua Rd.</td>
						<td>0 2234 0278</td>
						<td>0 2234 4789</td>
					</tr>
					<tr>
						<td>Nepal</td>
						<td>189 Sukhumwit 71 Rd., Prakanong</td>
						<td>0 2390 2280,<br>0 2391 7240</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Netherlands</td>
						<td>15 Soi Tonson, Ploenchit Rd.</td>
						<td>0 2309 5200</td>
						<td>0 2309 5240</td>
					</tr>
					<tr>
						<td>New Zealand</td>
						<td>M Thai Tower, 14/F.,<br>All Seasons Place, 87 Wireless Rd.</td>
						<td>0 2254 2530</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Nigeria</td>
						<td>412 Sukhumwit Soi 71, Wattana</td>
						<td>0 2711 3076 to 8</td>
						<td>0 2381 4480</td>
					</tr>
					<tr>
						<td>Norway</td>
						<td>18th Fl., UBC II Bldg.,<br>591 Sukhumwit 33</td>
						<td>0 2204 6500</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Oman</td>
						<td>32nd Fl., Saeng Thong Thani Tower,<br>82 North Sathon Rd.</td>
						<td>0 2639 9380 to 2</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Pakistan</td>
						<td>31 Soi Nana Nua, Sukhumwit 3</td>
						<td>0 2253 0288 to 9</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Panama</td>
						<td>16th Fl., Lumpini Tower Bldg., Rama IV Rd.</td>
						<td>0 2679 7988 to 90</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Peru</td>
						<td>16th Fl., No.1 Glas Hous Bldg.,<br>Soi Sukhumwit 25</td>
						<td>0 2260 6243, 0 2260 6245, 0 2260 6248</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Philippines</td>
						<td>760 Sukhumwit Rd., (Opp. Soi 47)</td>
						<td>0 2258 5401,<br>0 2259 0139 to 40</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Poland</td>
						<td>25th Fl., Vongvanij Bldg. B, Rama 9 Rd.</td>
						<td>0 2645 0367 to 9</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Portugal</td>
						<td>26 Bush Lane (Soi New Road. 30), Bangrak</td>
						<td>0 2234 7435 to 6,<br>0 2234 2123</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Qatar</td>
						<td>14th Fl., Capital Tower, All Seasons Place,87/1 Wireless Rd., lumphini, Patumwan</td>
						<td>0 2660 1111</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Romania</td>
						<td>3388/41 Sirinrat Office Bldg., 12th Fl., Rama IV Rd.</td>
						<td>0 2240 2522</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Russia</td>
						<td>78 Sap Rd., Surawong, Bangrak</td>
						<td>0 2234 9824,<br>0 2268 1169</td>
						<td>0 2234 2012</td>
					</tr>
					<tr>
						<td>Saudi Arabia</td>
						<td>23rd Fl., Sang Thong Thani Bldg., 82 Sathon Nua Rd.</td>
						<td>0 2639 2999,<br>0 2639 2960 to 3</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Singapore</td>
						<td>129 South Sathon Rd.</td>
						<td>0 2286 2111,<br>0 2286 1434</td>
						<td>0 2286 6966</td>
					</tr>
					<tr>
						<td>Slovakia</td>
						<td>Unit No. 25/9-4, 9th Fl., BKI/YMCA Bldg.</td>
						<td>0 2677 3445 to 6</td>
						<td>-</td>
					</tr>
					<tr>
						<td>South Africa</td>
						<td>12 A Fl., M-Thai Tower, All Seasons Place No. 87 Wireless Rd., lumphini, Patumwan</td>
						<td>0 2659 2900</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Spain</td>
						<td>Lake Rajada Office Complex 23/F, Suites No. 98-99, 193, Ratchadaphisek Rd.</td>
						<td>0 2661 8284 to 6</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Sri Lanka</td>
						<td>13th Fl., Ocean Tower II Bldg.,<br>75/6-7 Sukhumwit 19 (Soi Wattana)</td>
						<td>0 2261 1934 to 5,<br>0 2261 1938</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Sweden</td>
						<td>20th Fl., Pacific Place 1,<br>140 Sukhumwit Rd.</td>
						<td>0 2263 7200</td>
						<td>0 2263 7211</td>
					</tr>
					<tr>
						<td>Switzerland</td>
						<td>35 North Wireless Rd.</td>
						<td>0 2674 6900</td>
						<td>0 2674 6934</td>
					</tr>
					<tr>
						<td>Taipei Economic and Cultural Office</td>
						<td>20 Fl., Empire Tower,<br>195 Sathon Tai Rd.</td>
						<td>0 2670 0200 to 9</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Timor-Leste</td>
						<td>1550 Thanapoom Tower, 7th Fl., New Petchburi Rd.</td>
						<td>0 2654 7501 to 2</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Turkey</td>
						<td>61/1 Soi Chatsan, Suthisan Rd.,<br>Huai Kwang</td>
						<td>0 2355 5486 to 7</td>
						<td>-</td>
					</tr>
					<tr>
						<td>Ukraine</td>
						<td>87 All Seasons Place, CRC Tower, 29th Fl., Wireless Rd.</td>
						<td>0 2685 3216</td>
						<td>-</td>
					</tr>
					<tr>
						<td>United Arab Emirates</td>
						<td>All Season Place, CRC Tower, 29th Fl., Wireless Rd.</td>
						<td>0 2402 4022</td>
						<td>0 2402 4000</td>
					</tr>
					<tr>
						<td>United Kingdom</td>
						<td>14 Wireless Rd.</td>
						<td>0 2305 8333</td>
						<td>-</td>
					</tr>
					<tr>
						<td>U.S.A.</td>
						<td>120-122 Wireless Rd.</td>
						<td>0 2205 4000</td>
						<td>0 2205 5007</td>
					</tr>
					<tr>
						<td>vietnam</td>
						<td>83/1 Wireless Rd.</td>
						<td>0 2251 3552,<br>0 2251 5836 to 8</td>
						<td>-</td>
					</tr>
				</tbody>
			</table>
		</section>
		<section id="consulates" data-magellan-target="consulates">
			Third Section
		</section>
	</div>
</div>
@include("web.footer")
@stop
