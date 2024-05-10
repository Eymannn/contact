<x-header>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex "><a href="/">ADD New</a> </button>


    <table class="table-fixed text-left mx-3">
   <form action="{{route('search')}}"><input type="text" name="search" id="search" placeholder="name or phone"></form>


        <thead>
          <tr>
            <th>name</th>
            <th>Phone</th>
                <th></th>
                <th></th>
            <th> </th>
          </tr>
        </thead>
        @foreach($contacts as $contact)



        <tbody>
          <tr class="space-y-4">
            @if($contact -> deleted_at)
            <td class=" py-5 my-5 line-through">{{ $contact['name'] }}</td>
            <td class="px-5 line-through" >{{  $contact['Phone'] }}</td>
            @else
            <td class=" py-5 my-5 ">{{ $contact['name'] }}</td>
            <td class="px-5" >{{  $contact['Phone'] }}</td>
            @endif

            <td>
              <td class="px-4"><a href="/contact/{{$contact['id']}}/edit  "><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Edit
               </button></a>

                 <td class="px-4">

                  @if(! $contact -> deleted_at && $contacts->isNotEmpty())
                  <form  action="/contact/{{ $contact['id'] }}"  id="{{ $contact['id'] }}" method="Post"  >
                    @method('DELETE')
                     @csrf
                 <a href="/contact-list"><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                      Archive
                 </button></a>
                </form>
                 @else
                 <form action="{{route('contact.forcedelete',['id'=>$contact->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="bg-yellow-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded" type="submit">
                        Delete
                   </button>
                </form>


                <td class="px-4">
                <form action="{{route('contact.restore',['id' => $contact->id])}}" method="GET">

                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        restore
                   </button>
                </form>
                </td>

           @endif

                


                <td class="px-4">
                    <a href="/contact/{{$contact->id}}"><Button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"> Details </Button></a>
                </td>



          </tr>
        </tbody>


        @endforeach
      </table>




</x-header>
