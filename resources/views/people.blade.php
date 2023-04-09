<!-- resources/views/books.blade.php -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

    <!--ヘッダー[START]-->
   
    <!--ヘッダー[END]-->
            
        <!-- バリデーションエラーの表示に使用-->
       <!-- resources/views/components/errors.blade.php -->
        @if (count($errors) > 0)
            <!-- Form Error List -->
            <div class="flex justify-between p-4 items-center bg-red-500 text-white rounded-lg border-2 border-white">
                <div><strong>入力した文字を修正してください。</strong></div> 
                <div>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <!-- バリデーションエラーの表示に使用-->
    
    <!--全エリア[START]-->
    
    <div class="flex bg-gray-100">

        <!--左エリア[START]--> 
        <div class="text-gray-700 text-left px-4 py-4 m-2">
            
            


            <!-- 本のタイトル -->
            
        </div>
    </div>
       
        <!--左エリア[END]--> 
        
    
    
    <!--右側エリア[START]-->
   <!-- <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">-->
        
　　　<!--<section class="text-gray-600 body-font" _msthidden="18">-->
   <!-- 　   　<div class="container px-5 py-24 mx-auto" _msthidden="18">-->
　　　<!--　　　<div class="flex flex-wrap -m-4" _msthidden="18">-->
    
       

        <!--// 処理-->
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        
           <!--<section class="text-gray-600 body-font" _msthidden="29">-->
  <!--<div class="container px-5 py-24 mx-auto" _msthidden="29">-->
    <div class="flex flex-col text-center w-full mb-20" _msthidden="2">
      <h1 class="sm:text-3xl text-2xl font-bold title-font mb-4 text-gray-900" _msttexthash="91611" _msthidden="1" _msthash="63">利用者一覧</h1>
    </div>
    
    <!-- 現在の本 -->
                @if (!is_null($people) && count($people) > 0)
              <div class="flex flex-wrap justify-center -m-2" style="flex-wrap:wrap">
                @foreach ($people as $person)
                  <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-50 flex items-center border-gray-200 border p-4 rounded-lg">
                     @if ($person->filename)
                              <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ asset('storage/sample/' . $person->filename) }}">
                            @else
                              <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
                            @endif


                      <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium" _msttexthash="277030">{{$person->person_name}}</h2>
                        <p class="text-gray-500" _msttexthash="150072">{{$person->date_of_birth}}生まれ</p>
                      </div>
                      <a href="{{ route('people.edit', ['id' => $person->id]) }}">
                        @csrf
                        <i class="material-icons md-48 ml-auto">add</i>
                      </a>
                    </div>
                  </div>
                @endforeach
              </div>
              @if (count($people) % 2 == 0)
                <div class="flex justify-center">
                  <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-50 flex items-center border-gray-200 border p-4 rounded-lg"></div>
                  </div>
                </div>
              @endif
            @endif

   
  <!--</div>-->
<!--</section>-->


   

            　　
   　　　　　　　　　　　　　　　　　　　　　　　　　   <!--<div class="p-4 lg:w-1/3" _msthidden="6">-->
        　　　　　　　　            　　　<!--　　　<div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative" _msthidden="6">-->
                                          <!--<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1" _msttexthash="84188" _msthidden="1" _msthash="63">CATEGORY</h2>-->
                               <!--         <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3" _msttexthash="882973" _msthidden="1" _msthash="64">{{$person->person_name}}</h1>-->
                               <!--         <p class="leading-relaxed mb-3" _msttexthash="5575180" _msthidden="1" _msthash="65">{{$person->date_of_birth}}生まれ</p>-->
                              　<!--       　 <p class="leading-relaxed mb-3" _msttexthash="5575180" _msthidden="1" _msthash="65">{{$person->gender}}</p>-->
                                     <!--<a class="text-indigo-500 inline-flex items-center" _msthidden="1">-->
　　　                            <!--       <div class="inline-flex items-center">-->
                               <!--   　　        <form action="{{ url('people/'.$person->id.'/edit') }}" method="GET">-->
                               <!--                  @csrf-->
                                                 
                                                 
                               <!--                   <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg text-lg mr-4">-->
                               <!--                     詳細を見る-->
                               <!--                   </button>-->
                                                  
                               <!--             </form>          -->
                               <!--             <form action="{{ url('people/'.$person->id) }}" method="POST">-->
                               <!--                         @csrf-->
                               <!--                         @method('DELETE')-->
                                                
                               <!--                 <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg text-lg">-->
                               <!--                     削除-->
                               <!--                 </button>-->
                               <!--             </form>-->
                                            
　　　                            <!--        </div>-->
                  　　　                                    
                  　　　          <!--     </div>-->
   　　　                         <!-- </div>-->
                　　　                  
                       
                    
    <!--        </div>-->
   　<!--　　    </div>-->
   　<!--　</section>-->
    <!--</div>-->
    <!--右側エリア[END]--> 

</div>
 <!--全エリア[END]-->

</body>
</html>
</x-app-layout>