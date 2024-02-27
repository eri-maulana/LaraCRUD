<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card bg-white">
                <div class="card-body text-center">
                  <form action="{{ route('tweets.store') }}" method="post">
                    @csrf
                    <textarea name="content" class="textarea textarea-bordered w-full" id="" rows="3" placeholder="apa yang kamu pikirkan ?"></textarea>
                    <input type="submit" value="Tweet" class="btn btn-primary  ">
                  </form>
                </div>
              </div>
        </div>
    </div>
</x-app-layout>
