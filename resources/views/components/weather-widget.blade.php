<div class="w-128 mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden">
    <div class="current-weather relative">
        <div class="flex items-center justify-between px-4 py-2">
            <div class="flex items-center">
                <div>
                    <div class="text-5xl font-semibold">{{ round($currentWeather['main']['temp']) }} &#176;</div>
                    <div class="text-gray-400">Feels like {{ round($currentWeather['main']['feels_like']) }}&#176;
                    </div>
                </div>
                <div class="ml-5">
                    <div class="font-semibold">{{ ucfirst($currentWeather['weather'][0]['description']) }}</div>
                    <div class="text-gray-400">{{ ucfirst($currentWeather['name']) }}</div>
                </div>
            </div>
            <div>
                <img src="http://openweathermap.org/img/wn/{{ $currentWeather['weather'][0]['icon'] }}@4x.png"
                     alt="icon">
            </div>
        </div>
        <button class="absolute right-0 bottom-0 mb-2 mr-2 text-xs">toggle</button>
    </div>
    <ul class="future-weather bg-gray-800 px-4 py-4 py-6 space-y-8">
        @foreach($futureWeather['list'] as $weather)
            <li class="grid grid-cols-weather items-center">
                <div class="text-gray-400 text-center">{{ $weather['dt_txt'] }}</div>
                <div class="flex items-center">
                    <div>
                        <img src="http://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}@2x.png" alt="">
                    </div>
                    <div >{{ ucfirst($weather['weather'][0]['description']) }}</div>
                </div>
                <div class="text-right text-xs">
                    <div class="">{{ round($weather['main']['temp_max']) }} &#176;</div>
                    <div class="">{{ round($weather['main']['temp_min']) }} &#176;</div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
