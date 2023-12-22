<x-guest-layout>
    <!-- Main Hero Content -->
    <div class="container1">
      <div
        class="container max-w-lg px-4 py-36 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center welcomebackground2">
        </div>
        <div class="middle">
          <h1
            class="text-3xl font-extrabold text-[#B99470] md:text-center sm:leading-none lg:text-5xl">
            <span class="inline md:block">Welcome To Our Restaurant</span>
          </h1>
          <div class="mx-auto mt-2 text-[#B99470] md:text-center lg:text-lg font-extrabold">
            Indulge your senses and embark on a culinary journey with us! We are delighted to welcome you to our online reservation platform, where unforgettable dining experiences await.
          </div>
          <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
              <a href="{{ route('reservations.step.one') }}" type="button"
                class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-[#B99470] rounded-full lg:w-full md:w-auto hover:bg-[#ddbb98] focus:outline-none">
                Make Your Reservation
              </a>
          </div>
    </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="mt-8 bg-[#FEFAE0]">
      <div class="mt-4 text-center">
        <h3 class="text-2xl font-bold text-[#A9B388]">Our Menu</h3>
        <h2 class="text-3xl font-bold text-[#B99470]">
          TODAY'S SPECIALITY</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          @foreach ($specials->menus as $menu)
            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
              <img class="w-full h-55 rounded-lg shadow-lg" src="{{ Storage::url($menu->image) }}"
                alt="Image" />
              <div class="px-6 py-4">
                <h4 class="mb-3 text-xl font-semibold tracking-tight text-[#B99470]">{{ $menu->name }}</h4>
                <p class="leading-normal text-gray-700">{{ $menu->description }}</p>
              </div>
              <div class="flex items-center justify-between p-4">
                <span class="text-xl text-[#B99470]">${{ $menu->price }}</span>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </section>
</x-guest-layout>
