<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-5xl mb-4 font-medium text-gray-900">Top Jobs in Nepal</h1>
      <p class="leading-relaxed mb-8">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p>
   
   <form class="flex w-full justify-center items-end" action="{{route('listings.index')}}" method="get">
      <div class="relative mr-4 w-full lg:w-1/2 text-left">
        <input type="text" id="s" name="s" value="{{request()->get('s')}}" class="inline-flex text-black bg-gray-500 border-2 py-2 px-6 hover:bg-indigo-600 rounded text-lg">
      </div>
  <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"> Search </button>
   </form>

   <p class="text-sm mt-2 text-gray-500 mb-8  w-full"> full stack php, vue and node, python, react native, java </p>
    </div>
  </div>
</section>