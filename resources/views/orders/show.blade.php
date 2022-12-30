<x-layout>
    <div style="background-color:rgb(203, 225, 238);display:flex;justify-content:center;align-items:center;margin:auto;padding:20px 0px;">
        <table class="w-full text-sm lg:text-base" cellspacing="0">
            <thead>
              <tr class="h-12 uppercase" style="width:90vw; display:flex;justify-content:space-between">
                <th class="hidden md:table-cell"></th>
                <th class="text-left" style="width:40vw;display:flex;justify-content:center">Product</th>
                <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">Unit Price</th>
                <th class="pl-5 text-left lg:text-right lg:pl-0" style="width:10vw;display:flex;justify-content:center">Quantity</th>
                <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">Price</th>
                <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order['items'] as $item)
              <tr style="width:90vw; display:flex;justify-content:space-between;margin-top:20px">
                <td class="hidden pb-4 md:table-cell">
                    <img src="{{ $item['attributes']['image'] }}" style="width:50px;height:40px" alt="Thumbnail">
                </td>
                <td style="width:40vw;display:flex;justify-content:center">
                    <p class="mb-2 md:ml-4">{{ $item['name'] }}</p>
                </td>
                <td class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">
                  <span class="text-sm font-medium lg:text-base">
                      {{ $item['price'] }} TND
                  </span>
                </td>
                <td class="text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">
                    <span class="text-sm font-medium lg:text-base">
                        {{ $item['quantity'] }}
                    </span>
                </td>
                <td class="text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">
                    <span class="text-sm font-medium lg:text-base">
                        {{ $item['price'] * $item['quantity'] }}
                    </span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    <div style="margin:10px">
        <strong>Total:</strong> <span>{{$order['total']}} TND</span>
        <span class="text-sm font-medium lg:text-base" style="color: {{$order['status'] == 'paid' ? 'green' : 'red'}};float:right">
            {{ strtoupper($order['status'])  }}
        </span>
    </div>
    @if ($order['status'] == 'not paid')
    <div style="display:flex;justify-content:center;align-items:center">
        <a href="{{route('orders.edit', $order['id'])}}">
            <button style="border:none;border-radius:5px;background-color:rgb(35, 131, 35);color:white;padding:10px">
                PAY NOW
            </button>
        </a>
    </div>
    @endif
</x-layout>
