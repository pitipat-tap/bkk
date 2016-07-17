@extends("..layouts.head")


@section("specific_css")
@stop


@section("specific_js_head")
{!! Html::script("js/verge.min.js") !!}
{!! Html::script("js/sly.min.js") !!}
{!! Html::script("js/home.js") !!}
@stop


@section("body")

@include("web.top-menu")

@include("web.banner-orbit")

<section id="home-body">
    <div class="body-section">
        <div class="banner-page-title show-for-large columns">
           <span lang="th" >Destination</span>
           <span lang="en" >Destination</span>
           <span lang="jp" >Destination</span>
           <span lang="ch" >Destination</span>
        </div>

        <section class="mg-b-1">
            <!-- desktop -->
            <div class="row show-for-large">
                <div class="large-8 columns maps-container">
                        
                      <div class="map-group">
                          <div id="area-1"></div>
                          <div id="area-2"></div>
                          <div id="area-3"></div>
                          <div id="area-4"></div>
                          <div id="area-5"></div>
                          <div id="area-6"></div>
                          {!! HTML::image("images/maps/map-0.jpg","",array("style"=>"z-index:2")) !!}
                          {!! HTML::image("images/maps/map-01.jpg","",array("id"=>"zone-1","class"=>"zone opa-1")) !!}
                          {!! HTML::image("images/maps/map-02.jpg","",array("id"=>"zone-2","class"=>"zone")) !!}
                          {!! HTML::image("images/maps/map-03.jpg","",array("id"=>"zone-3","class"=>"zone")) !!}
                          {!! HTML::image("images/maps/map-04.jpg","",array("id"=>"zone-4","class"=>"zone")) !!}
                          {!! HTML::image("images/maps/map-05.jpg","",array("id"=>"zone-5","class"=>"zone")) !!}
                      </div>
                </div>
                <div class="map-content large-4 columns">

                    <div id="map-content-1" class="opa-1 map-content-select destination-highlight">
                        <h4 id="des-h-1" lang="th"> วัดกัลยาณมิตรวรมหาวิหาร </h4>
                        <h4 id="des-h-2" lang="en"> Wat Kalayanamit</h4>
                        <h4 id="des-h-3" lang="jp"> Wat Phra Kaew</h4>
                        <h4 id="des-h-4" lang="ch"> Wat Phra Kaew</h4>
                        {!! HTML::image("uploads/normal/Attractions/62_Wat_Kanlaya/shutterstock_258300206-1.jpg","",array("id"=>"des-img")) !!}
                        <p id="des-c-1" lang="th">
                           		เป็นพระอารามหลวงชั้นโท ชนิดวรมหาวิหาร เจ้าพระยานิกรบดินทร์ (โต กัลยาณมิตร) บุตรพระวิชัยวารี (ทัน แซ่อึ่ง) เมื่อครั้งมีบรรดาศักดิ์เป็น พระยาราชสุภาวดี เจ้ากรมพระสุรัสวดีกลาง ได้อุทิศบ้านพร้อมที่ดินและได้ซื้อที่ดินบริเวณใกล้เคียงซึ่งเดิมเรียกว่า หมู่บ้านกฏิจีน เพิ่มเติมสร้างเป็นวัดเมื่อปี พ.ศ. 2368 ในสมัยรัชกาลที่ 3 แล้วถวายเป็นพระอารามหลวง ได้รับพระราชทานนามว่า วัดกัลยาณมิตร กรมศิลปากรได้ขึ้นทะเบียนวัดเป็นโบราณสถานสำคัญของชาติเมื่อปี พ.ศ. 2492
                        </p>
                        <p id="des-c-1" lang="en">
                            Wat Kanlayanamit Woramahawihan This is the second grade royal temple of woramahawihan. Chao Phraya Nikorn Bodin (Toh Kanlayanamit) a son of Phra Phichai Wari (Man Sae Eung). When he got the tittle of Phraya Ratsuphawadi, the director general of Phra Suratsawadi Klang department, he did not only donated his house included land but also bought additional land in the area nearby which formally called Kudi Chin village to build a temple in 1825 during the reign of King Rama 3, and presented it to be a royal temple, King Rama 3 graciously named the temple as Wat Kanlayanamit. The fine arts department registered the temple to be the national ancient monument in 1949 
                        </p>
                        <p id="des-c-1" lang="jp">
                            寺院はマスタークラスでありますWoramahawihanを入力ニコンXVI Bordin（藤ののれん）、ヴィジャヤの息子は名前が付いていた場合（沙ウンまで）に変更します。ロイヤルプリンスSupawadeeサラスワティ連邦管財元々呼ばれていた土地や近くの土地を購入の献身、。中国の村の既定の照合順序追加のビルドは3の統治の間の年2368年に寺院は僧院を奉献しました。名のれん対策美術部門は、2492年以来、国家の重要性の古代のモニュメントとして寺院を登録しました。 
                        </p>
                        <p id="des-c-1" lang="ch">
                            这是woramahawihan皇家第二等级寺庙，昭披耶尼空卜丁（To Kanlayanamit ），皮钗瓦利之子（赛英先生）。当他被授予Phraya Ratsuphawadi头衔，Phra Suratsawadi Klang部门的将军时，不不仅捐赠了自己的房屋，同时也购买了一片土地兴建寺庙，于1825年，拉玛3世时期，寺庙被授予皇家寺庙，拉玛3世将其命名为Kanlayanamit寺。1949年，国家寺庙管理部授权此地为国家古代纪念馆。 
                        </p>
                        <a href="{!! URL::route('attraction',array(62)) !!}">
                            <div lang="th"> EXPLORE </div>
                            <div lang="en"> EXPLORE </div>
                            <div lang="jp"> EXPLORE </div>
                            <div lang="ch"> EXPLORE </div>
                        </a>
                    </div>
                    <div id="map-content-2" class="map-content-select destination-highlight">
                        <h4 id="des-h-1" lang="th"> วัดพระศรีรัตนศาสดาราม (วัดพระแก้ว)</h4>
                        <h4 id="des-h-2" lang="en"> Temple of the Emerald Buddha</h4>
                        <h4 id="des-h-3" lang="jp"> Temple of the Emerald Buddha</h4>
                        <h4 id="des-h-4" lang="ch"> Temple of the Emerald Buddha</h4>
                        {!! HTML::image("uploads/normal/Attractions/02_Wat_Pra_Kaew/02_Temple of the Emerald Buddha_1.jpg","",array("id"=>"des-img")) !!}
                        <p id="des-c-1" lang="th">
                            เป็นวัดที่ประดิษฐานพระแก้วมรกต ภายในมีอาณาบริเวณกว้างขวาง ประกอบด้วย 3 ส่วน คือส่วนแรกเป็นวัดพระแก้วมรกต ระเบียงที่ลดหลั่นกันลงไป และส่วนของหมู่ตึกทางทิศเหนือ และระเบียงด้านหน้าของประสาทพระเทพบิดร
