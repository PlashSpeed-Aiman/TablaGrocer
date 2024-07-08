@extends('layout')
@section('content')
    <section>
        <h1 class="text-2xl">Groceries</h1>
        <p class="mt-5">Create a new grocery list </p>
        <div class="flex flex-col" x-data="groceryList()">
            <form class="my-5">
                <div class="max-w-sm space-y-3">
                    <div class="relative">
                        <input type="email" class="mb-2 peer py-3 px-4  block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter name">
                        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Use today's date as name</button>
                    </div>
                    <p>Add Your Grocery Items</p>
                    <div class="relative">
                        <input type="text" x-model="newItem" class="mb-2 peer py-3 px-4 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Enter item">
                        <button type="button" @click="addGroceryItem" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Add Item</button>
                    </div>
                    <p x-text="items.length"></p>
                    <ul>
                        <template x-for="item in items">
                            <li class="my-1 flex flex-row bg-white border border-gray-200 shadow-sm rounded-xl p-4 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <p x-text="item" ></p>
                                <button class="flex-1 bg-red-300">Delete</button>
                            </li>
                        </template>
                    </ul>
                </div>
            </form>

        </div>
    </section>
    <script defer>
        function groceryList() {
            return {
                newItem: '',
                items: [],
                addGroceryItem() {
                    if (this.newItem.trim() !== '') {
                        this.items.push(this.newItem);
                        this.newItem = '';
                    }
                },
                removeItem(item) {
                    this.items = this.items.filter(i => i !== item);
                }
            };
        }
    </script>
@endsection
