<x-header>

    <form action="/contact/{{ $contact->id }}" id="contacts" method="Post" class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf

        @method('PATCH')

        <div>
          <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">name</label>
          <div class="mt-2.5">
            <input type="text" name="name" value="{{$contact->name}}" required="" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>



        <div class="sm:col-span-2">
          <label for="Phone" class="block text-sm font-semibold leading-6 text-gray-900">Phone number</label>
          <div class="mt-2.5">
            <input type="text" name="Phone" value="{{$contact->Phone}}" required="" id="phone" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>


      </div>




      <div class="mt-10">
        <button type="submit"  class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
      </div>

    </form>
    <div class=" mx-auto mt-10 max-w-xl sm:mt-7">
        <a href="/contact-list"><button   class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</button>
     </a> </div>



</x-header>