วัดพระศรีรัตนศาสดารามตั้งอยู่ในเขตพระราชฐานชั้นนอกทางทิศตะวันออกของพระบรมมหาราชวัง ภายในไม่มีพระภิกษุสงฆ์อยู่จำพรรษา รัชกาลที่ 1 โปรดเกล้าฯ ให้สร้างขึ้นพร้อมกับพระบรมมหาราชวังและกรุงรัตนโกสินทร์ซึ่งเป็นการสร้างวัดในพระราชวังตามอย่างวัดพระศรีสรรเพชญ์ของกรุงศรีอยุธยา
พระพุทธมหามณีรัตนปฏิมากร (พระแก้วมรกต) เป็นพระประทับนั่งอย่างสมาธิราบในสกุลช่างล้านนา ประมาณพุทธศตวรรษที่ 20 ถือเป็นพระพุทธรูปคู่บ้านคู่เมือง ซึ่งรัชกาลที่ 1 ได้ทรงอัญเชิญมาจากเมืองเวียงจันทร์ 
                        </p>
                        <p id="des-c-1" lang="en">
                            The temple is in the outer section of the Royal Enclosure west of the Grand Palace . It was built on the orders of King Rama 1 along with the Grand Palace and Rattanakosin Island, and is built as a temple in a Royal compound like Wat Sri Sanphet in Ayutthaya . It has no resident monks.
