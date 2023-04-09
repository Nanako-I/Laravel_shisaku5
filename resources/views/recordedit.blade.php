<x-app-layout>

    <!--ヘッダー[START]-->
     <form action="{{ url('people' ) }}" method="POST" class="w-full max-w-lg">
                        @method('PATCH')
                        @csrf
    <h2>{{$person->person_name}}さんの記録</h2>
    </form>
<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th>体温</th>
    </tr>
  </thead>
  <tbody>
    @foreach($temperatures as $temperature)
    <tr>
      <td>{{ $temperature->date }}</td>
      <td>{{ $temperature->temperature }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th>食事量</th>
    </tr>
  </thead>
  <tbody>
    @foreach($foods as $food)
    <tr>
      <td>主食（ごはん）は{{ $food->staple_food }}</td>
      <td>副食（おかず）は{{ $food->side_dish }}食べました。</td>
      <td>薬の服用は{{ $food->medicine == 'yes' ? 'あり' : 'なし' }}。</td>
    </tr>
    @endforeach
  </tbody>
</table>

<table>
  <thead>
    <tr>
      <!--<th>Date</th>-->
      <th>トイレ</th>
    </tr>
  </thead>
  <tbody>
    @foreach($toilets as $toilet)
    <tr>
      <td>尿　{{ $toilet->urine_one }}</td>
      <td>便　{{ $toilet->ben_two }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{-- 追加した Blade ディレクティブ --}}
<p>お疲れ様でした</p>
</x-app-layout>