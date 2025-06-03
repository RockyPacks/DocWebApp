<div class="section-collapse">
    <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('additional-info')">
        <h3 class="text-lg font-medium text-gray-900">Additional Information</h3>
        <svg id="additional-info-icon" class="h-5 w-5 text-gray-500 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    <div id="additional-info-content" class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div class="sm:col-span-3">
            <label for="bloodType" class="block text-sm font-medium text-gray-700">Blood Type</label>
            <select id="bloodType" name="bloodType" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="">Unknown</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>

        <div class="sm:col-span-3">
            <label for="organDonor" class="block text-sm font-medium text-gray-700">Organ Donor Status</label>
            <select id="organDonor" name="organDonor" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="no">No</option>
                <option value="yes">Yes</option>
                <option value="unknown">Unknown</option>
            </select>
        </div>

        <div class="sm:col-span-6">
            <label for="notes" class="block text-sm font-medium text-gray-700">Additional Notes</label>
            <textarea id="notes" name="notes" rows="3" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>
    </div>
</div>