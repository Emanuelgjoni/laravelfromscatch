  @props(['trigger'])
  <div x-data="{ show: false }" @clcik.away="show = false">

      {{-- Trigger --}}
      <div @click="show= ! show">

          {{ $trigger }}
      </div>
      {{-- Links --}}
      <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50 w-full">
          {{ $slot }}

      </div>
  </div>
