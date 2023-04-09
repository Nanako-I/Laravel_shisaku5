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
        
        
          @if (!is_null($temperature) && count($temperature) > 0)
              <div class="flex flex-wrap justify-center -m-2" style="flex-wrap:wrap">
                @foreach ($temperature as $temperature)
                  <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-50 flex items-center border-gray-900 border p-4 rounded-lg bg-yellow-200">
                     <!--@if ($person->filename)-->
                     <!--         <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="{{ asset('storage/sample/' . $person->filename) }}">-->
                     <!--       @else-->
                     <!--         <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">-->
                     <!--       @endif-->
                            

                      <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-bold text-3xl" _msttexthash="277030">{{$temperature->temperature}}</h2>
                        <!--<p class="text-gray-900 font-bold text-xl" _msttexthash="150072">{{$person->date_of_birth}}生まれ</p>-->
                      </div>
                      <a href="{{ route('people.edit', ['id' => $person->id]) }}">
                        @csrf
                        <i class="material-icons md-90 ml-auto">add</i>
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

   