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
       
<form action="{{ url('toilet/'.$person->id.'/edit') }}" method="POST">
         
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
                        @csrf
                        
                    
                       
                        <p>尿</p>
            　           <span class="text-gray-400 text-100xl" onclick="changeColor(this, 'urine_one')">
                          <i class="material-icons md-480" id="urine_one">check_box</i>
                        </span>
                        <input name="urine_one" type="text" id="urine_one_input" class="w-300 h-10px flex-shrink-0 break-words">
                        
                         <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'urine_two')">
                          <i class="material-icons md-48" id="urine_two">check_box</i>
                        </span>
                        <input name="urine_two" type="text" id="urine_two_input" class="w-300 h-10px flex-shrink-0 break-words">
                        
                        <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'urine_three')">
                          <i class="material-icons md-48" id="urine_three">check_box</i>
                        </span>
                        <input name="urine_three" type="text" id="urine_three_input" class="w-300 h-10px flex-shrink-0 break-words">
                        
                        
                         <p>便</p>
            　           <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'ben_one')">
                          <i class="material-icons md-48" id="ben_one">check_box</i>
                        </span>
                        <input name="ben_one" type="text" id="ben_one_input" class="w-300 h-10px flex-shrink-0 break-words">
                        
                        
                         <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'ben_two')">
                          <i class="material-icons md-48" id="ben_two">check_box</i>
                        </span>
                        <input name="ben_two" type="text" id="ben_two_input" class="w-300 h-10px flex-shrink-0 break-words">
                        
                         <span class="text-gray-400 text-6xl" onclick="changeColor(this, 'ben_three')">
                          <i class="material-icons md-48" id="ben_three_input">check_box</i>
                        </span>
                        <input name="ben_three" type="text" id="ben_three" class="w-300 h-10px flex-shrink-0 break-words">
            
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                送信
                            </button>
                            
        </form>
    <!--右側エリア[START]-->
            <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
         <!-- 現在の本 -->
         
    <!--右側エリア[[END]--> 
</div>
 <!--全エリア[END]-->
 <script>
 
 const urineOneIcon = document.querySelector('#urine_one');

// add a click event listener to the icon
urineOneIcon.addEventListener('click', () => {
  // update the input value
  const urineOneInput = document.querySelector('#urine_one_input');
  urineOneInput.value = 'トイレ';

  // change the icon color
  //urineOneIcon.classList.replace('text-gray-400', 'text-yellow-400');
  urineOneIcon.classList.remove('text-gray-400');
  urineOneIcon.classList.add('text-yellow-400');
});


 const benTwoIcon = document.querySelector('#ben_two');

// add a click event listener to the icon
benTwoIcon.addEventListener('click', () => {
  // update the input value
  const benTwoInput = document.querySelector('#ben_two_input');
  benTwoInput.value = 'おむつ';

  // change the icon color
  benTwoIcon.classList.replace('text-gray-400', 'text-yellow-400');
});

</script>
</x-app-layout>