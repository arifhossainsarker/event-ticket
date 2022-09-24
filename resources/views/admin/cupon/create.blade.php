<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('admin.coupon.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Coupon
                                Name</label>
                            <input type="text" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="SW001" name="name" required="">

                            @if ($errors->has('name'))
                                <span class=" text-red-600 font-normal">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-6">
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Coupon
                                Price</label>
                            <input type="text" id="price"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="price" placeholder="100" required="">

                            @if ($errors->has('price'))
                                <span class="text-red-600 font-normal">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        
                        <div class="mb-6">
                            <label for="expiry_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expiry Date</label>
                            <input type="date" id="expiry_date"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="expiry_date" placeholder="100" required="">

                            @if ($errors->has('expiry_date'))
                                <span class="text-red-600 font-normal">{{ $errors->first('expiry_date') }}</span>
                            @endif
                        </div>

                        <button type="submit"
                            class="coupon-btn">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
