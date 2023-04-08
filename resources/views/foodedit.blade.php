<x-app-layout>

    <!--ヘッダー[START]-->
     <form action="{{ url('people' ) }}" method="POST" class="w-full max-w-lg">
                        @method('PATCH')
                        @csrf
    <h2>{{$person->person_name}}さんの画面</h2>
    </form>
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <!-- resources/views/components/errors.blade.php -->
       
<form action="{{ url('food/'.$person->id.'/edit') }}" method="POST">
         
      
                        @csrf
                        
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-1">
                        今日のこんだて
                        </label>
                        <input name="food" id="text-box" class="appearance-none block w-full text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="">
                       
                          
                            
                            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
                                
                            
        
       <p>ご飯・パン（主食）</p>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'rice_bowl_icon_1')">
              <i class="material-icons md-48" id="rice_bowl_icon_1">rice_bowl</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'rice_bowl_icon_2')">
              <i class="material-icons md-48" id="rice_bowl_icon_2">rice_bowl</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'rice_bowl_icon_3')">
              <i class="material-icons md-48" id="rice_bowl_icon_3">rice_bowl</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'rice_bowl_icon_4')">
              <i class="material-icons md-48" id="rice_bowl_icon_4">rice_bowl</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'rice_bowl_icon_5')">
              <i class="material-icons md-48" id="rice_bowl_icon_5">rice_bowl</i>
            </span>
            
            <!--<p id="rice_status"></p>-->
            <input name="staple_food" type="text" id="staple_food" class="w-300 h-10px flex-shrink-0 break-words">


 <p>おかず（副食）</p>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'set_meal_1')">
              <i class="material-icons md-48" id="set_meal_1">set_meal</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'set_meal_2')">
              <i class="material-icons md-48" id="set_meal_2">set_meal</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'set_meal_3')">
              <i class="material-icons md-48" id="set_meal_3">set_meal</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'set_meal_4')">
              <i class="material-icons md-48" id="set_meal_4">set_meal</i>
            </span>
            <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'set_meal_5')">
              <i class="material-icons md-48" id="set_meal_5">set_meal</i>
            </span>
            
            <!--<p id="rice_status"></p>-->
            <input name="side_dish" type="text" id="side_dish" class="w-300 h-10px flex-shrink-0 break-words">
            <!--<span class="material-icons">set_meal</span>-->
            
             <p>薬の服用</p>
            <i class="material-icons md-48">medication</i>
            <!--<form action="送信先のURL" method="POST">-->
                <select name="medicine">
                  <option value="selected">選択してください</option>
                  <option value="yes">あり</option>
                  <option value="no">なし</option>
                </select>
                <!--<input type="submit" value="送信">-->
              <!--</form>-->
            
              <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                送信
                            </button>
                            
                            </form>
    <!--右側エリア[START]-->
            <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
         <!-- 現在の本 -->
         <div>
                          <video autoplay muted playsinline id="video"></video>
                      </div>
    
             　 <button type="button" button id="button" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">写真を撮る</button>
                <!--<button type="button" button id="take-photo" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded" @click="capture">キャプチャ</button>-->
                 
            </div>  
                <div>
                   <img id="image" alt="" />
                </div>
            <!--カメラが映っている部分が表示されている箇所↓-->
            <div class="flex">
                 <style>
                    <div class="relative h-screen">
                      <video id="camera-stream" class="absolute inset-0 w-full h-full object-cover"></video>
                       <div id="camera-range" class="absolute inset-10 w-80 h-80 border-2 border-red-500"></div>
                    </div>
        
                  </style>

              <!--福島先生コード-->
              <!--<form action="storage.php" method="post">-->
                 <input type="hidden" id="base64_image" name="base64_image" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded" value="" />
                  <!--<button type="button" button id="" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">画像保存</button>-->
              </form>
    
                    <div id="video-container">
                        
                            <video id="camera-stream" autoplay></video>
                            <div id="camera-range"></div>
                    </div>
    　　　　     <!--<input type="text" id="text-box" class="w-300 h-10">-->
　　　　　　
        </div>
          <div v-show="isModeImage">
              <canvas ref="canvas" width="640" height="480"></canvas>
    </div>
    <!--右側エリア[[END]--> 
</div>
 <!--全エリア[END]-->
 <script>

// function updateStatus() {
//   const rice_bowls = document.querySelectorAll(".text-black[id^='rice_bowl_icon']");
//   const staple_food_input = document.getElementById("staple_food");
//   const count = rice_bowls.length;
//   staple_food_input.value = count/5;
// }

var count_side_dish =0;

function changeColor(element, id) {
  const targetIcon = document.getElementById(id);
  if (element.classList.contains("text-gray-400")) {
    element.classList.remove("text-gray-400");
    element.classList.add("text-black");
    targetIcon.style.color = "#000000";
  } else {
    element.classList.remove("text-black");
    element.classList.add("text-gray-400");
    targetIcon.style.color = "#BDBDBD";
  }
  // updateStatus();
}

const rice_bowl_icon_1 = document.getElementById("rice_bowl_icon_1");
rice_bowl_icon_1.addEventListener("click", () => {
  count++;
  rice_bowl_icon_1.classList.remove("text-gray-400");
  rice_bowl_icon_1.classList.add("text-black");
  updateStaplefoodStatus();
});

const rice_bowl_icon_2 = document.getElementById("rice_bowl_icon_2");
rice_bowl_icon_2.addEventListener("click", () => {
  count++;
  rice_bowl_icon_2.classList.remove("text-gray-400");
  rice_bowl_icon_2.classList.add("text-black");
  updateStaplefoodStatus();
});

const rice_bowl_icon_3 = document.getElementById("rice_bowl_icon_3");
rice_bowl_icon_3.addEventListener("click", () => {
  count++;
  rice_bowl_icon_3.classList.remove("text-gray-400");
  rice_bowl_icon_3.classList.add("text-black");
  updateStaplefoodStatus();
});

const rice_bowl_icon_4 = document.getElementById("rice_bowl_icon_4");
rice_bowl_icon_4.addEventListener("click", () => {
  count++;
  rice_bowl_icon_4.classList.remove("text-gray-400");
  rice_bowl_icon_4.classList.add("text-black");
  updateStaplefoodStatus();
});

const rice_bowl_icon_5 = document.getElementById("rice_bowl_icon_5");
rice_bowl_icon_5.addEventListener("click", () => {
  count++;
  rice_bowl_icon_5.classList.remove("text-gray-400");
  rice_bowl_icon_5.classList.add("text-black");
  updateStaplefoodStatus();
});


  function updateStaplefoodStatus() {
const staple_food = document.getElementById("staple_food");
switch (count) {
case 1:
staple_food.value = "5分の1";
console.log("ステータス文字列： 5分の1")
break;
case 2:
staple_food.value = "5分の2";
console.log("ステータス文字列： 5分の2");
break;
case 3:
staple_food.value = "半分";
console.log("ステータス文字列： 5分の3");
break;
case 4:
staple_food.value = "5分の4";
console.log("ステータス文字列： 5分の4");
break;
case 5:
staple_food.value = "完食";
console.log("ステータス文字列： 完食");
break;
default:
staple_food.value = "";
 console.log("ステータス文字列： ");
break;
}
}

let count = 0;
  const set_meal_1 = document.getElementById("set_meal_1");
set_meal_1.addEventListener("click", () => {
  count_side_dish++;
  set_meal_1.classList.remove("text-gray-400");
  set_meal_1.classList.add("text-black");
  updateStatus();
});

const set_meal_2 = document.getElementById("set_meal_2");
set_meal_2.addEventListener("click", () => {
  count_side_dish++;
  set_meal_2.classList.remove("text-gray-400");
  set_meal_2.classList.add("text-black");
  updateStatus();
});

const set_meal_3 = document.getElementById("set_meal_3");
set_meal_3.addEventListener("click", () => {
  count_side_dish++;
  set_meal_3.classList.remove("text-gray-400");
  set_meal_3.classList.add("text-black");
  updateStatus();
});

const set_meal_4 = document.getElementById("set_meal_4");
set_meal_4.addEventListener("click", () => {
  count_side_dish++;
  set_meal_4.classList.remove("text-gray-400");
  set_meal_4.classList.add("text-black");
  updateStatus();
});

const set_meal_5 = document.getElementById("set_meal_5");
set_meal_5.addEventListener("click", () => {
  count_side_dish++;
  set_meal_5.classList.remove("text-gray-400");
  set_meal_5.classList.add("text-black");
  updateStatus();
});


  function updateStatus() {
const side_dish = document.getElementById("side_dish");
switch (count_side_dish) {
case 1:
side_dish.value = "5分の1";
console.log("ステータス文字列： 5分の1")
break;
case 2:
side_dish.value = "5分の2";
console.log("ステータス文字列： 5分の2");
break;
case 3:
side_dish.value = "半分";
console.log("ステータス文字列： 5分の3");
break;
case 4:
side_dish.value = "5分の4";
console.log("ステータス文字列： 5分の4");
break;
case 5:
side_dish.value = "完食";
console.log("ステータス文字列： 完食");
break;
default:
side_dish.value = "";
 console.log("ステータス文字列： ");
break;
}
}
  

async function main() {
  try {
    const video = document.querySelector("#camera-stream");
    const button = document.querySelector("#button");
    const image = document.querySelector("#image");
 　 let dataUrl = "";
    const stream = await navigator.mediaDevices.getUserMedia({
      video: {
        facingMode: "user",
      },
      audio: false,
    });
    video.srcObject = stream;
    const [track] = stream.getVideoTracks();
    const settings = track.getSettings();
    const { width, height } = settings;
const base64_image = document.getElementById("base64_image");
   button.addEventListener("click", async (event) => {
  const canvas = document.createElement("canvas");
  canvas.setAttribute("width", width);
  canvas.setAttribute("height", height);
  const context = canvas.getContext("2d");
  context.drawImage(video, 0, 0, width, height);
// Webカメラで撮った画像をURLに変換
  dataUrl = canvas.toDataURL("image/jpeg");
    image.src = dataUrl;
  console.log(dataUrl); // 追加
 image.onload = async () => {
      if (!dataUrl) {
        console.log("dataUrl is undefined");
        return;
      }
       // recognizeText関数が呼び出され、テキスト認識を実行
      await recognizeText(dataUrl);
};
    });
  } catch (err) {
    console.error(err);
  }
}
// 福島先生コード↑
// HTMLのフォームでユーザーがアップロードした画像のBase64エンコードされたデータを取得
// Google Cloud Vision APIの「TEXT_DETECTION」機能を使用するためのリクエストデータを作成します。
// HTMLのフォームでユーザーがアップロードした画像のBase64エンコードされたデータを取得
// Google Cloud Vision APIの「OBJECT_LOCALIZATION」機能を使用するためのリクエストデータを作成します。
async function recognizeText(dataUrl) {
  if (!dataUrl) return; // 追加
  const base64Data = dataUrl.split(",")[1];
  const requestData = {
    requests: [
      {
        image: {
          content: base64Data,
        },
        features: [{ type: "OBJECT_LOCALIZATION" }],
        imageContext: {
          languageHints: ["ja"],
        },
      },
    ],
  };

  const apiKey = "{{ config('app.api_key') }}";
  const response = await fetch(
    "https://vision.googleapis.com/v1/images:annotate?key=" + apiKey,
    {
      method: "POST",
      body: JSON.stringify(requestData),
    }
  );
  const responseData = await response.json();
  const objectAnnotations = responseData.responses[0].localizedObjectAnnotations;
  objectAnnotations.forEach((annotation) => {
    console.log(annotation.name); // オブジェクトの名前を表示
    console.log(annotation.boundingBox.normalizedVertices); // オブジェクトの位置情報を表示
  });
}


//   応答データからテキストを抽出し、コンソールに出力
// const data = await response.json();
//   const text = data.responses[0].fullTextAnnotation.text;
//   console.log(text);
//   //   テキストボックスにコンソールに表示された文字を入れる
//   document.getElementById("text-box").value = text;
// }
// main();
// // recognizeText();

// const textBox = document.getElementById('text-box');
// textBox.addEventListener('input', function() {
//   const value = textBox.value;
//   if (!/^\d+(\.\d)?$/.test(value)) {
//     alert('小数点以下1桁までの合計3桁の数字を登録してください');
//   }
// });

</script>
</x-app-layout>