<div class="cart">
    <h3 class="text-3xl text-bold">
       Total {{ Cart::getTotalQuantity()}}
    </h3>
    <div class="flex-1">
        <table class="w-full text-sm lg:text-base" cellspacing="0">
          <thead>
            <tr class="h-12 uppercase" style="width:90vw; display:flex;justify-content:space-between">
              <th class="hidden md:table-cell"></th>
              <th class="text-left" style="width:40vw;display:flex;justify-content:center">Title</th>
              <th class="pl-5 text-left lg:text-right lg:pl-0" style="width:10vw;display:flex;justify-content:center">Quantity</th>
              <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:center"> price</th>
              <th class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:center"> Remove </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($cartItems as $item)
            <tr style="width:90vw; display:flex;justify-content:space-between;margin-top:20px">
              <td class="hidden pb-4 md:table-cell">
                <a href="/product/{{$item['id']}}">
                  <img src="{{ $item['attributes']['image'] }}" style="width:50px;height:40px" alt="Thumbnail">
                </a>
              </td>
              <td style="width:40vw;display:flex;justify-content:center">
                <a href="/product/{{$item['id']}}">
                  <p class="mb-2 md:ml-4">{{ $item['name'] }}</p>
                </a>
              </td>
              <td class="justify-center mt-6 md:justify-end md:flex" style="width:10vw;display:flex;justify-content:center">
                <div class="h-10 w-28">
                  <div class="relative flex flex-row w-full h-8">
                    <livewire:cart-update :item="$item" :key="$item['id']"/>
                  </div>
                </div>
              </td>
              <td class="hidden text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">
                <span class="text-sm font-medium lg:text-base">
                    {{ $item['price'] }} TND
                </span>
              </td>
              <td class="text-right md:table-cell" style="width:10vw;display:flex;justify-content:center">
                  <a href="#" class="px-4 py-2 text-black bg-red-600" wire:click.prevent="removeCart('{{$item['id']}}')">X</a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
        <div>
         Total: {{ Cart::getTotal() }} TND
        </div>
        <div class="mt-5" style="display:flex;justify-content:space-between">
            <a href="#" class="px-6 py-2 text-red-800 bg-red-300" wire:click.prevent="clearAllCart">Reset Cart</a>
            <a href="{{ route('orders.create') }}">
                <button type="submit" style="border:none;border-radius:5px;background-color:green;color:white;padding:10px">
                    ORDER NOW
                </button>
            </a>
        </div>

      </div>
</div>
