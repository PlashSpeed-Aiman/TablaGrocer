@extends('layout')
@section('content')
   <section>
       <h1 class="text-2xl">Groceries</h1>
       <div class="flex flex-col gap-5 my-5">
           <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
               <div class="p-4 md:p-5">
                   <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                       Create New Grocery List
                   </h3>
                   <p class="mt-1 text-gray-500 dark:text-neutral-400">
                       Some quick example text to build on the card title and make up the bulk of the card's content.
                   </p>
                   <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="{{url('/groceries/create')}}">
                       Create
                   </a>
               </div>
           </div>
           <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
               <div class="p-4 md:p-5">
                   <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                       View Grocery List
                   </h3>
                   <p class="mt-1 text-gray-500 dark:text-neutral-400">
                       Some quick example text to build on the card title and make up the bulk of the card's content.
                   </p>
                   <a class="mt-2 py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                       View
                   </a>
               </div>
           </div>
       </div>

   </section>
@endsection
