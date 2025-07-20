<x-layout>
    <section class="px-4 py-12 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-7xl">
      <!-- Section Header -->
     <div class="mb-12 text-center">
    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">Our Projects</h2>
    <p class="mx-auto mt-3 max-w-2xl text-xl text-white sm:mt-4">Check out some of our recent work and case studies.</p>
</div>

      <!-- Projects Grid -->
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Project 1 -->
        <div class="overflow-hidden rounded-lg bg-white shadow-md transition-transform duration-300 hover:scale-105">
          <div class="h-48 overflow-hidden bg-blue-500">
           <img src="{{ asset('images/sas.png') }}" alt="Project 1" class="h-full w-full object-cover" />
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-900">Smart Attendance Student</h3>
            <p class="mt-2 text-gray-600">Complete implementation of university website project with improved UX and modern aesthetics.</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-800">Web Design</span>
              <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-800">UX</span>
            </div>
            
          </div>
        </div>

        <!-- Project 2 -->
        <div class="overflow-hidden rounded-lg bg-white shadow-md transition-transform duration-300 hover:scale-105">
          <div class="h-48 overflow-hidden bg-green-500">
            <img src="{{ asset('images/smkn2.jpg') }}" alt="Project 2" class="h-full w-full object-cover" />
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-900">Network Enginering Support</h3>
            <p class="mt-2 text-gray-600">Network support to all school Purwakarta city in computer-based exams.</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="rounded-full bg-purple-100 px-3 py-1 text-xs font-medium text-purple-800">LAN</span>
              <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-800">Cable Installation</span>
            </div>

          </div>
        </div>

        <!-- Project 3 -->
        <div class="overflow-hidden rounded-lg bg-white shadow-md transition-transform duration-300 hover:scale-105">
          <div class="h-48 overflow-hidden bg-purple-500">
            <img src="{{ asset('images/comingsoon.jpg') }}" alt="ComingSoon" class="h-full w-full object-cover" />
          </div>
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-900">Tunggu yaaaa</h3>
            <p class="mt-2 text-gray-600">Akan Segera datang</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-800">Upcoming</span>
              <span class="rounded-full bg-indigo-100 px-3 py-1 text-xs font-medium text-indigo-800">Upcoming</span>
            </div>
           
          </div>
        </div>
      </div>

      <!-- View More Button -->
      <div class="mt-12 text-center">
        <a href="#" class="inline-flex items-center rounded-md border border-transparent bg-blue-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-blue-700"> View all projects </a>
      </div>
    </div>
  </section>
</x-layout>