<div class="section-collapse">
    <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('insurance-info')">
        <h3 class="text-lg font-medium text-gray-900">Insurance Information</h3>
        <svg id="insurance-info-icon" class="h-5 w-5 text-gray-500 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    <div id="insurance-info-content" class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
            <label for="insuranceProvider" class="block text-sm font-medium text-gray-700">Insurance Provider</label>
            <input type="text" id="insuranceProvider" name="insuranceProvider" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div id="insuranceProvider-error" class="text-red-500 text-xs italic hidden">Insurance Provider is required</div>
        </div>

        <div class="sm:col-span-3">
            <label for="policyNumber" class="block text-sm font-medium text-gray-700">Policy Number</label>
            <input type="text" id="policyNumber" name="policyNumber" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            <div id="policyNumber-error" class="text-red-500 text-xs italic hidden">Policy Number is required</div>
        </div>

        <div class="sm:col-span-3">
            <label for="insuranceType" class="block text-sm font-medium text-gray-700">Insurance Type</label>
            <select id="insuranceType" name="insuranceType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="private">Private</option>
                <option value="government">Government</option>
                <option value="employer">Employer Provided</option>
                <option value="self">Self Pay</option>
            </select>
        </div>

        <div class="sm:col-span-3">
            <label for="insuranceExpiry" class="block text-sm font-medium text-gray-700">Expiration Date</label>
            <input type="date" id="insuranceExpiry" name="insuranceExpiry" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>
</div>