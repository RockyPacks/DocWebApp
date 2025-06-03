<div id="add-section" class="bg-white rounded-lg shadow-sm overflow-hidden hidden fade-in">
    <div class="p-6 border-b border-gray-200">
        <h2 class="text-xl font-semibold text-gray-800">Add New Patient</h2>
        <p class="text-gray-600 mt-1">Fill in the patient details below</p>
    </div>
    
    <form id="new-patient-form" class="p-6">
        <div class="space-y-6">
            <?php
            include 'personal_info_form.php';
            include 'emergency_contact_form.php';
            include 'medical_history_form.php';
            include 'insurance_info_form.php';
            include 'additional_info_form.php';
            ?>
        </div>

        <div class="pt-6 flex justify-end space-x-3">
            <button type="button" onclick="resetForm()" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Reset
            </button>
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Save Patient
            </button>
        </div>
    </form>
</div>