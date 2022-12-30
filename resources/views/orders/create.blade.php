    <x-layout>
        <div style="background-color:rgb(199, 188, 188);display:flex;justify-content:center;align-items:center;width:55vw;margin:auto;padding:20px 0px">
        <table class="w-full text-sm lg:text-base" cellspacing="0">
            <thead>
              <tr class="h-12 uppercase" style="width:50vw; display:flex;justify-content:space-between">
                <th class="hidden md:table-cell"></th>
                <th class="text-left" style="width:40vw;display:flex;justify-content:center">Product</th>
                <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:start">Unit Price</th>
                <th class="pl-5 text-left lg:text-right lg:pl-0" style="width:10vw;display:flex;justify-content:start">Quantity</th>
                <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:start">Price</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($cartItems->toArray() as $item)
              <tr style="width:50vw; display:flex;justify-content:space-between;margin-top:20px">
                <td class="hidden pb-4 md:table-cell">
                    <img src="{{ $item['attributes']['image'] }}" style="width:50px;height:40px" alt="Thumbnail">
                </td>
                <td style="width:40vw;display:flex;justify-content:center">
                    <p class="mb-2 md:ml-4">{{ $item['name'] }}</p>
                </td>
                <td class="hidden text-right md:table-cell" style="width:10vw;display:flex;">
                    <span class="text-sm font-medium lg:text-base">
                        {{ $item['price'] }} TND
                    </span>
                </td>
                <td class="justify-center mt-6 md:justify-end md:flex" style="width:10vw;display:flex;">
                    <p class="mb-2 md:ml-4">{{ $item['quantity'] }}</p>
                </td>
                <td class="justify-center mt-6 md:justify-end md:flex" style="width:10vw;display:flex;">
                    <p class="mb-2 md:ml-4">{{ $item['price'] * $item['quantity']}} TND</p>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <form action="{{route('orders.store')}}" method="POST" style="width:55vw;margin:auto;padding:20px 0px">
            @csrf
            <strong>Total:</strong> <span>{{ Cart::getTotal() }} TND</span>
            <div style="display:flex;align-items:center;gap:10px;margin:20px 0px">
                <label for="address"><strong>ADDRESS:</strong></label>
                <input type="text" name="address" placeholder="Set an address for delivery.." style="width:50vw;padding:5px;outline:none" required>
            </div>
            <div style="display:flex;justify-content:center;align-items:center;margin-top:30px">
                <button type="submit" style="border:none;border-radius:5px;background-color:blue;color:white;padding:10px">
                    CONFIRM
                </button>
            </div>
        </form>
    </x-layout>
