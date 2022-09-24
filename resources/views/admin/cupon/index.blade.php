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
                    <div class="add-button">
                        <a class="" href="{{ route('admin.coupon.create') }}">Add</a>
                    </div>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cupons as $key => $cupon)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $cupon->name }}</td>
                                    <td>{{ $cupon->price }}</td>
                                    <td>{{ $cupon->expiry_date }}</td>
                                    <td>
                                        @if ($cupon->max_uses == 1)
                                            Available
                                        @else
                                            Used
                                        @endif
                                    </td>
                                    <td>

                                        <form action="{{ route('admin.coupon.destroy', $cupon->id) }}" method="Post">
                                            <a href="{{ route('admin.coupon.edit', $cupon->id) }}">Edit</a>
                                            ||
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger text-black">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