The most famous in Wat Phra Kaew are: The Emerald Buddha, Model of Angkor Wat, Prasat Phra Thepidon, Mondop, Balcony, Phra Sri Ratana Chedi and many others. By the way, the Emerald Buddha (Phra Putta Maha Mani Ratana Patimakorn or Phra Kaeo Morakot): This is a Buddha image in the meditating position in the style of the Lanna school of the north, dating from the 15th century AD. King Rama I brought it from Vientiane , and it is considered to be the most important Buddha image in the country. 
                        </p>
                        <p id="des-c-1" lang="jp">
                            エメラルド寺院はエメラルド仏像の寺院です。広範な領域内の3つの部分から構成：最初の部分は、ワット·プラケオです。に下降テラスそして北に建物の一部。神経パンテオンのフロントポーチ。エメラルド寺院はイースタングランドパレスの外庭に位置しています。ラーマ5世の神殿の内部には、僧侶には王宮、アユタヤのワット·プラシーサンペットに応じて構築されているバンコクの宮殿で作成したものを注文していません。エメラルド仏面と（エメラルド仏）を超える技術者通貨で瞑想に座っていました。およそ20世紀の仏は貴重です。 
                        </p>
                        <p id="des-c-1" lang="ch">
                            玉佛寺内主要分为三部分，泰国玉佛寺位于曼谷大王宫的东北角，是泰国最著名的佛寺，也是泰国三大国宝之一。建于1784年的玉佛寺是泰国大王宫的一部分，面积约占大王宫的1/4。玉佛寺是泰国王族供奉玉佛像和举行宗教仪式的场所，因寺内供奉着玉佛而得名。寺内有玉佛殿、先王殿、佛骨殿、藏经阁、钟楼和金塔。玉佛殿是玉佛寺的主体建筑，大殿正中的神龛里供奉着被泰国视为国宝的玉佛像。玉佛高66厘米，阔48厘米，是由一整块碧玉雕刻而成。 
                        </p>
                        <a href="{!! URL::route('attraction',array(1)) !!}">
                            <div lang="th"> EXPLORE </div>
                            <div lang="en"> EXPLORE </div>
                            <div lang="jp"> EXPLORE </div>
                            <div lang="ch"> EXPLORE </div>
                        </a>
                    </div>
                    <div id="map-content-3" class="map-content-select destination-highlight">
                        <h4 id="des-h-1" lang="th">เทอมินอล 21</h4>
                        <h4 id="des-h-2" lang="en">Terminal 21</h4>
                        <h4 id="des-h-3" lang="jp">Terminal 21</h4>
                        <h4 id="des-h-4" lang="ch">Terminal 21</h4>
                        {!! HTML::image("uploads/normal/Attractions/108_Terminal_21/shutterstock_202913998.jpg","",array("id"=>"des-img")) !!}
                        <p id="des-c-1" lang="th">
                            เทอร์มินัล 21 เป็นศูนย์การค้าแห่งหนึ่งในกรุงเทพมหานครที่รวบรวมบรรยากาศทั่วทุกมุมโลกมาไว้ใน ที่เดียวใจกลาง อโศก ทั้งแคริบเบียน โรม, ปารีส, โตเกียว, ลอนดอน, อิสตันบูล,ซานฟรานซิสโก และฮอลลีวู้ด ด้วยแนวคิดและสโลแกน "Terminal 21 คือ ท่าอากาศยานแห่งความบันเทิง ที่ยกทั้งโลก มาไว้ที่สุขุมวิท" 
                        </p>
                        <p id="des-c-1" lang="en">
                            Terminal 21 shopping mall is Bangkok's new retail complex that features world's famous themes in a one floor one theme concept: Caribbean, Rome, Paris, Tokyo, London, Istanbul, San Francisco, and Hollywood. The mall's slogan is "Terminal 21: global entertainment port on Sukhumvit Road". 
                        </p>
                        <p id="des-c-1" lang="jp">
                            ターミナル21は、バンコク、アソーク通りの中心地に、世界中 (カリブ海・ローマ・パリ・東京・ロンドン・イスタンブール・サンフランシスコ・ハリウッド) の雰囲気でできているショッピングモール。ターミナル21のコンセプトとスローガンは世界中全てのエンターテイメントを、このターミナル(スクンビット)で揃う。 
                        </p>
                        <p id="des-c-1" lang="ch">
                            Terminal 21购物中心是曼谷第一家综合全球购物氛围于一身的大型购物商场，包括加勒比、罗马、巴黎、东京、伦敦、伊斯坦布尔、旧金山和好莱坞，坐落在Asok中心，Terminal 21购物中心的理念和标语是“打造Sukhumvit全球娱乐航站”。 
                        </p>
                        <a href="{!! URL::route('attraction',array(108)) !!}">
                            <div lang="th"> EXPLORE </div>
                            <div lang="en"> EXPLORE </div>
                            <div lang="jp"> EXPLORE </div>
                            <div lang="ch"> EXPLORE </div>
                        </a>
                    </div>
                    <div id="map-content-4" class="map-content-select destination-highlight">
                        <h4 id="des-h-1" lang="th">สนามมวยลุมพินี และสนามมวยราชดำเนิน</h4>
                        <h4 id="des-h-2" lang="en">Lumpini Boxing Stadium and Ratchadamneon Boxing Stadium</h4>
                        <h4 id="des-h-3" lang="jp">Lumpini Boxing Stadium and Ratchadamneon Boxing Stadium</h4>
                        <h4 id="des-h-4" lang="ch">Lumpini Boxing Stadium and Ratchadamneon Boxing Stadium</h4>
                        {!! HTML::image("uploads/normal/Attractions/32_Lumpini_Boxing/shutterstock_285506159.jpg","",array("id"=>"des-img")) !!}
                        <p id="des-c-1" lang="th">
                            "สนามมวยเวทีลุมพินี เป็นสนามมวยที่มีตำนานมาอย่างยาวนาน เริ่มต้นตั้งอยู่บริเวณด้านหลังพระบรมรูปรัชกาลที่ 6 และย้ายวิกมาตั้งอยู่แถวบริเวณบ่อนไก่ แต่ยังคงใช้ชื่อเดิมเพราะถือเป็นมงคลนาม โดย พลตรีประภาส จารุเสถียร ขณะนั้นดำรงตำแหน่งผู้บัญชาการกองพลที่ 1 รักษาพระองค์ โดยมีการชกมวยนัดแรกเมื่อ 15 มีนาคม และพิธีเปิดอย่างเป็นทางการเมื่อวันที่ 8 ธันวาคม พ.ศ. 2499
