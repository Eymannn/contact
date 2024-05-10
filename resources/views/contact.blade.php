<x-header>

<div
  class="block rounded-lg bg-white shadow-secondary-1 dark:bg-surface-dark dark:text-white text-surface">
  <h5
    class="border-b-2 border-neutral-100 px-6 py-3 text-xl font-medium leading-tight dark:border-white/10">
    contact
  </h5>
  <div class="p-6">
    <h5
      class="mb-2 text-xl font-medium leading-tight">
    {{ $contact->name }}
    </h5>
    <p class="mb-4 text-base">
      Phone : {{ $contact->Phone }}
    </p>
    <a href="/contact/{{$contact['id']}}/edit  "><button
      type="button"
      href="#"
      class="bg-gray-500 inline-block rounded bg-gray px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-primary-3 transition duration-150 ease-in-out hover:bg-gray-accent-300 hover:shadow-gray-2 focus:bg-gray-accent-300 focus:shadow-gray-2 focus:outline-none focus:ring-0 active:bg-gray-600 active:shadow-gray-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
      data-twe-ripple-init
      data-twe-ripple-color="light">
      Edit
    </button></a>
  </div>
</div>

</x-header>



