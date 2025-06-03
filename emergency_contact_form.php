<div class="section-collapse">
    <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('emergency-contact')">
        <h3 class="text-lg font-medium text-gray-900">Emergency Contact</h3>
        <svg id="emergency-contact-icon" class="h-5 w-5 text-gray-500 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    <div id="emergency-contact-content" class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
            <label for="emergencyContactName" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="emergencyContactName" name="emergencyContactName" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div id="emergencyContactName-error" class="text-red-500 text-xs italic hidden">Emergency Contact Name is required</div>
        </div>

        <div class="sm:col-span-3">
            <label for="emergencyContactPhone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="tel" id="emergencyContactPhone" name="emergencyContactPhone" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div id="emergencyContactPhone-error" class="text-red-500 text-xs italic hidden">Emergency Contact Phone is required</div>
        </div>

        <div class="sm:col-span-3">
            <label for="emergencyContactRelation" class="block text-sm font-medium text-gray-700">Relationship</label>
            <input type="text" id="emergencyContactRelation" name="emergencyContactRelation" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <div class="sm:col-span-3">
            <label for="emergencyContactAddress" class="block text-sm font-medium text-gray-700">Address</label>
            <input type="text" id="emergencyContactAddress" name="emergencyContactAddress" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>
</div>