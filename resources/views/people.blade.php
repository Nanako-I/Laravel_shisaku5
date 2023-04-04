<!-- resources/views/books.blade.php -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

    <!--ヘッダー[START]-->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="width: 100%;">
            {{ __('利用者一覧') }}
        </h2>
    </x-slot>
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
    <div class="flex-1 text-gray-700 text-left bg-blue-100 px-4 py-2 m-2">
        
　　　<section class="text-gray-600 body-font" _msthidden="18">
    　   　<div class="container px-5 py-24 mx-auto" _msthidden="18">
　　　　　　<div class="flex flex-wrap -m-4" _msthidden="18">
    <!--ある↑-->
         <!-- 現在の本 -->
     @if (!is_null($people) && count($people) > 0)

    @foreach ($people as $person)

        <!--// 処理-->

   

            　　
   　　　　　　　　　　　　　　　　　　　　　　　　　   <div class="p-4 lg:w-1/3" _msthidden="6">
        　　　　　　　　            　　　　　　<div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative" _msthidden="6">
                                          <!--<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1" _msttexthash="84188" _msthidden="1" _msthash="63">CATEGORY</h2>-->
                                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3" _msttexthash="882973" _msthidden="1" _msthash="64">{{$person->person_name}}</h1>
                                        <p class="leading-relaxed mb-3" _msttexthash="5575180" _msthidden="1" _msthash="65">{{$person->date_of_birth}}生まれ</p>
                              　       　 <p class="leading-relaxed mb-3" _msttexthash="5575180" _msthidden="1" _msthash="65">{{$person->gender}}</p>
                                     <!--<a class="text-indigo-500 inline-flex items-center" _msthidden="1">-->
　　　                                   <div class="inline-flex items-center">
                                  　　        <form action="{{ url('people/'.$person->id.'/edit') }}" method="GET">
                                                 @csrf
                                                 
                                                 
                                                  <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg text-lg mr-4">
                                                    詳細を見る
                                                  </button>
                                                  
                                            </form>          
                                            <form action="{{ url('people/'.$person->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                
                                                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg text-lg">
                                                    削除
                                                </button>
                                            </form>
                                            
　　　                                    </div>
                  　　　                                    
                  　　　               </div>
   　　　                          </div>
                　　　                  
                        @endforeach
                    @endif
                    
            </div>
   　　　    </div>
   　　</section>
    </div>
    <!--右側エリア[END]--> 

</div>
 <!--全エリア[END]-->

</body>
</html>
</x-app-layout>