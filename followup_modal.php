<div id="followup-modal" class="fixed z-20 inset-0 overflow-y-auto hidden" aria-labelledby="followup-modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true"></span>
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="followup-modal-title">
                            Add/Edit Follow-up Note (SOAP)
                        </h3>
                        <form id="followup-form" class="mt-4 space-y-6">
                            <div>
                                <label for="followup-date" class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="date" id="followup-date" name="followup-date" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <div id="followup-date-error" class="text-red-500 text-xs italic hidden">Date is required</div>
                            </div>
                            <div>
                                <label for="subjective" class="block text-sm font-medium text-gray-700">Subjective</label>
                                <textarea id="subjective" name="subjective" rows="4" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Patient's reported symptoms and concerns"></textarea>
                                <div id="subjective-error" class="text-red-500 text-xs italic hidden">Subjective notes are required</div>
                            </div>
                            <div>
                                <label for="objective" class="block text-sm font-medium text-gray-700">Objective</label>
                                <textarea id="objective" name="objective" rows="4" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Clinical observations and measurements"></textarea>
                                <div id="objective-error" class="text-red-500 text-xs italic hidden">Objective notes are required</div>
                            </div>
                            <div>
                                <label for="assessment" class="block text-sm font-medium text-gray-700">Assessment</label>
                                <textarea id="assessment" name="assessment" rows="4" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Diagnosis or clinical impression"></textarea>
                                <div id="assessment-error" class="text-red-500 text-xs italic hidden">Assessment is required</div>
                            </div>
                            <div>
                                <label for="plan" class="block text-sm font-medium text-gray-700">Plan</label>
                                <textarea id="plan" name="plan" rows="4" required class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Treatment plan and follow-up instructions"></textarea>
                                <div id="plan-error" class="text-red-500 text-xs italic hidden">Plan is required</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="submit" form="followup-form" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Save
                </button>
                <button type="button" onclick="closeFollowUpModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</div>