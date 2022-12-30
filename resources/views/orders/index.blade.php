<x-layout>
    <div style="background-color:rgb(203, 225, 238);display:flex;justify-content:center;align-items:center;margin:auto;padding:20px 0px;">
    <table class="w-full text-sm lg:text-base" cellspacing="0"">
        <thead>
          <tr class="h-12 uppercase" style="width:90vw; display:flex;justify-content:space-between">
            <th class="text-left" style="width:10vw;display:flex">ORDER ID</th>
            <th class="hidden text-right md:table-cell" style="width:30vw;display:flex;justify-content:start">ADDRESS</th>
            <th class="pl-5 text-left lg:text-right lg:pl-0" style="width:10vw;display:flex;justify-content:start">TOTAL</th>
            <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:start">STATUS</th>
            <th class="hidden text-right md:table-cell" style="width:15vw;display:flex;justify-content:start">DATE</th>
            <th class="hidden text-right md:table-cell" style="width:15vw;display:flex;justify-content:start"></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order)
          <tr style="width:90vw; display:flex;justify-content:space-between;margin-top:20px">
            <td class="hidden pb-4 md:table-cell" style="width:10vw">
                {{$order['id']}}
            </td>
            <td style="display:flex;width:30vw">
                <p class="mb-2 md:ml-4">{{$order['address']}}</p>
            </td>
            <td class="hidden text-right md:table-cell" style="display:flex;width:10vw">
                <span class="text-sm font-medium lg:text-base">
                    {{ $order['total'] }} TND
                </span>
            </td>
            <td class="justify-center mt-6 md:justify-end md:flex" style="display:flex;width:10vw">
                <p class="mb-2 md:ml-4">{{ $order['status'] }}</p>
            </td>
            <td class="justify-center mt-6 md:justify-end md:flex" style="display:flex;width:15vw">
                <p class="mb-2 md:ml-4">{{  \Carbon\Carbon::parse($order['created_at'])->diffForHumans()}}</p>
            </td>
            <td class="justify-center mt-6 md:justify-end md:flex" style="display:flex;width:15vw">
                <a href="{{route('orders.show', $order['id'])}}">CHECK</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
</x-layout>
