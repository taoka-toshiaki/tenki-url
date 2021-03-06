新しい気象庁サイトからJSONデータで天気予報などが取得できる事を知りました。  
  
### 取得の方法は下記を参照  
天気予報などを取得したい方はこちらを参考にしてください。   
https://mindtech.jp/?p=1754   
   
### 補足  
上記の取得方法を読んだあとに下記を読むとなんとなくわかると思います・・・↓  
気象庁のarea.jsonというデータがあるのですがこれだと少し不便だったのでJSONを自分用に変更しました。  
なお、気象庁のJSONがアップデートした場合は御自身で対応をお願いいたします。  
  
因みにこんな感じに取得できます。  
https://taoka-toshiaki.com/tools/Weather/  



```json:tenki.json
{
	"weather": [
		{
			"urlno": "011000",
			"name": "宗谷地方"
		},
		{
			"urlno": "012000",
			"name": "上川・留萌地方"
		},
		{
			"urlno": "013000",
			"name": "網走・北見・紋別地方"
		},
		{
			"urlno": "014030",
			"name": "十勝地方"
		},
		{
			"urlno": "014100",
			"name": "釧路・根室地方"
		},
		{
			"urlno": "015000",
			"name": "胆振・日高地方"
		},
		{
			"urlno": "016000",
			"name": "石狩・空知・後志地方"
		},
		{
			"urlno": "017000",
			"name": "渡島・檜山地方"
		},
		{
			"urlno": "020000",
			"name": "青森県"
		},
		{
			"urlno": "030000",
			"name": "岩手県"
		},
		{
			"urlno": "040000",
			"name": "宮城県"
		},
		{
			"urlno": "050000",
			"name": "秋田県"
		},
		{
			"urlno": "060000",
			"name": "山形県"
		},
		{
			"urlno": "070000",
			"name": "福島県"
		},
		{
			"urlno": "080000",
			"name": "茨城県"
		},
		{
			"urlno": "090000",
			"name": "栃木県"
		},
		{
			"urlno": "100000",
			"name": "群馬県"
		},
		{
			"urlno": "110000",
			"name": "埼玉県"
		},
		{
			"urlno": "120000",
			"name": "千葉県"
		},
		{
			"urlno": "130000",
			"name": "東京都"
		},
		{
			"urlno": "140000",
			"name": "神奈川県"
		},
		{
			"urlno": "190000",
			"name": "山梨県"
		},
		{
			"urlno": "200000",
			"name": "長野県"
		},
		{
			"urlno": "150000",
			"name": "新潟県"
		},
		{
			"urlno": "160000",
			"name": "富山県"
		},
		{
			"urlno": "170000",
			"name": "石川県"
		},
		{
			"urlno": "180000",
			"name": "福井県"
		},
		{
			"urlno": "210000",
			"name": "岐阜県"
		},
		{
			"urlno": "220000",
			"name": "静岡県"
		},
		{
			"urlno": "230000",
			"name": "愛知県"
		},
		{
			"urlno": "240000",
			"name": "三重県"
		},
		{
			"urlno": "250000",
			"name": "滋賀県"
		},
		{
			"urlno": "260000",
			"name": "京都府"
		},
		{
			"urlno": "270000",
			"name": "大阪府"
		},
		{
			"urlno": "280000",
			"name": "兵庫県"
		},
		{
			"urlno": "290000",
			"name": "奈良県"
		},
		{
			"urlno": "300000",
			"name": "和歌山県"
		},
		{
			"urlno": "310000",
			"name": "鳥取県"
		},
		{
			"urlno": "320000",
			"name": "島根県"
		},
		{
			"urlno": "330000",
			"name": "岡山県"
		},
		{
			"urlno": "340000",
			"name": "広島県"
		},
		{
			"urlno": "360000",
			"name": "徳島県"
		},
		{
			"urlno": "370000",
			"name": "香川県"
		},
		{
			"urlno": "380000",
			"name": "愛媛県"
		},
		{
			"urlno": "390000",
			"name": "高知県"
		},
		{
			"urlno": "350000",
			"name": "山口県"
		},
		{
			"urlno": "400000",
			"name": "福岡県"
		},
		{
			"urlno": "410000",
			"name": "佐賀県"
		},
		{
			"urlno": "420000",
			"name": "長崎県"
		},
		{
			"urlno": "430000",
			"name": "熊本県"
		},
		{
			"urlno": "440000",
			"name": "大分県"
		},
		{
			"urlno": "450000",
			"name": "宮崎県"
		},
		{
			"urlno": "460100",
			"name": "鹿児島県（奄美地方除く）"
		},
		{
			"urlno": "460040",
			"name": "奄美地方"
		},
		{
			"urlno": "471000",
			"name": "沖縄本島地方"
		},
		{
			"urlno": "472000",
			"name": "大東島地方"
		},
		{
			"urlno": "473000",
			"name": "宮古島地方"
		},
		{
			"urlno": "474000",
			"name": "八重山地方"
		}
	]
}
```


```php:/lib/tenki.php
<?php
 $end_point_url = "https://www.jma.go.jp/bosai/forecast/data/";
 $type = "forecast/";
//  $obj = (object)json_decode(file_get_contents("../assets/js/area.json"));
//  $cnt = 0;
//  foreach($obj->centers as $key=>$value){
// 	$j[$cnt]["name"] = $obj->centers->{$key}->name;
// 	$j[$cnt]["url"] = $end_point_url.$type.$key.".json";
// 	$cnt++;
//  }
 $obj = (object)json_decode(file_get_contents("../assets/js/tenki.json"));
 $cnt = 0;
 foreach($obj->weather as $key=>$value){
	$j[$cnt]["name"] = $obj->weather[$key]->name;
	$j[$cnt]["url"] = $end_point_url.$type.$obj->weather[$key]->urlno.".json";
	$cnt++;
 }
 print json_encode($j);
```

