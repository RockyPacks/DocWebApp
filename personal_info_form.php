<div class="section-collapse">
    <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('personal-info')">
        <h3 class="text-lg font-medium text-gray-900">Personal Information</h3>
        <svg id="personal-info-icon" class="h-5 w-5 text-gray-500 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    <div id="personal-info-content" class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" id="name" name="name" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div id="name-error" class="text-red-500 text-xs italic hidden">Name is required</div>
        </div>

        <div class="sm:col-span-3">
            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
            <input type="date" id="dob" name="dob" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div id="dob-error" class="text-red-500 text-xs italic hidden">Date of Birth is required</div>
        </div>

        <div class="sm:col-span-2">
            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
            <select id="gender" name="gender" required class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                <option value="unknown">Prefer not to say</option>
            </select>
            <div id="gender-error" class="text-red-500 text-xs italic hidden">Gender is required</div>
        </div>

        <div class="sm:col-span-2">
            <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number</label>
            <input type="tel" id="contact" name="contact" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div id="contact-error" class="text-red-500 text-xs italic hidden">Contact Number is required</div>
        </div>

        <div class="sm:col-span-2">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" id="email" name="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
            <textarea id="address" name="address" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            <div id="address-error" class="text-red-500 text-xs italic hidden">Address is required</div>
        </div>

        <div class="sm:col-span-3">
            <label for="nationalId" class="block text-sm font-medium text-gray-700">National ID/Passport</label>
            <input type="text" id="nationalId" name="nationalId" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>
</div>