และจากการที่สำนักงานทรัพย์สินส่วนพระมหากษัตริย์ ซึ่งเป็นเจ้าของที่ดินมีแผนงานการพัฒนาที่ดินบริเวณถนนพระราม 4 ให้สามารถใช้ประโยชน์ในเชิงธุรกิจอย่างเต็มขีดความสามารถของพื้นที่ จึงขอให้สนามมวยย้ายไปยังสนามแห่งใหม่ สนามสวยจึงพิจารณาพื้นที่แห่งใหม่
ซึ่งการพิจารณานั้น ได้เลือกพื้นที่สนามมวยเวทีนางลิ้นจี่ และเวทีพหลโยธิน แต่ด้วยพื้นที่มีข้อจำกัดหลายอย่าง จึงมีการเลือกพื้นที่ใหม่ และได้พื้นที่บริเวณถนนรามอินทรา กม.2 ติดกับศูนย์พัฒนากีฬา ทบ.(สนามกอล์ฟ) มีเนื้อที่ 6 ไร่ 2 งาน ซึ่งมีความเหมาะสมมากที่สุด จึงได้ย้ายวิกมาที่นี่ โดยในวันที่ 21 สิงหาคม พ.ศ. 2555 พล.อ.ประยุทธ์ จันทร์โอชา ในฐานะผู้บัญชาการทหารบกพร้อมด้วยคณะ ได้ประกอบพิธีวางศิลาฤกษ์ สนามมวยเวทีลุมพินีแห่งใหม่
จากนั้นได้มีการจัดอำลา สนามมวยเวทีลุมพินี ศึกเพชรยินดี เมื่อวันศุกร์ที่ 7 ก.พ. 2557 และจัดนัดประเดิมสนามมวยเวทีลุมพินี รามอินทรา เมื่ออังคารที่ 11 ก.พ. 2557 ในศึกเกียรติเพชรและมีพิธีเปิดอย่างเป็นทางการในวันศุกร์ที่ 28 กุมภาพันธ์ พ.ศ. 2557 ที่ผ่านมา" 
                        </p>
                        <p id="des-c-1" lang="en">
                            Lumpini Boxing Stadium. Boxing legend is a long time. Starting Located behind the King Rama VI and 6 to move Vick located in Bon Kai area. But still use the old name because considered auspicious by the Air Force illumination Charusathien then held the position of commander of the 1st Guards with boxing debut on March 15, and was officially opened on 8 December. Prof. 2499 
