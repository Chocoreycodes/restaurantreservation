<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach ($category->menus as $menu)
            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                <img class="w-8/10 h-8/10 rounded-lg shadow-lg" src="{{ Storage::url($menu->image) }}"
                  alt="Image" />
                <div class="px-6 py-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-[#A9B388] uppercase">{{ $menu->name }}</h4>
                    <p cl<ass="leading-normal text-gray-700">
                        {{ $menu->description }}
                    </p>
                </div>
                <div class="flex items-center justify-between p-4">
                  <span class="text-xl text-[#A9B388]">${{ $menu->price }}</span>
                </div>
              </div>
            @endforeach
          
        </div>
      </div>
</x-guest-layout>
