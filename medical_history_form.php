<div class="section-collapse">
    <div class="flex justify-between items-center cursor-pointer" onclick="toggleSection('medical-history')">
        <h3 class="text-lg font-medium text-gray-900">Medical History</h3>
        <svg id="medical-history-icon" class="h-5 w-5 text-gray-500 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
    <div id="medical-history-content" class="mt-4 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        <div class="sm:col-span-6">
            <label for="allergies" class="block text-sm font-medium text-gray-700">Allergies</label>
            <textarea id="allergies" name="allergies" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="List any known allergies"></textarea>
        </div>

        <div class="sm:col-span-6">
            <label for="chronicConditions" class="block text-sm font-medium text-gray-700">Chronic Conditions</label>
            <textarea id="chronicConditions" name="chronicConditions" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="List any chronic conditions"></textarea>
        </div>

        <div class="sm:col-span-6">
            <label for="pastSurgeries" class="block text-sm font-medium text-gray-700">Past Surgeries</label>
            <textarea id="pastSurgeries" name="pastSurgeries" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="List any past surgeries"></textarea>
        </div>

        <div class="sm:col-span-6">
            <label for="familyHistory" class="block text-sm font-medium text-gray-700">Family History</label>
            <textarea id="familyHistory" name="familyHistory" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="List any relevant family medical history"></textarea>
        </div>

        <div class="sm:col-span-6">
            <label for="currentMedications" class="block text-sm font-medium text-gray-700">Current Medications</label>
            <textarea id="currentMedications" name="currentMedications" rows="2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="List current medications with dosage"></textarea>
        </div>
    </div>
</div>