and by the Crown Property Bureau. The land owners have plans to develop the land on Rama 4 to take advantage of the full capabilities of commercial space. Sought the stadium moved to a new stadium. Therefore consider the new stadium 
, which is being considered. Selected areas Boxing Stadium Nanglinchee. And Stage Rd The area has many limitations. You have a selection of new areas And Area Road km 2 adjacent Sports Center. DDS. (Golf course) with an area of 6 acres, two of which are the most appropriate. It was moved here by Vic on 21 August 2555. Gen.. Prayut Chan-o-cha as commander in chief, along with the faculty. The foundation stone laying ceremony Lumpini Boxing Stadium located 
, and then held a farewell. Lumpini Boxing Stadium, Diamond Chariots welcomed on Friday 7 February 2557 and to initiate court Lumpini Boxing Ram on Tuesday 11 February 2557 at the Battle of honor at the opening ceremony and diamonds. the official on Friday, 28 February 2557 ago. 
                        </p>
                        <p id="des-c-1" lang="jp">
                            "ルンピニ・ボクシングスタジアムは長年語り継がれるスタジアムで、最初はラーマ6世の国王像の後方に設置したが、縁起の良いために闘鶏所の周辺に移設しても旧名を使用されている。プラパート　ジャルサティアン少将（第1国王防衛隊の旧司令官）は、3月15日に最初のボクシング試合をし、1956年12月8日に開会式を開催した。
土地所有者である王室財産管理局が全能力でビジネスに利用するため、ラマ4世路における土地の開発計画をし、ボクシングスタジアムの移設を依頼された。
移設場所の検討の結果、ナーンリンチー・ボクシングスタジアムとパホンヨーティン・ボクシングスタジアムを選定したが、多くの制限があるため、陸軍のスポーツセンター（ゴルフ場）に隣接しているラムイントラ第2キロ目の領域（総面積6ライ2ガーン）に変更した。プラユット　ジャンオーシャー大将は、最高司令官として2012年8月21日に将軍団体と新ルンピニ・ボクシングスタジアムの開会式を開催した。
その後、2014年2月7日にスックペッチインディーというボクシング試合で旧ルンピニ・ボクシングスタジアムの閉会式を開催し、又2014年2月11日にルンピニ・ボクシングスタジアム・ラムイントラにおいてスックキアートペッチという最初のボクシング試合と、2014年2月28日（金）に正式な開会式を開催した。" 
                        </p>
                        <p id="des-c-1" lang="ch">
                            "Lumpinee拳击馆已经开放很久了，建立在第6世国王画像后面，迁移地址后仍延续使用原来的名字，因为认为这个名字具有神圣的含义，是当时担任第一师长少将命名，第一次拳击比赛开始于3月15日，1956年12月8日正式开放。
