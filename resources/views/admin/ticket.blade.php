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
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Ticket Number</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $key => $ticket)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $ticket->customer->name }}</td>
                                    <td>{{ $ticket->customer->email }}</td>
                                    <td>{{ $ticket->ticket_no }}</td>
                                    <td>
                                        @if ($ticket->ticket_price == 0)
                                            Free
                                        @else
                                            {{ $ticket->ticket_price }}
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('fatima.event.ticket', $ticket->customer_id) }}"
                                            target="blank">Download
                                            Ticket</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Family Member</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