由于土地的主人出于商业计划，需要将拉马4世路附近的土地规划，重新布局其空间利用率，因此要求拳击馆转移到新的漂亮的地方。
在考虑新场馆的地址时，考虑过林记舞台，以及帕哈呦厅舞台，但是地方都有一定的局限性，因此重新选择了地方。在拉明塔2号公路，在体育馆附近（高尔夫球场）的地方，找到6.2公顷的地方，觉得是最合适的地方，最终于2012年8月21日将拳击馆转移到此地，巴育总理来到此地参加了新拳击馆的开幕典礼。
于是，2014年2月7日星期五告别了就的拳击馆，2015年2月11日转移到新场馆，2015年2月28日进行了开业典礼。" 
                        </p>
                        <a href="{!! URL::route('attraction',array(32)) !!}">
                            <div lang="th"> EXPLORE </div>
                            <div lang="en"> EXPLORE </div>
                            <div lang="jp"> EXPLORE </div>
                            <div lang="ch"> EXPLORE </div>
                        </a>
                    </div>
                    <div id="map-content-5" class="map-content-select destination-highlight">
                        <h4 id="des-h-1" lang="th">ซาฟารีเวิลด์</h4>
                        <h4 id="des-h-2" lang="en">Safari World</h4>
                        <h4 id="des-h-3" lang="jp">Safari World</h4>
                        <h4 id="des-h-4" lang="ch">Safari World</h4>
                        {!! HTML::image("uploads/normal/Attractions/51_Safari/shutterstock_287322869.jpg","",array("id"=>"des-img")) !!}
                        <p id="des-c-1" lang="th">
                            ซาฟารีเวิลด์ตั้งอยู่บน ถนนรามอินทรา บริเวณกิโลเมตรที่ 9 เขตมีนบุรี มีเนื้อที่ประมาณ 430 ไร่ แบ่งพื้นที่ออกเป็น 2 ส่วน ได้แก่ ส่วนที่หนึ่ง คือ ซาฟารีปาร์ค ซึ่งเป็นสวนสัตว์เปิด มีสัตว์ต่างๆ เช่น ม้าลาย กวาง ยีราฟ นก เสือ สิงโต หมี ฯลฯ ให้นักท่องเที่ยวได้นั่งรถชมชีวิตความเป็นอยู่ของสัตว์ตามธรรมชาติโดยรถส่วน ตัว หรือรถบริการพร้อมผู้บรรยายของซาฟารีเวิลด์ ส่วนที่สอง คือ มารีนปาร์ค หรือสวนน้ำ มีสัตว์น้ำ และสัตว์ชนิดต่างๆ ที่หาดูให้ชมยาก รวมทั้งการแสดงต่างๆ เช่น การแสดงของปลาโลมา, นก, แมวน้ำ และลิง เป็นต้น
นอก จากนี้ยังมีร้านอาหารและเกมส์ต่างๆ เช่น เกมส์ปาเป้า ยิงปืน โยนบ่วง ฯลฯ ไว้บริการ 
                        </p>
                        <p id="des-c-1" lang="en">
                            Have a close encounter with giraffes, zebras, camels, and other wild animals as you drive (Safari World’s vehicle with a guide tour service also available) through the picturesque wilderness in safari park. More interesting shows and animals in show of dolphin, elephant, bird and stunt in the marine park. It is located on Ram Indra Road Km. 9. 
                        </p>
                        <p id="des-c-1" lang="jp">
                            サファリワールドは、2つの部分に分かれて約430ヘクタールのキロ9分ブリエリアでの道路上に位置しています：最初の部分は、サファリパーク、このような観光客に等シマウマ、鹿、キリン、鳥、トラ、ライオン、クマなどの動物との動物園です。訪問者が自然にサファリワールドマリンパークのナレーターに沿って車やバスのサービスにより、動物の命に乗ることができ、第二部は、水槽や水の庭園や動物です。誰それが困難見に見つけますなどイルカ、鳥、アザラシやサル、の性能等の性能を含め、レストラン、そのようなサファリワールドは。
                        </p>
                        <p id="des-c-1" lang="ch">
                            曼谷野生动物园位于民布理区东北南茵地路第9公里处，占地面积约为430莱，分为两个区域。第1区，Safari Park，主要是各种野生动物，包括斑马，长颈鹿，鸟，老虎，狮子，熊等，游客通常需要乘坐院内观赏车在园内观赏动物，体验热带雨林的自然风景。第2部分，Marin Park，主要为各种水生动物，如海豚，海鸟，海豹和猴子等。除此之外，还有各种美食。另外还有飞镖设计，投球等游戏 
                        </p>
                        <a href="{!! URL::route('attraction',array(51)) !!}">
                            <div lang="th"> EXPLORE </div>
                            <div lang="en"> EXPLORE </div>
                            <div lang="jp"> EXPLORE </div>
                            <div lang="ch"> EXPLORE </div>
                        </a>
                    </div>

                </div>
            </div>
            <!-- mobile -->
            <!-- <div id="destination-mobile" class="row hide-for-large hide-for-print">
                <h2 lang="th">Destination</h2>
                <h2 lang="en">Destination</h2>
                <h2 lang="jp">Destination</h2>
                <h2 lang="ch">Destination</h2>
                <form>
                    <div class="row collapse">
                        <div class="small-9 columns">
                            <input type="text" placeholder="Find your destination">
                        </div>
                        <div class="small-3 columns">
                            <a href="#" class="button postfix">Go</a>
                        </div>
                    </div>
                </form>
                <hr>
            </div> -->
        </section>

        <section id="campaign-attractions" >
            <div class="row">
                <a href="{!! URL::route('transportation') !!}">
                    <div class=" large-4 columns">
                        <div class="tag-highlight">
                            <h2 lang="th"> Transportation </h2>
                            <h2 lang="en"> Transportation </h2>
                            <h2 lang="jp"> Transportation </h2>
                            <h2 lang="ch"> Transportation </h2>
                            <h1> ___ </h1>
                        </div>
                    </div>
                    <div class="small-12 large-8 columns">
                        <img data-interchange="[uploads/normal/home/transportation_medium.jpg, small], [uploads/normal/home/transportation_large.jpg, large]">
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="{!! URL::route('attractionCategory') !!}">
                    <div class="small-12 large-8 columns">
                        <img data-interchange="[uploads/normal/home/attraction_medium.jpg, small], [uploads/normal/home/attraction_large.jpg, large]">
                    </div>
                    <div class=" large-4 columns">
                        <div class="tag-highlight">
                            <h2 lang="th"> Attractions</h2>
                            <h2 lang="en"> Attractions</h2>
                            <h2 lang="jp"> Attractions</h2>
                            <h2 lang="ch"> Attractions</h2>
                            <h1> ___ </h1>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section id="accommodation-events">
            <div id="accommodation" class="row">
                <a href="{!! URL::route('accommodation') !!}">
                    <div class=" large-4 columns">
                        <div class="tag-highlight">
                            <h2 lang="th"> Accommodation </h2>
                            <h2 lang="en"> Accommodation </h2>
                            <h2 lang="jp"> Accommodation </h2>
                            <h2 lang="ch"> Accommodation </h2>
                            <h1> ___ </h1>
                        </div>
                    </div>
                    <div class="small-12 large-8 columns">
                        <img data-interchange="[uploads/normal/home/accommodation_medium.jpg, small], [uploads/normal/home/accommodation_large.jpg, large]">
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="events">
                    <h2 lang="th"> Festival </h2>
                    <h2 lang="en"> Festival </h2>
                    <h2 lang="jp"> Festival </h2>
                    <h2 lang="ch"> Festival </h2>
                </div>
            </div>
            <div class="row">
                <div id="events-slider" class="eventsSlide">
                    <button class="backward"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                    <button class="forward"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

                    <div class="frame" style="overflow: hidden;">
                        <ul>
                            <li lang="th" data-month="january" class="month">January</li>
                            <li lang="en" data-month="january" class="month">January</li>
                            <li lang="jp" data-month="january" class="month">January</li>
                            <li lang="ch" data-month="january" class="month">January</li>

                            <li lang="th" data-month="febuary" class="month">February</li>
                            <li lang="en" data-month="febuary" class="month">February</li>
                            <li lang="jp" data-month="febuary" class="month">February</li>
                            <li lang="ch" data-month="febuary" class="month">February</li>

                            <li lang="th" data-month="march" class="month">March</li>
                            <li lang="en" data-month="march" class="month">March</li>
                            <li lang="jp" data-month="march" class="month">March</li>
                            <li lang="ch" data-month="march" class="month">March</li>

                            <li lang="th" data-month="april" class="month">April</li>
                            <li lang="en" data-month="april" class="month">April</li>
                            <li lang="jp" data-month="april" class="month">April</li>
                            <li lang="ch" data-month="april" class="month">April</li>

                            <li lang="th" data-month="may" class="month">May</li>
                            <li lang="en" data-month="may" class="month">May</li>
                            <li lang="jp" data-month="may" class="month">May</li>
                            <li lang="ch" data-month="may" class="month">May</li>

                            <li lang="th" data-month="june" class="month">June</li>
                            <li lang="en" data-month="june" class="month">June</li>
                            <li lang="jp" data-month="june" class="month">June</li>
                            <li lang="ch" data-month="june" class="month">June</li>

                            <li lang="th" data-month="july" class="month">July</li>
                            <li lang="en" data-month="july" class="month">July</li>
                            <li lang="jp" data-month="july" class="month">July</li>
                            <li lang="ch" data-month="july" class="month">July</li>

                            <li lang="th" data-month="august" class="month">August</li>
                            <li lang="en" data-month="august" class="month">August</li>
                            <li lang="jp" data-month="august" class="month">August</li>
                            <li lang="ch" data-month="august" class="month">August</li>

                            <li lang="th" data-month="september" class="month">September</li>
                            <li lang="en" data-month="september" class="month">September</li>
                            <li lang="jp" data-month="september" class="month">September</li>
                            <li lang="ch" data-month="september" class="month">September</li>

                            <li lang="th" data-month="october" class="month">October</li>
                            <li lang="en" data-month="october" class="month">October</li>
                            <li lang="jp" data-month="october" class="month">October</li>
                            <li lang="ch" data-month="october" class="month">October</li>

                            <li lang="th" data-month="november" class="month">November</li>
                            <li lang="en" data-month="november" class="month">November</li>
                            <li lang="jp" data-month="november" class="month">November</li>
                            <li lang="ch" data-month="november" class="month">November</li>

                            <li lang="th" data-month="december" class="month">December</li>
                            <li lang="en" data-month="december" class="month">December</li>
                            <li lang="jp" data-month="december" class="month">December</li>
                            <li lang="ch" data-month="december" class="month">December</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="events-container">
                    @foreach($events as $index=>$event)
                    @if($event->title_thai != null)
                        <div id="{!! $event->month !!}" class="event-item-list row">
                            <div class=" large-6 columns">
                                <div class="event-item">
                                    {!! HTML::image($event->image_url_1,"",array("class"=>"")) !!}
                                </div>
                            </div>

                            <div  class="pos-r large-6 columns">
                                <div class="event-content">
                                    <h3 lang="th"> {!! $event->title_thai !!} </h3>
                                    <h3 lang="en"> {!! $event->title_english !!} </h3>
                                    <h3 lang="jp"> {!! $event->title_japan !!} </h3>
                                    <h3 lang="ch"> {!! $event->title_china !!} </h3>
                                    
                                    <p>
                                        <div class="large-4 columns end">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> {!! $event->opening_hours !!} 
                                        </div>
                                    </p>
                                    <p lang="th">
                                        {!! $event->description_thai !!}
                                    </p>
                                    <p lang="en">
                                        {!! $event->description_english !!}
                                    </p>
                                    <p lang="jp">
                                        {!! $event->description_japan !!}
                                    </p>
                                    <p lang="ch">
                                        {!! $event->description_china !!}
                                    </p>
                                    <hr>
                                    <div class="">
                                        <a class="hide-for-print" href="{!! URL::route('attraction',array($event->id)) !!}">
                                            <div class="see-more"> 
                                                <span lang="th">see more ...</span>
                                                <span lang="en">see more ...</span>
                                                <span lang="jp">see more ...</span>
                                                <span lang="ch">see more ...</span>
                                            </div>
                                        </a>
                                   </div>
                             </div>
                        </div>
                    </div>
                    @else 
                    <div id="{!! $event->month !!}" class="event-item-list row">
                        No Event
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </section>
        <section id="news" class="mg-b-2">
            <div class="row">
                <div class="news">
                    <h2 lang="th"> ข่าว </h2>
                    <h2 lang="en"> News </h2>
                    <h2 lang="jp"> ニュース </h2>
                    <h2 lang="ch"> 消息 </h2>
                </div>
            </div>
            <div class="news-item-container">
                @foreach ($posts as $post)
                    <div class="row news-item">
                        <div class="columns large-6 small-12">
                            <div class="news-thumbnail">
                                {!! HTML::image($post->feature_image_url,"",array("class"=>"")) !!}
                            </div>
                        </div>
                        <div class="columns large-6 small-12">
                            <div class="news-content">
                                <h3> {!! $post->title !!} </h3>
                                <hr>
                                
                                <p >
                                    {!! $post->description !!}
                                </p>
                                <div class="">
                                    <a class="hide-for-print" href="{!! URL::route('blog-post',array($post->url)) !!}">
                                        <div class="see-more"> 
                                            <span>read more ...</span>
                                        </div>
                                    </a>
                               </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</section>

@include("web.footer")
@stop



